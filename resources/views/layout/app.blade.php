<!DOCTYPE html>
<html lang="en">

<head>
    <!--Powored by HayMacProduction-->
  {{--@include('layout.headerFull')--}}
  @include('layout.header')
  <livewire:styles />
</head>

<body>

    <div class="page-loader"></div>

    <div class="wrapper">

        {{--Use class "navbar-fixed" or "navbar-default"
        If you use "navbar-fixed" it will be sticky menu on scroll (only for large screens)--}}

        <!-- ======================== Navigation ======================== -->

        @include('layout.__navbarFixed')

         @yield('content')

        <!-- ================== Footer HayMacProduction  ================== -->
        @include('layout.__footer')

    </div> <!--/wrapper-->

  {{--@include('layout.scriptFull')--}}
   @include('layout.scripts')
 
    <script>
        $(function () {
            $('#formSubsciber').submit(function (event) {
                event.preventDefault();
                $('.jquery_error_message').addClass('hidden').text('');
                $.ajax({
                    url: '{{route('subscribe')}}',
                    method: 'POST',
                    data: $('#formSubsciber').serialize(),
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


</body>

</html>