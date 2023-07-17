@extends('backend.layouts.master')

@section('content')
    <div class="main-content-inner">
        <div class="row mt-5">

            <!-- Form inputs start -->
            <div class="col-lg-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title d-flex justify-content-between">
                            <span>Customer View</span>
                            <a href="{{ route('customer.list') }}" class="btn btn-sm btn-primary">Back</a>
                        </h4>
                        <div class="form-group">
                            <label for="rentProduct">Name</label>
                            <input type="text" name="name" value="{{ $customers->name }}" class="form-control" placeholder="Enter Brand Name">
                        </div>
                        <div class="form-group">
                            <label for="rentProduct">Email</label>
                            <input type="email" name="email" value="{{ $customers->mailPhone }}" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="rentProduct">NID</label>
                            <input type="email" name="email" value="{{ $customers->nid }}" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="rentProduct">Address</label>
                            <input type="email" name="email" value="{{ $customers->address }}" class="form-control" placeholder="Enter Email">
                        </div>
                        @if (isset($customers->companyName) && $customers->companyName)
                        <div class="form-group">
                            <label for="rentProduct">Company Name</label>
                            <input type="text" name="companyName" value="{{ $customers->companyName }}" class="form-control">
                        </div>
                        @endif
                        @if (isset($customers->businessType) && $customers->businessType)
                        <div class="form-group">
                            <label for="rentProduct">Business Type </label>
                            <input type="text" name="businessType" value="{{ $customers->businessType }}" class="form-control">
                        </div>
                        @endif
                        @if (isset($customers->tradelince) && $customers->tradelince)
                        <div class="form-group">
                            <label for="rentProduct">Tradelince</label>
                            <input type="text" name="tradelince" value="{{ $customers->tradelince }}" class="form-control">
                        </div>
                        @endif
                        <div class="form-group imageChange">
                            <label for="rentsImage d-block">Image: </label>
                            <img class="imagePreview mt-3 border rounded" src="{{ !empty($customers->image)?asset($customers->image):asset('backend/assets/images/no-image.png') }}" alt="Image" style="width:100px;height: 100px;object-fit:contain;">
                        </div>
                        <a href="{{ route('customer.list') }}" class="btn btn-primary mt-4 pr-4 pl-4">Ok</a>
                    </div>
                </div>
            </div>
            <!-- Form inputs end -->

        </div>
    </div>
@endsection
