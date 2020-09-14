@extends('layout.app')

{{-- Powored by Elmarzougui Abdelghafour --}}

@section('content')

   @include('home._section_top_slider')
   @include('home._section_slider')
   @include('home._section_products_pop')
   @include('home._section_products_pop_nv')
   @include('home._section_cate')
   @include('home._section_blog')
   @include('home._section_about')
  {{--@include('home._section_blog_tow')--}} 
   @include('home._section_instagram')

@endsection