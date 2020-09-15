@extends('layout.app')

{{-- Powored by Elmarzougui Abdelghafour --}}

@section('content')

   @include('checkout.creditBanque._header')
   @include('checkout.creditBanque._steps')
   @include('checkout.creditBanque._checkout')
   
@endsection

@section('javascript')
   <script>
      /*var form = document.getElementById("calculatForm");
      if(ele.addEventListener){
         ele.addEventListener("submit", calculatePrice, false);  //Modern browsers
      }else if(ele.attachEvent){
         ele.attachEvent('onsubmit', calculatePrice);            //Old IE
      }*/
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
        // console.log(formPrice);
      }

   </script>
@endsection