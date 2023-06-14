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
                style="background-color:#572c84!important;border-color:#572c84!important">GOLD</button>

            <h6 class=" h6 fw-600">Long Banner (Middle)</h6>
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
                <input type="hidden" name="packageName" value="gold">
            @if(isset($ads) && $ads != null)
                <input type="hidden" name="adid" value="{{ $ads }}">
            @endif

            <div class="form-group">
                @if(Auth::guard("customer")->user()->profile_status != 1)

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold1" aria-label=""
                                value="7, 910" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold1">Days : 7 , Price: 910 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold2" aria-label=""
                                value="15, 1925" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold2">Days : 15 , Price: 1925 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold3" aria-label=""
                                value="30, 3900" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold3">Days : 30 , Price: 3900 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold4" aria-label=""
                                value="60, 7800" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold4">Days : 60 , Price: 7800 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold7" aria-label=""
                                value="90, 11700" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold7">Days : 90 , Price: 11700 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold5" aria-label=""
                                value="180, 23400" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold5">Days : 180 , Price: 23400 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold6" aria-label=""
                                value="365, 47450" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold6">Days : 365 , Price: 47450 Tk</label>
                </div>

                @else
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold1" aria-label=""
                                value="7, 910" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold1">Days : 7 , Price: 910 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold2" aria-label=""
                                value="15, 1925" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold2">Days : 15 , Price: 1925 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold3" aria-label=""
                                value="30, 3900" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold3">Days : 30 , Price: 3900 Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold4" aria-label=""
                                value="60, {{7800 - ((7800 * $discount) / 100)}}" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold4">Days : 60 , Price: {{7800 - ((7800 * $discount) / 100)}} Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold7" aria-label=""
                                value="90, {{11700 - ((11700 * $discount) / 100)}}" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold7">Days : 90 , Price: {{11700 - ((11700 * $discount) / 100)}} Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold5" aria-label=""
                                value="180, {{23400 - ((23400 * $discount) / 100)}}" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold5">Days : 180 , Price: {{23400 - ((23400 * $discount) / 100)}} Tk</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="gold6" aria-label=""
                                value="365, {{47450 - ((47450 * $discount) / 100)}}" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="gold6">Days : 365 , Price: {{47450 - ((47450 * $discount) / 100)}} Tk</label>
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