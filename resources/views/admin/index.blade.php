@extends('layouts.adminHome')

@section('title',$setting->title.'-Admin-Dashboard')

@section('description')
    {{$setting->description}}
@endsection

@section('keywords', $setting->keywords)


@section('content')

    @include('admin.content')

@endsection
