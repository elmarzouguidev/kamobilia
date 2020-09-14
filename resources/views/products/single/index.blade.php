@extends('layout.app')

{{-- Powored by Elmarzougui Abdelghafour --}}

@section('content')

   @include('products.single.header')
   
   @include('products.single._section_product')

   @include('products.single._section_modal')

@endsection