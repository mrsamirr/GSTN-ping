@extends('layouts.app')

@section('title', 'Landing Page')

@section('body')
 
    @include('landing.hero')
    @include('landing.form')
    @include('landing.features')
    @include('landing.use-cases')
    @include('landing.faq')
    {{-- @include('landing.testimonials') --}}

@endsection
