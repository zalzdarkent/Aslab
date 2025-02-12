<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    @include('utils.head')
</head>

<body class="bg-white dark:bg-[#111827]">
    {{-- navbar --}}
    @include('components.navbar')

    {{-- jumbotron --}}
    @include('components.jumbotron')

    {{-- counter section --}}
    @include('components.counter')

    {{-- about us --}}
    @include('components.about')

    {{-- Services Section with Card Carousel --}}
    @include('components.services')

    {{-- User Profile Section with Carousel --}}
    @include('components.team', ['anggotas' => $anggotas])

    {{-- Garis --}}
    @include('utils.garis')

    {{-- activity --}}
    @include('components.activity')

    {{-- Garis --}}
    @include('utils.garis')

    {{-- FAQ --}}
    @include('components.faq')

    {{-- Garis --}}
    @include('utils.garis')

    {{-- contact --}}
    @include('components.contact')

    {{-- loader --}}
    @include('utils.loader')

    {{-- footer --}}
    @include('components.footer')
</body>

</html>
