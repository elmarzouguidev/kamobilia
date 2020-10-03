@extends('layout.app')

{{-- Powored by Elmarzougui Abdelghafour --}}

@section('content')

   @include('contact.header')
   @include('contact.contact')
   
@endsection

@section('jsavis')
    <script>
        $(function () {
            $('#sendmail').submit(function (event) {
                event.preventDefault();
                $('.jquery_error_message').addClass('hidden').text('');
                $.ajax({
                    url: '{{route('contact')}}',
                    method: 'POST',
                    data: $('#sendmail').serialize(),
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