@extends('layout.app')

{{-- Powored by Elmarzougui Abdelghafour --}}

@section('content')

   @include('checkout.creditBanque._header')
   @include('checkout.creditBanque._steps')
   @include('checkout.creditBanque._checkout')
   
@endsection