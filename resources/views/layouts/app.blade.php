<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Student Cooking Blog') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>



    <div id="app">

        @include('inc.navbar')
        {{-- comment <div class="container">--}}
          @include('inc.messages')
{{-- <div class="container">--}}




</div>
<div class="row">
    <div class="col-md-8 col-lg-8">
        @yield('content')
    </div>

    <div class="col-md-4 col-lg-4">
        @include('inc.sidebar')
      </div>
    </div>
</div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>


<hr>
{{--<footer>
 <footer id="footer" class="text-center">//--}}
<footer class="text-center">
  <p>Copyright 2018 &copy; MP Sites</p>
</footer>

</body>
</html>
