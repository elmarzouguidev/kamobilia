@extends('layout.app')

{{-- Powored by Elmarzougui Abdelghafour --}}

@section('content')

   @include('checkout._section_header')
  {{--@include('checkout._section_steps')--}} 
   @include('checkout._section_checkout')
   
@endsection

@section('javascript')
   <script>

      function calculateQte(){
         let qtenumber = parseInt(document.getElementById('qtenumber').value);
         console.log(qtenumber);
      }

   </script>
@endsection