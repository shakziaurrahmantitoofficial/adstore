@php
    $setting = App\Models\Setting::where('id',1)->first();
@endphp
<div class="top-navbar border-soft-secondary z-1035 header-top-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0 text-white mt-2">
                   
                    <li class="list-inline-item mr-3 border-left-0 pr-3 pl-0">
                        <a href="tel:+8801325-319106" class="text-reset d-inline-block py-2">
                           
                            <i class="fa-solid fa-phone header-icon"></i>
                            <span class="header-icon-text">{{ isset($setting->phone) }}</span>
                        </a>
                    </li>
                            
                    <li class="list-inline-item mr-3 border-left-0 pr-3 pl-0">
                        <a href="tel:+8801325-319106" class="text-reset d-inline-block py-2">
                           
                            <i class="fa-regular fa-envelope header-icon"></i>

                            <span class="header-icon-text">{{ isset($setting->email) }}</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="col-6 text-right d-none d-lg-block">
                <div class="social-icons mt-3">
                    <ul class="list-inline my-md-0 social-icon-hover">
                        <li class="list-inline-item pr-3">
                            <p><a href="" class="header-icon-text">Language</a></p>
                         </li>
                         <li class="list-inline-item pr-3">
                            <p><a href="" class="header-icon-text">Currency</a></p>
                         </li>
                        <li class="list-inline-item">
                            <p style="font-size: 16px;">Follow Us</p>
                         </li>
                        <li class="list-inline-item icon-hover">
                            <a href="{{ isset($setting->facebook) }}" target="_blank"
                                class="facebook"><i style=""
                                    class="fa-brands fa-facebook-f icon-social-style-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ isset($setting->instagram) }}" target="_blank"
                                class="instagram"><i class="fa-brands fa-instagram icon-social-style-in"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ isset($setting->twitter) }}" target="_blank" class="twitter">
                                <i class="fa-brands fa-twitter icon-social-style-t"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ isset($setting->linkedin) }}"
                                target="_blank" class="linkedin"><i class="fa-brands fa-linkedin-in icon-social-style-link"></i></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="{{ isset($setting->youtube) }}"
                                target="_blank" class="youtube"><i class="fa-brands fa-youtube icon-social-style-y"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>