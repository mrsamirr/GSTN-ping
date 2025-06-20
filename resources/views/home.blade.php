@extends('layouts.app')

@section('title', 'Landing Page')

@section('body')
 
    @include('landing.hero')
    @include('landing.socialsLogos')
    {{-- @include('landing.form') --}}
    {{-- @include('landing.features') --}}
    @include('landing.use-cases')
    @include('landing.comparison')
    @include('landing.videoDemo')
    @include('landing.DemoFeatures')
    @include('testimonial-marquee')
    @include('landing.registration-from')
    @include('landing.faq')

@endsection
