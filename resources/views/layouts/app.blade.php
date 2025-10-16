<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Chèn phần head --}}
    @include('layouts.head')
</head>
  <body>
    @include('layouts.header')

    @if (Request::path() !== '/')
        @include('layouts.nav')
    @endif

    <div>@yield('content')</div>

    @include('layouts.footer')

    @include('layouts.js')
  </body>
</html>