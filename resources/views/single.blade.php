@extends('layouts.main')

@section('title', 'Walid Shahriar | Portfolio')

@section('content')

    {{-- The order here determines the order on the website --}}

    @include('pages.home')
    @include('pages.about')
    @include('pages.skills')
    @include('pages.projects')
    @include('pages.contact')

@endsection