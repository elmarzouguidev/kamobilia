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

</body>

</html>