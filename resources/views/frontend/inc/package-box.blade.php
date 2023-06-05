<div class="ownerName mt-2">
    <p class="m-0 ml-4">Package List</p>
</div>

<div class="my-3">


    <div class="row">

        @if(isset($ads) && $ads != null)
        @php
            $Package = App\Models\ads::findOrFail(base64_decode(base64_decode($ads)));
        @endphp
            
        
        @if($Package->packageName == 'platinum')
        <div class="col-md-6">
            @include('frontend.inc.platinum-package');
        </div>
        @elseif ($Package->packageName == 'gold')
        <div class="col-md-6">
            @include('frontend.inc.gold-package');
        </div>
        @elseif ($Package->packageName == 'silver')
        <div class="col-md-6">
            @include('frontend.inc.silver-package');
        </div>
        @else
        <div class="col-md-6">
            @include('frontend.inc.regular-package');
        </div>
        @endif

        @else
        
        <div class="col-md-6">
            @include('frontend.inc.platinum-package');
        </div>
        <div class="col-md-6">
            @include('frontend.inc.gold-package');
        </div>
        <div class="col-md-6">
            @include('frontend.inc.silver-package');
        </div>
        <div class="col-md-6">
            @include('frontend.inc.regular-package');
        </div>
        @endif

    </div>


</div>