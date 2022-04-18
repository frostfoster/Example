<!doctype html>
<html lang="en">
<head>
  <title>Portal</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
   
    <link rel="stylesheet" href="{{ asset('assets/plugins/notification/jquery.notify.css') }}">
    {{-- <link rel="stylesheet" href="path/to/jquery.notify.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/notification/jquery.notify.fonts.css') }}">

  
	<script src="{{ asset('assets/plugins/notification/jquery.notify.js') }}"></script>
    <!-- App CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/portal.css') }}">

</head>
<body>
    <div id="app">
         <header class="app-header fixed-top">
            @include('layouts.components.navbar')
            @include('layouts.components.sidebar')
        </header>

        <main class="app">
            @yield('content')
        </main>

        

    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4" >
            @include('layouts.components.footer')
            <!--//container-fluid-->
        </div>
        <footer></footer>
    </div>
    </div>
    <script src="{{ asset('assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>  

    <!-- Charts JS -->
    <script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script> 
    <script src="{{ asset('assets/js/index-charts.js') }}"></script> 
    
    <!-- Page Specific JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script> 

</body>
</html>
