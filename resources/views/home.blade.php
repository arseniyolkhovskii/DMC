
@extends('layouts.main')
@section('title', 'Главная')
@section('content')
    @include('components.hero')
    @include('components.services')
    @include('components.why-us')
    @include('components.prices')
    @include('components.clients')
    @include('components.contact')
@endsection
