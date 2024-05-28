@extends('layouts.app')


@section('title', 'Regular Program')


{{-- @include('layouts.app') --}}
@include('partials.navbar')
@include('partials.heading')
@include('partials.hero')
{{-- @include('partials.intro') --}}
@include('partials.stats')
@include('partials.main-features')
@include('partials.tabs')
@include('partials.compare')
@include('partials.testimonials')
@include('partials.pricing')
@include('partials.faq')
@include('partials.footer')