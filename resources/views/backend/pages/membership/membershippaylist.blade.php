@extends('backend.layouts.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
       
                <!-- Form inputs start -->
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Membership Payment list</h4>
                            <div class="data-tables">

                            @if($membership != null)

                                <table id="dataTable" class="text-center">
                                    <thead class="bg-light text-capitalize">
                                        <tr>
                                            <th>SL</th>
                                            <th>Customer Name</th>
                                            <th>Customer Email/Phone</th>
                                            <th>Package Name</th>
                                            <th>Price</th>
                                            <th>Duration</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach($membership as $data)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $data->customer->name }}</td>
                                            <td>{{ $data->customer->mailPhone }}</td>
                                            <td>{{ $data->packageName }}</td>
                                            <td>Tk {{ $data->price }}</td>
                                            <td>{{ $data->duration }} Days</td>
                                            <td>
                                                @if($data->payment != 1)
                                                <a href="{{route('membership.payconfirm', $data->id)}}">Confirm</a>
                                                @else
                                                <a href="#" class="text-secondary">Confirmed</a>
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