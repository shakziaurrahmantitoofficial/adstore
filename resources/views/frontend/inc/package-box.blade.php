<div class="ownerName mt-2">
    <p class="m-0 ml-4">Package List</p>
</div>

<div class="my-3">


    <div class="row">




        <div class="col-md-6">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="text-center mb-2 mt-3">
                        <img class="mw-100 mx-auto mb-2"
                            src="https://sobkisubazar.com/public/uploads/all/8d5kET0tQeVw8NRDQxHjRebEu34lHUQzrLwqqGGV.png"
                            height="80">

                        <!-- <h5 class=" h6 fw-600">PLATINUM</h5> -->

                        <button class="btn btn-primary btn-block"
                            style="background-color:#572c84!important;border-color:#572c84!important">PLATINUM</button>

                        <h6 class=" h6 fw-600">Top Header Banner</h6>
                        <h6 class=" h6 fw-600">1185px450px</h6>
                    </div>

                    <ul class="list-group list-group-raw fs-18 text-center">
                        <li class="list-group-item py-2">1 Product Upload</li>
                    </ul>

                    <form id="packageForm1" method="post"

                        @if(isset($ads) && $ads != null)
                            action="{{ Route('checkout.customerAdPackageCheckout',$ads) }}"
                        @else
                            action="{{ Route('checkout.customerCheckout') }}"
                        @endif
                        >

                        @csrf
                        <input type="hidden" name="packageName" value="platinum">
                        @if(isset($ads) && $ads != null)
                        <input type="hidden" name="adid" value="{{base64_encode(base64_encode($ads))}}">
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
                                            value="60, 13500" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="platinum4">Days : 60 , Price: 13500 Tk</label>
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
                                            value="365, 54000" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="platinum6">Days : 365 , Price: 54000 Tk</label>
                            </div>
                        @else
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="platinum1" aria-label=""
                                            value="30, Free" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="platinum1">Days : 30 , Price: Free</label>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="platinum1" aria-label=""
                                            value="60, 1000" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="platinum1">Days : 60 , Price: 1000</label>
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
        </div>


        <div class="col-md-6">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="text-center mb-2 mt-3">
                        <img class="mw-100 mx-auto mb-2"
                            src="https://sobkisubazar.com/public/uploads/all/8d5kET0tQeVw8NRDQxHjRebEu34lHUQzrLwqqGGV.png"
                            height="80">

                        <!-- <h5 class=" h6 fw-600">PLATINUM</h5> -->

                        <button class="btn btn-primary btn-block"
                            style="background-color:#572c84!important;border-color:#572c84!important">GOLD</button>

                        <h6 class=" h6 fw-600">Long Banner (Middle)</h6>
                        <h6 class=" h6 fw-600">1185px450px</h6>
                    </div>

                    <ul class="list-group list-group-raw fs-18 text-center">
                        <li class="list-group-item py-2">1 Product Upload</li>
                    </ul>

                    <form id="packageForm1" method="post"
                        @if(isset($ads) && $ads != null)
                            action="{{ Route('checkout.customerAdPackageCheckout',$ads) }}"
                        @else
                            action="{{ Route('checkout.customerCheckout') }}"
                        @endif
                        >
                        @csrf
                        <input type="hidden" name="packageName" value="gold">
                        <div class="form-group">
                            @if(Auth::guard("customer")->user()->profile_status != 1)
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="gold1" aria-label=""
                                            value="7, 1050" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="gold1">Days : 7 , Price: 1050 Tk</label>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="gold2" aria-label=""
                                            value="15, 2250" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="gold2">Days : 15 , Price: 2250 Tk</label>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="gold3" aria-label=""
                                            value="30, 4500" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="gold3">Days : 30 , Price: 4500 Tk</label>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="gold4" aria-label=""
                                            value="60, 13500" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="gold4">Days : 60 , Price: 13500 Tk</label>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="gold5" aria-label=""
                                            value="180, 27000" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="gold5">Days : 180 , Price: 27000 Tk</label>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="gold6" aria-label=""
                                            value="365, 54000" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="gold6">Days : 365 , Price: 54000 Tk</label>
                            </div>

                            @else
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="radio" name="packDetails"
                                                id="platinum1" aria-label=""
                                                value="30, Free" required>
                                        </div>
                                    </div>
                                    <label class="form-check-label form-control"
                                        for="platinum1">Days : 30 , Price: Free</label>
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
        </div>


        <div class="col-md-6">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="text-center mb-2 mt-3">
                        <img class="mw-100 mx-auto mb-2"
                            src="https://sobkisubazar.com/public/uploads/all/8d5kET0tQeVw8NRDQxHjRebEu34lHUQzrLwqqGGV.png"
                            height="80">

                        <!-- <h5 class=" h6 fw-600">PLATINUM</h5> -->

                        <button class="btn btn-primary btn-block"
                            style="background-color:#572c84!important;border-color:#572c84!important">SILVER</button>

                        <h6 class=" h6 fw-600">Long Banner (Category)</h6>
                        <h6 class=" h6 fw-600">1170px240px</h6>
                    </div>

                    <ul class="list-group list-group-raw fs-18 text-center">
                        <li class="list-group-item py-2">1 Product Upload</li>
                    </ul>

                    <form id="packageForm1" method="post"
                        @if(isset($ads) && $ads != null)
                            action="{{ Route('checkout.customerAdPackageCheckout',$ads) }}"
                        @else
                            action="{{ Route('checkout.customerCheckout') }}"
                        @endif
                        >
                        @csrf
                        <input type="hidden" name="packageName" value="silver">
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
                                                id="platinum1" aria-label=""
                                                value="30, Free" required>
                                        </div>
                                    </div>
                                    <label class="form-check-label form-control"
                                        for="platinum1">Days : 30 , Price: Free</label>
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
        </div>


        <div class="col-md-6">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="text-center mb-2 mt-3">
                        <img class="mw-100 mx-auto mb-2"
                            src="https://sobkisubazar.com/public/uploads/all/8d5kET0tQeVw8NRDQxHjRebEu34lHUQzrLwqqGGV.png"
                            height="80">

                        <!-- <h5 class=" h6 fw-600">PLATINUM</h5> -->

                        <button class="btn btn-primary btn-block"
                            style="background-color:#572c84!important;border-color:#572c84!important">REGULAR</button>

                        <h6 class=" h6 fw-600">Semi-Short Banner (Category)</h6>
                        <h6 class=" h6 fw-600">570px230px</h6>
                    </div>

                    <ul class="list-group list-group-raw fs-18 text-center">
                        <li class="list-group-item py-2">1 Product Upload</li>
                    </ul>

                    {{ $ads }}
                    <form id="packageForm1" method="post"
                        @if(isset($ads) && $ads != null)
                            action="{{ Route('checkout.customerAdPackageCheckout',$ads) }}"
                        @else
                            action="{{ Route('checkout.customerCheckout') }}"
                        @endif
                        >
                        @csrf
                        <input type="hidden" name="packageName" value="regular">
                        <div class="form-group">
                            @if(Auth::guard("customer")->user()->profile_status != 1)
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="regular1" aria-label=""
                                            value="7, 350" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="regular1">Days : 7 , Price: 350 Tk</label>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="regular2" aria-label=""
                                            value="15, 750" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="regular2">Days : 15 , Price: 750 Tk</label>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="regular3" aria-label=""
                                            value="30, 1500" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="regular3">Days : 30 , Price: 1500 Tk</label>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="regular4" aria-label=""
                                            value="60, 3000" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="regular4">Days : 60 , Price: 3000 Tk</label>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="regular5" aria-label=""
                                            value="180, 9000" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="regular5">Days : 180 , Price: 9000 Tk</label>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="packDetails"
                                            id="regular6" aria-label=""
                                            value="365, 18250" required>
                                    </div>
                                </div>
                                <label class="form-check-label form-control"
                                    for="regular6">Days : 365 , Price: 18250 Tk</label>
                            </div>

                            @else
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="radio" name="packDetails"
                                                id="platinum1" aria-label=""
                                                value="30, Free" required>
                                        </div>
                                    </div>
                                    <label class="form-check-label form-control"
                                        for="platinum1">Days : 30 , Price: Free</label>
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
        </div>


    </div>


</div>