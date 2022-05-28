<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- font awesome -->
<link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.css')}}">

    <title>@yield('title')</title>
    @yield('css')

</head>

<body>
@include('front.layouts.header')

    @yield('content')




   <!-- Remove the container if you want to extend the Footer to full width. -->
   <section  class="mt-5">
    <!-- Footer -->
    <footer class="text-center text-white  " style="background-color: #0a4275;  ">
        <!-- Grid container -->
        <div class="container p-4 pb-0 ">

        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2); ">
            © 2020 Copyright:
            <a class="text-white " href="index.html">TÜRKMEN NEWS</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</section>


<!-- Optional JavaScript; choose one of the two! -->


<script src="{{asset('bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>




    @yield('js')
</body>

</html>
