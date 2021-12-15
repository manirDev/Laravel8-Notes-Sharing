@extends('layouts.home')

@section('title', $setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords', $setting->keywords)

@section('sidebar')
    @include('home._sidebar')
@endsection

@section('slider')
    @include('home._slider')
@endsection

@section('content')
    @include('home.content')

@endsection
