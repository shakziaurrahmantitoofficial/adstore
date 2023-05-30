@extends('backend.layouts.master')

@section('content')
    <div class="main-content-inner">
        <div class="row">

            <!-- Form inputs start -->
            <div class="col-lg-10 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Add New Sale Ads</h4>
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
                        <form action="{{ route('sale-add.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label">Sales Type</label>
                                <select class="custom-select" name="type">
                                    <option selected="selected">Select a sales product Type</option>
                                    <option value="product" {{old('type') == 'product' ? 'selected' : ''}}>Product</option>
                                    <option value="property" {{old('type') == 'property' ? 'selected' : ''}}>Property</option>
                                    <option value="service" {{old('type') == 'service' ? 'selected' : ''}} >Service</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="saleProduct">Sale Product</label>
                                <input type="text" name="name" class="form-control" id="saleProduct"
                                    aria-describedby="sales" value="{{old('name') ?? ''}}" placeholder="Enter Sales Product Name">
                            </div>
                            <div class="form-group">
                                <label for="saleProduct">Sale Product Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="5"
                                    placeholder="Enter Sales Product Description">{{old('description')?? ''}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="salesImage">Image</label>
                                <input type="file" name="image" class="form-control" id="salesImage">
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
