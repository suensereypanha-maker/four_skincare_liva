<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('partials.head', [
      'pageTitle' => View::yieldContent('title', __('site.title')),
      'metaDescription' => __('site.description'),
    ])
  </head>
  <body>
    @include('partials.header', ['activeNav' => $activeNav ?? '', 'isHome' => $isHome ?? false])

    <main id="main">
      @yield('content')
    </main>

    @include('partials.footer', ['isHome' => $isHome ?? false])
    @include('partials.drawers')
    @stack('scripts')
  </body>
</html>
