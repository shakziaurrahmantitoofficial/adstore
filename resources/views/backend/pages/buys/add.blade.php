@extends('backend.layouts.master')

@section('content')
    <div class="main-content-inner">
        <div class="row">

            <!-- Form inputs start -->
            <div class="col-lg-10 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Add New Buy Ads</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('buy-add.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label">Buys Type</label>
                                <select class="custom-select" name="type">
                                    <option selected="selected">Select a buys product Type</option>
                                    <option value="product" {{old('type') == 'product' ? 'selected' : ''}}>Product</option>
                                    <option value="property" {{old('type') == 'property' ? 'selected' : ''}}>Property</option>
                                    <option value="service" {{old('type') == 'service' ? 'selected' : ''}} >Service</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="buyProduct">Buy Product</label>
                                <input type="text" name="name" class="form-control" id="buyProduct"
                                    aria-describedby="buys" value="{{old('name') ?? ''}}" placeholder="Enter Buys Product Name">
                            </div>
                            <div class="form-group">
                                <label for="buyProduct">Buy Product Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="5"
                                    placeholder="Enter Buys Product Description">{{old('description')?? ''}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="buysImage">Image</label>
                                <input type="file" name="image" class="form-control" id="buysImage">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Form inputs end -->

        </div>
    </div>
@endsection
