@extends('layout.app')

{{-- Powored by Elmarzougui Abdelghafour --}}

@section('content')

   @include('checkout.creditDirect._header')
   @include('checkout.creditDirect._steps')
   @include('checkout.creditDirect._checkout')
   
@endsection