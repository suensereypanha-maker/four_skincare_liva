<?php

use Illuminate\Contracts\Console\Kernel;

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Kernel::class);
$kernel->bootstrap();

$baseDir = realpath(__DIR__.'/..');
$outArg = null;
foreach (array_slice($argv, 1) as $arg) {
    if (str_starts_with($arg, '--out=')) {
        $outArg = substr($arg, 6);
    }
}

$outputRoot = $outArg !== null && $outArg !== ''
    ? (str_starts_with($outArg, '/') ? rtrim($outArg, '/') : $baseDir.'/'.trim($outArg, '/'))
    : $baseDir.'/dist';

if (! is_dir($outputRoot)) {
    mkdir($outputRoot, 0755, true);
}

echo "1. Rendering Blade views to static HTML (EN & KM) into {$outputRoot}...\n";

$pages = [
    'index' => 'index.html',
    'about' => 'about.html',
    'contact' => 'contact.html',
    'product' => 'product.html',
    'checkout' => 'checkout.html',
];

function renderStaticPages(array $pages, string $locale, string $outputRoot, string $outSubdir = '', string $assetPrefix = ''): void
{
    app()->setLocale($locale);
    $outDir = $outSubdir !== '' ? $outputRoot.'/'.trim($outSubdir, '/') : $outputRoot;

    if (! is_dir($outDir)) {
        mkdir($outDir, 0755, true);
    }

    foreach ($pages as $viewName => $fileName) {
        $enTarget = $locale === 'en' ? $fileName : '../'.$fileName;
        $kmTarget = $locale === 'km' ? $fileName : 'km/'.$fileName;

        // Order matters: replace longer specific asset and route paths first!
        $replacements = [
            'http://localhost:8000/css/' => $assetPrefix.'css/',
            'http://localhost:8000/js/' => $assetPrefix.'js/',
            'http://localhost:8000/images/' => $assetPrefix.'images/',
            'http://localhost/css/' => $assetPrefix.'css/',
            'http://localhost/js/' => $assetPrefix.'js/',
            'http://localhost/images/' => $assetPrefix.'images/',
            'http://localhost:8000/lang/en' => $enTarget,
            'http://localhost:8000/lang/km' => $kmTarget,
            'http://localhost/lang/en' => $enTarget,
            'http://localhost/lang/km' => $kmTarget,
            'http://localhost:8000/checkout' => 'checkout.html',
            'http://localhost:8000/product' => 'product.html',
            'http://localhost:8000/set-product' => 'product.html',
            'http://localhost:8000/about-us' => 'about.html',
            'http://localhost:8000/about' => 'about.html',
            'http://localhost:8000/contact-us' => 'contact.html',
            'http://localhost:8000/contact' => 'contact.html',
            'http://localhost:8000/?' => 'index.html?',
            'http://localhost:8000?' => 'index.html?',
            'http://localhost:8000/#products' => 'index.html#products',
            'http://localhost:8000#products' => 'index.html#products',
            'http://localhost:8000/#deals' => 'index.html#deals',
            'http://localhost:8000#deals' => 'index.html#deals',
            'http://localhost:8000/' => 'index.html',
            'http://localhost:8000' => 'index.html',
            'http://localhost/checkout' => 'checkout.html',
            'http://localhost/product' => 'product.html',
            'http://localhost/set-product' => 'product.html',
            'http://localhost/about-us' => 'about.html',
            'http://localhost/about' => 'about.html',
            'http://localhost/contact-us' => 'contact.html',
            'http://localhost/contact' => 'contact.html',
            'http://localhost/?' => 'index.html?',
            'http://localhost?' => 'index.html?',
            'http://localhost/#products' => 'index.html#products',
            'http://localhost#products' => 'index.html#products',
            'http://localhost/#deals' => 'index.html#deals',
            'http://localhost#deals' => 'index.html#deals',
            'http://localhost/' => 'index.html',
            'http://localhost' => 'index.html',
            '"/css/' => '"'.$assetPrefix.'css/',
            '"/js/' => '"'.$assetPrefix.'js/',
            '"/images/' => '"'.$assetPrefix.'images/',
            "'//css/'" => "'".$assetPrefix."css/'",
            "'//js/'" => "'".$assetPrefix."js/'",
            "'//images/'" => "'".$assetPrefix."images/'",
        ];

        $html = view($viewName)->render();
        foreach ($replacements as $search => $replace) {
            $html = str_replace($search, $replace, $html);
        }

        $targetPath = $outDir.'/'.$fileName;
        file_put_contents($targetPath, $html);
        $label = $outSubdir !== '' ? trim($outSubdir, '/').'/'.$fileName : $fileName;
        echo "  -> Created {$label} (".strlen($html)." bytes)\n";
    }
}

renderStaticPages($pages, 'en', $outputRoot);
renderStaticPages($pages, 'km', $outputRoot, 'km', '../');

echo "2. Syncing assets (css, js, images) to {$outputRoot}...\n";

function copyDir(string $src, string $dst): void
{
    if (! is_dir($dst)) {
        mkdir($dst, 0755, true);
    }
    $dir = opendir($src);
    while (false !== ($file = readdir($dir))) {
        if ($file !== '.' && $file !== '..') {
            if (is_dir($src.'/'.$file)) {
                copyDir($src.'/'.$file, $dst.'/'.$file);
            } else {
                copy($src.'/'.$file, $dst.'/'.$file);
            }
        }
    }
    closedir($dir);
}

copyDir($baseDir.'/public/css', $outputRoot.'/css');
copyDir($baseDir.'/public/js', $outputRoot.'/js');
copyDir($baseDir.'/public/images', $outputRoot.'/images');

if (file_exists($baseDir.'/public/favicon.ico')) {
    copy($baseDir.'/public/favicon.ico', $outputRoot.'/favicon.ico');
}

file_put_contents($outputRoot.'/.nojekyll', '');
echo "  -> Created .nojekyll\n";

echo "Done! Static site successfully built at {$outputRoot}.\n";
