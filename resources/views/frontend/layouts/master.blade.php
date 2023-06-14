<!DOCTYPE html>
<html lang="bd">

<head>
    <!-- CSS Files -->
   @include('frontend.partials.css')
   <title>@yield('title')</title>
   <link rel="icon" type="image/x-icon" href="http://localhost/adstore/public/frontend/assets/images/logo.png">
</head>

<body>
  <!-- aiz-main-wrapper -->
  <div class="aiz-main-wrapper d-flex flex-column">

    <!-- Header -->
    <!-- Top Bar -->
    

    @include('frontend.partials.header')


    @include('frontend.partials.nav')

    
    @yield('content')



    @include('frontend.partials.upper_footer')


        @include('frontend.partials.footer')
    
</div>
    <!-- SCRIPTS -->
   @include('frontend.partials.script')


</body>

</html>
