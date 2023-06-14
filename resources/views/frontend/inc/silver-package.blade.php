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
                style="background-color:#572c84!important;border-color:#572c84!important">SILVER</button>

            <h6 class=" h6 fw-600">Long Banner (Category)</h6>
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
                <input type="hidden" name="packageName" value="silver">
            @if(isset($ads) && $ads != null)
                <input type="hidden" name="adid" value="{{ $ads }}">
            @endif

            <div class="form-group">
                @if(Auth::guard("customer")->user()->profile_status != 1)
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver1" aria-label=""
                                value="7, 700" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver1">Days : 7 , Price: 700 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver2" aria-label=""
                                value="15, 1500" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver2">Days : 15 , Price: 1500 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver3" aria-label=""
                                value="30, 3000" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver3">Days : 30 , Price: 3000 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver4" aria-label=""
                                value="60, 6000" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver4">Days : 60 , Price: 6000 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver5" aria-label=""
                                value="90, 9000" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver5">Days : 90 , Price: 9000 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver5" aria-label=""
                                value="180, 18000" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver5">Days : 180 , Price: 18000 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver6" aria-label=""
                                value="365, 36500" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver6">Days : 365 , Price: 36500 Tk</label>
                </div>

                @else
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver1" aria-label=""
                                value="7, 700" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver1">Days : 7 , Price: 700 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver2" aria-label=""
                                value="15, 1500" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver2">Days : 15 , Price: 1500 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver3" aria-label=""
                                value="30, 3000" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver3">Days : 30 , Price: 3000 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver4" aria-label=""
                                value="60, {{6000 - ((6000 * $discount) / 100)}}" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver4">Days : 60 , Price: {{6000 - ((6000 * $discount) / 100)}} Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver5" aria-label=""
                                value="90, {{9000 - ((9000 * $discount) / 100)}}" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver5">Days : 90 , Price: {{9000 - ((9000 * $discount) / 100)}} Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver5" aria-label=""
                                value="180, {{18000 - ((18000 * $discount) / 100)}}" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver5">Days : 180 , Price: {{18000 - ((18000 * $discount) / 100)}} Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="silver6" aria-label=""
                                value="365, {{36500 - ((36500 * $discount) / 100)}}" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="silver6">Days : 365 , Price: {{36500 - ((36500 * $discount) / 100)}} Tk</label>
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