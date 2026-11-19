<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$baseDir = realpath(__DIR__ . '/..');

echo "1. Rendering Blade views to static HTML...\n";

$pages = [
    'index' => 'index.html',
    'about' => 'about.html',
    'contact' => 'contact.html',
    'product' => 'product.html',
    'checkout' => 'checkout.html',
];

// Order matters: replace longer specific asset and route paths first!
$replacements = [
    'http://localhost:8000/css/' => 'css/',
    'http://localhost:8000/js/' => 'js/',
    'http://localhost:8000/images/' => 'images/',
    'http://localhost:8000/checkout' => 'checkout.html',
    'http://localhost:8000/product' => 'product.html',
    'http://localhost:8000/set-product' => 'product.html',
    'http://localhost:8000/about-us' => 'about.html',
    'http://localhost:8000/about' => 'about.html',
    'http://localhost:8000/contact-us' => 'contact.html',
    'http://localhost:8000/contact' => 'contact.html',
    'http://localhost:8000/#products' => 'index.html#products',
    'http://localhost:8000#products' => 'index.html#products',
    'http://localhost:8000/#deals' => 'index.html#deals',
    'http://localhost:8000#deals' => 'index.html#deals',
    'http://localhost:8000/' => 'index.html',
    'http://localhost:8000' => 'index.html',
    '"/css/' => '"css/',
    '"/js/' => '"js/',
    '"/images/' => '"images/',
    "'//css/'" => "'css/'",
    "'//js/'" => "'js/'",
    "'//images/'" => "'images/'",
];

foreach ($pages as $viewName => $fileName) {
    $html = view($viewName)->render();
    foreach ($replacements as $search => $replace) {
        $html = str_replace($search, $replace, $html);
    }
    
    file_put_contents($baseDir . '/' . $fileName, $html);
    echo "  -> Created {$fileName} (" . strlen($html) . " bytes)\n";
}

echo "2. Syncing assets (css, js, images) to repository root...\n";

function copyDir($src, $dst) {
    if (!is_dir($dst)) {
        mkdir($dst, 0755, true);
    }
    $dir = opendir($src);
    while (false !== ($file = readdir($dir))) {
        if ($file != '.' && $file != '..') {
            if (is_dir($src . '/' . $file)) {
                copyDir($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

copyDir($baseDir . '/public/css', $baseDir . '/css');
copyDir($baseDir . '/public/js', $baseDir . '/js');
copyDir($baseDir . '/public/images', $baseDir . '/images');

if (file_exists($baseDir . '/public/favicon.ico')) {
    copy($baseDir . '/public/favicon.ico', $baseDir . '/favicon.ico');
}

file_put_contents($baseDir . '/.nojekyll', '');
echo "  -> Created .nojekyll\n";

echo "Done! Static site successfully built at repository root.\n";
