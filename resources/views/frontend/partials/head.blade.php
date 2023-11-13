<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @php
    $generalSetting = \App\Models\GeneralSetting::first();
    $seoSetting = \App\Models\SeoSetting::first();
    @endphp
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $seoSetting->description }}">
    <meta name="keywords" content="{!! @$seoSetting->keywords !!}">
    @if (!empty($seoSetting->title))
        <title>{{ @$seoSetting->title }}</title>
    @else
        <title>{{ config('app.name', 'Portfolio') }}</title>
    @endif
    @if (!empty($generalSetting->favicon))
    <link rel="icon" type="image/x-icon" href="{{asset($generalSetting->favicon)}}">
    @else
    <link rel="icon" type="image/x-icon" href="{{asset('dist/img/favicon.png')}}">
    @endif
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style-plugin-collection.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        .page-item {
            background: #ff895e;
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 5px;
            line-height: 40px;
            position: relative;
            z-index: 1;
            color: #000;
        }

        .page-item > a {
            border: none;
            background-color: #f8f9fa;
            color: #000;
        }

        .page-item > a:hover {
            border: none;
            color: #000;
        }
        
    </style>
</head>

<body>
    <div class="preloader">
        <img src="{{asset('frontend/images/preloader.gif')}}" alt="">
    </div>