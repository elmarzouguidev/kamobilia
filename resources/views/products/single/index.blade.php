@extends('layout.app')

{{-- Powored by Elmarzougui Abdelghafour --}}

@section('content')

   @include('products.single.header')
   
   @include('products.single._section_product')

   @include('products.single.__section_Rapide')

@endsection


@section('jsavis')
    <script>
        $(function () {
            $('#jquery_form').submit(function (event) {
                event.preventDefault();
                $('.jquery_error_message').addClass('hidden').text('');
                $.ajax({
                    url: '{{route('products.avis',$product->slug)}}',
                    method: 'POST',
                    data: $('#jquery_form').serialize(),
                    success: function(response) {
                        $("#jquery_success_message").removeClass('hidden');
                        $('.jquery_field').val('');
                    },
                    error: function( data ) {
                        if (data.status === 422) {
                            let response = $.parseJSON(data.responseText);
                            $.each(response.errors, function (key, value) {
                                $('#jquery_error_' + key).removeClass('hidden').text(value);
                            });
                        }
                    }
                });
            });
        });
    </script>
@endsection
