@extends('layouts.app')

@section('title', 'Landing Page')

@section('body')
 
    @include('landing.hero')
    @include('landing.form')
    @include('landing.features')
    @include('landing.use-cases')
    @include('landing.comparison')
    @include('landing.faq')

@endsection
