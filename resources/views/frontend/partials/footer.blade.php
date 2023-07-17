@php
    $setting = App\Models\Setting::where('id',1)->first();
@endphp
<section class="pt-3 pb-3 text-light" style="background-color:#d0cece !important">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                @if(isset($setting->copyright_image))
                 <img class="img-fit mx-auto h-20px h-md-60px h-md-55px ls-is-cached lazyloaded" src="{{ asset($setting->copyright_image) }}" data-src="" alt="" onerror="">
                @endif
            </div>
        </div>
    </div>
   
</section>
<footer class="pt-3 pb-3 pb-xl-3" style="background-color:#d0cece !important;font-family: 'Roboto', sans-serif;">
    <div class="container">
        <div class="row">
             <div class="col-lg-9 mx-auto">
                 <h5 class="h5 text-left text-font text-dark text-center footer-text-info">&copy {{ isset($setting->copyright_text) ? $setting->copyright_text : ''}}</h5>
             </div>
        </div>
    </div>
   
</footer>