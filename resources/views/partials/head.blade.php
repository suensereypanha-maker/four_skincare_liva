<script>document.documentElement.classList.add('js')</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $pageTitle ?? __('site.title') }}</title>
<meta name="description" content="{{ $metaDescription ?? __('site.description') }}">
<meta name="theme-color" content="#0c6b58">

<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@600;700&amp;family=Manrope:wght@400;500;600;700;800&amp;family=Noto+Sans+Khmer:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
