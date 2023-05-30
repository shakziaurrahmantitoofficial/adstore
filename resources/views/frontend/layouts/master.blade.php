<!DOCTYPE html>
<html lang="bd">

<head>
    <!-- CSS Files -->
   @include('frontend.partials.css')
   
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
