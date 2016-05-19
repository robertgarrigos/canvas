<!DOCTYPE html>
<html lang="en">
    <head>
        @include('shared.meta')

        @include('shared.fontawesome')

        <meta name="description" content="{{ $meta_description }}">

        @yield('title')

        <link rel="alternate" type="application/rss+xml" href="{{ url('rss') }}" title="RSS Feed {{ config('blog.title') }}">
        <link href="{{ elixir('css/blog.css') }}" rel="stylesheet">

        @yield('styles')
    </head>
    <body>
        @include('site.blog.partials.header')

        @yield('content')

        @include('site.blog.partials.footer')

        <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>

        @yield('scripts')
    </body>
</html>