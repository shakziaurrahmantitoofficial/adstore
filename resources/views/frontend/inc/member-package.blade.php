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
                style="background-color:#572c84!important;border-color:#572c84!important">MEMBERSHIP</button>

            <h6 class=" h6 fw-600">All Position</h6>
            <h6 class=" h6 fw-600">Any Size</h6>
        </div>

        <ul class="list-group list-group-raw fs-18 text-center">
            <li class="list-group-item py-2" style="font-size: 15px;color:#444;">1 Free Ad for 1 Month inPlatinum Section.</li>
        </ul>

        <form id="packageForm1" method="post"
            action="{{ Route('checkoutMembership.customerCheckout') }}"
            >

            @csrf

                <input type="hidden" name="packageName" value="membership">
                <input type="hidden" name="mvalid" value="member">

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="packDetails"
                                id="member6" aria-label=""
                                value="365, 2000" required>
                        </div>
                    </div>
                    <label class="form-check-label form-control"
                        for="member6">Days : 365 , Price: 2000 TK</label>
                </div>
            </div>

            <ul class="list-group list-group-raw mb-3 pkg_spcl">
                <li class="list-group-item py-1">1 Month Free Ad</li>
                <li class="list-group-item py-1">1 Free Facebook Boost Per Month</li>
                <li class="list-group-item py-1">Free SMM</li>
                <li class="list-group-item py-1">Digital Marketing Facility</li>
                <li class="list-group-item py-1">Per Month 2 Ad Chage Facility</li>
                <li class="list-group-item py-1">20% Discount on 60 days, 90 days, 180 days & 365 days ad package.</li>
            </ul>

            <div class="form-group">
                <button class="btn btn-primary btn-block">Purchase
                    Package</button>
            </div>
        </form>

    </div>
</div>
<style>
    .pkg_spcl li {
        font-size: 14px;
        color:#777;
        position: relative;
    }
    .pkg_spcl li::before{
        position: absolute;
        content: '';
        width: 5px;
        height: 5px;
        left: 6px;
        top: 12px;
        background-color: #000;
    }
</style>