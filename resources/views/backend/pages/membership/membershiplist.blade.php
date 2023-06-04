@extends('backend.layouts.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
       
                <!-- Form inputs start -->
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Membership Request list</h4>
                            <div class="data-tables">

                            @if($membership != null)

                                <table id="dataTable" class="text-center">
                                    <thead class="bg-light text-capitalize">
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>mail/Phone</th>
                                            <th>NID</th>
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
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->mailPhone }}</td>
                                            <td>{{ $data->nid }}</td>
                                            <td>
                                                @php
                                                    $ext = explode(".",$data->profile_image)[1];
                                                @endphp
                                                @if($ext == 'pdf')
                                                <a href="{{ asset($data->profile_image) }}" target="_blank">Details 
                                                    @if($data->resubstatus == 1)
                                                        <span class="badge badge-primary badge-pill">R</span>
                                                    @endif
                                                </a>
                                                @else
                                                <a href="{{url('admin/membership-view', $data->id)}}">Details 
                                                    @if($data->resubstatus == 1)
                                                        <span class="badge badge-primary badge-pill">R</span>
                                                    @endif
                                                </a>
                                                @endif
                                                |
                                                @if($data->profile_status != 1)
                                                <a href="{{url('admin/membership-confirm', $data->id)}}">Confirm 
                                                    @if($data->resubstatus == 1)
                                                        <span class="badge badge-primary badge-pill">R</span>
                                                    @endif
                                                </a>
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