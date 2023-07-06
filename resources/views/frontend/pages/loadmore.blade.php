@foreach ($regular as $key => $regularData)

    <div class="col-lg-6 col-sm-6 col-xs-6">
        <div class="mt-4">

            <a href="{{ $regularData->link }}" class="border border-secondary d-block py-2 px-2">

                <div class="row as-ad-card">
                    <div class="col-5">
                        <img src="{{ asset($regularData->image) }}" alt="{{ $regularData->name }}" class="saleimg" style="height: 160px;">
                    </div>
                    <div class="col-7">
                        <div class="content" style="display: block;">

                            <h2 class="fw-bold" style="font-size:18px;color:#000">{{ $regularData->title }}</h2>

                            <p class="text-secondary">{{ $regularData->description }}</p>
                            <!-- <div class="price" style="font-size: 20px;color:tomato">৳ ৩৫,০০০</div> -->
                        </div>
                    </div>
                </div>

            </a>
        </div>
    </div>
@endforeach