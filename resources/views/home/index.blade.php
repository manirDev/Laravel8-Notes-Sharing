@extends('layouts.home')

@section('title', 'Main')

@section('description', 'Main')

@section('keywords', 'Main')

@section('hero')
    @include('home._hero')
@endsection

@section('slider')
    @include('home._slider')
@endsection

@section('content')
    @include('home.content')

@endsection
