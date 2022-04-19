<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@if(trim($__env->yieldContent('seo_title')))@yield('seo_title') – {{config('seo.title')}}@else{{config('seo.title')}}@endif</title>
<meta name="description" content="@if(trim($__env->yieldContent('seo_description')))@yield('seo_description')@else{{config('seo.description')}}@endif">
<meta property="og:title" content="@if(trim($__env->yieldContent('seo_title')))@yield('seo_title') - {{config('seo.title')}}@else{{config('seo.title')}}@endif">
<meta property="og:description" content="@if(trim($__env->yieldContent('seo_description')))@yield('seo_description')@else{{config('seo.description')}}@endif">
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:site_name" content="{{config('seo.title')}}">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<meta name="google-site-verification" content="hOwpuT2lii4aipIoYn0wFgDfWitdIwDlm5EGR8ZAUuw" />
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="format-detection" content="telephone=no">
<link href="{{ mix('assets/css/app.css') }}" type="text/css" rel="stylesheet" />
<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
</head>
<body>
<header class="site-header">
  <div>
    <div class="logos">
      <a href="/{{locale()}}" title="Home">
        <h1 class="page-title">Akkuhydraulische Werkzeuge<em>von Intercable</h1>
      </a>
    </div>
    <a href="javascript:;" class="btn-menu js-menu-btn">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="burger">
        <path d="M3 12H21" stroke="#E3051B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M3 6H21" stroke="#E3051B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M3 18H21" stroke="#E3051B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#E3051B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cross">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
      </svg>
    </a>
  </div>
</header>
@include('web.partials.nav')
