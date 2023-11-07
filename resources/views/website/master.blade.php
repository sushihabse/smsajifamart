<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>SajifaMart - @yield('title')</title>
    @include('website.includes.meta')
    @include('website.includes.style')
</head>
<body>
@include('website.includes.header')
<main class="main">
    @yield('body')
</main>
@include('website.includes.footer')
@include('website.includes.script')
</body>
</html>
