@extends('layout.app')

{{-- Powored by Elmarzougui Abdelghafour --}}

@section('content')

   @include('checkout.creditBanque._header')
  {{--@include('checkout.creditBanque._steps')--}} 
   @include('checkout.creditBanque._checkout')
   
@endsection

@section('javascript')
   <script>
 
      function calculatePrice(){
         let productPrice = document.getElementById("productPrice").value;
     // console.log(productPrice);
         let clientPrice = parseInt(document.getElementById("surfface").value);
        // console.log(clientPrice);
         let totalPrice = productPrice * clientPrice;
         let alpha =  document.getElementById("totalpricer").innerText = totalPrice+" MAD";
       // console.log(alpha);

       let formPrice = document.getElementById('totalPriceer');
       formPrice.value = totalPrice;

       let toQtee = document.getElementById('totalQtee');
         toQtee.value = clientPrice;
        // console.log(formPrice);
      }

      function calculateQte(){

         /****Haymacproduction Elmarzougui Abdelghafour ***/
         let qtenumber = parseInt(document.getElementById('qtenumber').value);

         let prodpricer = parseInt(document.getElementById('prodprice').value);

         let allPrice = (qtenumber * prodpricer);

         let toPricer = document.getElementById("toPricer").innerText = allPrice+" MAD";

         //console.log(qtenumber);
         //console.log(prodpricer);
        // console.log(allPrice);

         let toPrice = document.getElementById('totalPriceer');
         toPrice.value = allPrice;

         let toQtee = document.getElementById('totalQtee');
         toQtee.value = qtenumber;
      }

   </script>
@endsection