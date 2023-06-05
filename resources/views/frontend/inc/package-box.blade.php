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