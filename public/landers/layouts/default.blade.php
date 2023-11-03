<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- required meta tag -->
    <meta name="author" content="@yield('shortcut-text')">
    <meta name="title" content="@yield('shortcut-text')">
    <meta name="keyword" content="@yield('shortcut-text')">
    <meta name="description" content="@yield('shortcut-text')">

    <meta property="og:title" content="@yield('shortcut-text')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="@yield('shortcut-text').com" />
    <meta property="og:image" content="@yield('shortcut-icon')" />
    <meta property="og:image:width" content="104" />
    <meta property="og:image:height" content="87" />
    <meta property="og:site_name" content="@yield('shortcut-text')" />
    <meta property="og:description" content="@yield('shortcut-text')" />

    <link rel="shortcut icon" href="@yield('shortcut-icon')" />

    @yield('styles')
    
    @yield('pre-scripts')


    <!-- GTM script -->
    @if($gtmContainerId)
        @include('google.gtmcontainer')
    @endif
    <!-- GTM script -->

    <!-- Notify script -->
    @include('notify.notify')
    <!-- Notify script -->

    <!-- FB-Pixel script -->
    @include('fb.fb-pixel')
    <!-- FB-Pixel script -->


    <title>@yield('title', $texts->title ?? '')</title>
</head>


<body>
    @yield('body')

    @yield('scripts')

</body>

</html>