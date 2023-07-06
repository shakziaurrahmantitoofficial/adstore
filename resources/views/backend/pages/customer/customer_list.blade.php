@extends('backend.layouts.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
       
        @section('breadcrumbs')
        <ul class="breadcrumbs pull-left">
            <li><a href="{{ url('/') }}">Dashboard</a></li>
            <li><span>Customer</span></li>
        </ul>
        @endsection
        <!-- Form inputs start -->
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title d-flex justify-content-between">
                        <span>Customer list</span>
                    </h4>

                    <div class="data-tables">

                    @if($customers != null)

                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Membership</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($customers as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>
                                        <img src="{{ isset($item->image) ? asset($item->image) : '/backend/assets/images/dummy-image.jpeg' }}" alt="Image" style="width: 50px;height:40px">
                                    </td>
                                    <td>{{ucfirst(substr($item->name, 0, 20))}}</td>
                                    <td>{{ $item->mailPhone }}</td>
                                    <td>
                                        @if($item->profile_status == 1)
                                            member
                                        @else
                                            non-member
                                        @endif
                                    </td>
                                    <td>

                                        <a href="{{ route('customer.overview',$item->id) }}">View</a>
                                        |
                                        <a href="{{ route('customer.show',$item->id) }}">Edit</a>
                                        @if($item->status == 1)
                                        | <a href="{{ route('customer.delete',$item->id) }}">Deactive</i></a>
                                        @else
                                        | <a href="{{ route('customer.delete',$item->id) }}">Active</i></a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    @else
                        <hr>
                        <p class="h5 text-center">Data not found!</p>
                    @endif

                    </div>
                </div>
            </div>
        </div>
        <!-- Form inputs end -->
               
    </div>
</div>
@endsection