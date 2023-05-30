@extends('backend.layouts.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
       
                <!-- Form inputs start -->
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Ad Request list</h4>
                            <div class="data-tables">

                            @if($ads != null)

                                <table id="dataTable" class="text-center">
                                    <thead class="bg-light text-capitalize">
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>Company</th>
                                            <th>Package</th>
                                            <th>Start</th>
                                            <th>Expire</th>
                                            <th>Action</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach($ads as $data)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{ucfirst(substr($data->title, 0, 20))}}</td>
                                            <td>{{ucfirst($data->customer->customerType)}}</td>
                                            <td>{{ucfirst($data->package->packageName)}}</td>
                                            <td>
                                                @if(isset($data->adstartTime))
                                                    {{date("d.m.Y",$data->adstartTime)}}
                                                @else
                                                    Not Set
                                                @endif
                                            </td>
                                            <td>
                                               @if(isset($data->adstartTime))
                                                    {{date("d.m.Y", $data->adstartTime + $data->duration)}}
                                                @else
                                                    Not set
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{url('admin/adapprove', $data->id)}}">Details</a>
                                            </td>
                                            <td>N/A</td>
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