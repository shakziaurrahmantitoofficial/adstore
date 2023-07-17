@php
    $discount = 20;
@endphp
<div class="card overflow-hidden">
    <div class="card-body">
        <div class="text-center mb-2 mt-3">
            @if(isset($setting->header_logo))
                <img class="mw-100 mx-auto mb-2"
                    src="{{ asset($setting->header_logo) }}"
                    height="50">
            @endif

            <!-- <h5 class=" h6 fw-600">PLATINUM</h5> -->

            <button class="btn btn-primary btn-block"
                style="background-color:#572c84!important;border-color:#572c84!important">PLATINUM</button>

            <h6 class=" h6 fw-600">Top Header Banner</h6>
            <h6 class=" h6 fw-600">1185px450px</h6>
        </div>
        
        <form id="packageForm1" method="post"
        
            @if(isset($ads) && $ads != null)
                 action="{{Route('checkout.customerAdPackageCheckout')}}"
            @else
                action="{{ Route('checkout.customerCheckout') }}"
            @endif

        >

            @csrf
                <input type="hidden" name="packageName" value="platinum">
            @if(isset($ads) && $ads != null)
                <input type="hidden" name="adid" value="{{ $ads }}">
            @endif

            <div class="form-group">
            @if(Auth::guard("customer")->user()->profile_status != 1)

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum1" aria-label=""
                                value="7, 1050" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum1">Days : 7 , Price: 1050 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum2" aria-label=""
                                value="15, 2250" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum2">Days : 15 , Price: 2250 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum3" aria-label=""
                                value="30, 4500" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum3">Days : 30 , Price: 4500 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum4" aria-label=""
                                value="60, 9000" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum4">Days : 60 , Price: 9000 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum9" aria-label=""
                                value="90, 13500" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum9">Days : 90 , Price: 13500 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum5" aria-label=""
                                value="180, 27000" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum5">Days : 180 , Price: 27000 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum6" aria-label=""
                                value="365, 54750" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum6">Days : 365 , Price: 54750 Tk</label>
                </div>
            @else


        @if(App\Models\membership::where("customerId", Auth::guard("customer")->id())->where("payment", 1)->count() > 0)

            @if(App\Models\package::where("customerId", Auth::guard("customer")->id())->where("payment", 1)->where("price", "Free")->count() < 1)

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum11" aria-label=""
                                value="30, 0" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum11">Days : 30 , Price: Free</label>
                </div>

            @endif

        @endif
        
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum1" aria-label=""
                                value="7, 1050" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum1">Days : 7 , Price: 1050 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum2" aria-label=""
                                value="15, 2250" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum2">Days : 15 , Price: 2250 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum3" aria-label=""
                                value="30, 4500" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum3">Days : 30 , Price: 4500 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum4" aria-label=""
                                value="60, {{9000 - ((9000 * $discount) / 100)}}" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum4">Days : 60 , Price: {{9000 - ((9000 * $discount) / 100)}} Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum10" aria-label=""
                                value="90, {{13500 - ((13500 * $discount) / 100)}}" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum10">Days : 90 , Price: {{13500 - ((13500 * $discount) / 100)}} Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum5" aria-label=""
                                value="180, {{27000 - ((27000 * $discount) / 100)}}" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum5">Days : 180 , Price: {{27000 - ((27000 * $discount) / 100)}} Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="platinum6" aria-label=""
                                value="365, {{54750 - ((54750 * $discount) / 100)}}" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="platinum6">Days : 365 , Price: {{54750 - ((54750 * $discount) / 100)}} Tk</label>
                </div>
            @endif
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block">Purchase
                    Package</button>
            </div>
        </form>
    </div>
</div>