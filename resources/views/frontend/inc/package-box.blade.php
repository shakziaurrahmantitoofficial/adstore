@php
    $setting = App\Models\Setting::where('id',1)->first();
@endphp

<div class="ownerName mt-2">
    <p class="m-0 ml-4">Package List</p>
</div>

<div class="my-3">


    <div class="row">

        @if(isset($ads) && $ads != null)

        @php
            $adsData = App\Models\ads::findOrFail(base64_decode(base64_decode($ads)));
        @endphp
            


        @if($adsData->packageName == 'platinum')

            <div class="col-md-6 col-12">
                @include('frontend.inc.platinum-package')
            </div>
        @elseif ($adsData->packageName == 'gold')

            <div class="col-md-6 col-12">
                @include('frontend.inc.gold-package')
            </div>
        @elseif ($adsData->packageName == 'silver')
            <div class="col-md-6 col-12">
                @include('frontend.inc.silver-package')
            </div>
        @else
            <div class="col-md-6 col-12">
                @include('frontend.inc.regular-package')
            </div>
        @endif

        @else
            <div class="col-md-6 col-12">
                @include('frontend.inc.platinum-package')
            </div>
            <div class="col-md-6 col-12">
                @include('frontend.inc.gold-package')
            </div>
            <div class="col-md-6 col-12">
                @include('frontend.inc.silver-package')
            </div>
            <div class="col-md-6 col-12">
                @include('frontend.inc.regular-package')
            </div>



            @if(App\Models\membership::where("customerId", Auth::guard("customer")->id())->count() == 0)
            <div class="col-md-6 col-12">
                @include('frontend.inc.member-package')
            </div>
            @endif

        @endif

    </div>


</div>