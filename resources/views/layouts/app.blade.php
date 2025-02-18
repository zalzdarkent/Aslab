<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    @include('utils.head')
</head>

<body class="bg-white dark:bg-[#111827]">
    {{-- navbar --}}
    @include('components.navbar')

    @yield('container')

    {{-- footer --}}
    @include('components.footer')
    @livewireScripts
</body>

</html>
