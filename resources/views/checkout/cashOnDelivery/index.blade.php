@extends('layout.app')

{{-- Powored by Elmarzougui Abdelghafour --}}

@section('content')

   @include('checkout.cashOnDelivery._header')
   @include('checkout.cashOnDelivery._steps')
   @include('checkout.cashOnDelivery._checkout')
   
@endsection