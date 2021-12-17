@extends('layouts.home')

@section('title', $setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords', $setting->keywords)
@section('hero')
    @include('home._hero')
@endsection

@section('banner')
    @include('home._banner')
@endsection

@section('content')
    @include('home.content')

@endsection
