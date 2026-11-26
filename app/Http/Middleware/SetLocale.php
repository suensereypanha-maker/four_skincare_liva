<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Supported application locales.
     *
     * @var array<int, string>
     */
    private const SUPPORTED_LOCALES = ['en', 'km'];

    /**
     * Handle an incoming request and apply the active locale.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $requested = $request->query('lang');

        if (is_string($requested) && in_array($requested, self::SUPPORTED_LOCALES, true)) {
            $request->session()->put('locale', $requested);
            Cookie::queue('liva_locale', $requested, 60 * 24 * 365);
            App::setLocale($requested);

            return $next($request);
        }

        $locale = $request->session()->get('locale')
            ?? $request->cookie('liva_locale')
            ?? config('app.locale', 'en');

        if (! is_string($locale) || ! in_array($locale, self::SUPPORTED_LOCALES, true)) {
            $locale = 'en';
        }

        App::setLocale($locale);

        return $next($request);
    }
}
