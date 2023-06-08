@php
    $setting = App\Models\Setting::where('id',1)->first();
@endphp
<section class="mt-auto" style="background-color:#e9e9e9 !important;">
    <div class="container">
       <div class="row no-gutters">
         <div class="col-lg-1"></div>
           <div class="col-lg-3 col-sm-12">
             
                 <div class="calloremail mt-3 float-lg-end ml-3">
                    <ul class="list-unstyled">
                        
                       <li class="mb-4">
                           <a href="{{url('/')}}" class="d-block mt-2">
                            @if(isset($setting->footer_logo))
                             <img class="custom_logo ls-is-cached lazyloaded" src="{{ asset($setting->footer_logo) }}" alt="">
                            @endif
                         </a>
                       </li>
                       <li class="mb-2">
                          <p class="footer-logo-text">{{ isset($setting->footer_content) ? $setting->footer_content : '' }}</p>
                       </li>
                    </ul>
             </div>
           </div>
           <div class="col-lg-4"></div>
      <div class="col-lg-3 col-sm-12">
        <div class="my-4">
                  <h5 class="text-font" style="">Contact Us</h5>
                  <div class="calloremail mt-3 float-lg-end">
                    <ul class="list-unstyled">
                       <li class="mb-2">
                          <!--<span><strong  style="color:#000;" class="d-block float-lg-end text-center ">+8809678800843</strong></span>-->
                          <p class="footer-text-p"><span class="w-400" style="background: #1c1c1c;color: #fff;border-radius: 50%;padding: 2px 5px;font-family: 'Roboto', sans-serif;"><i class="fa-solid fa-phone"></i></span> {{ isset($setting->phone) ? $setting->phone : '' }} </p>
                       </li>
                       <li class="mb-2">
                          <p class="footer-text-p"><span class="" style="background: #1c1c1c;color: #fff;border-radius: 50%;padding: 2px 5px;font-family: 'Roboto', sans-serif;"><i class="fa-regular fa-envelope"></i></span> {{ isset($setting->email) ? $setting->email : '' }} </p>
                       </li>
                       <li class="mb-2">
                          <p class="footer-text-p"><span class="" style="background: #1c1c1c;color: #fff;border-radius: 50%;padding: 2px 5px;font-family: 'Roboto', sans-serif;"><i class="fa-solid fa-house-chimney"></i></span> {{ isset($setting->address) ? $setting->address : '' }} </p>
                       </li>
                        
                    </ul>
             </div>
                   
                </div>
                
         </div> 
     <div class="col-lg-1"></div>
       </div>
    </div>
 </section>