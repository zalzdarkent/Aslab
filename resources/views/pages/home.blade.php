@extends('layouts.app')

@section('container')
    {{-- Jumbotron --}}
    @include('components.jumbotron')

    {{-- counter section --}}
    @include('components.counter')

    {{-- about us --}}
    @include('components.about')

    {{-- Services Section with Card Carousel --}}
    @include('components.topics')

    {{-- User Profile Section with Carousel --}}
    @include('components.team', ['anggotas' => $anggotas ?? collect()])

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
@endsection
