@extends('backend.layouts.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
       
        @section('breadcrumbs')
        <ul class="breadcrumbs pull-left">
            <li><a href="{{ url('/') }}">Dashboard</a></li>
            <li><span>User</span></li>
        </ul>
        @endsection
        <!-- Form inputs start -->
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title d-flex justify-content-between">
                        <span>Message list</span>
                    </h4>



                    <div class="data-tables">

                    @if(isset($message) && $message != null)

                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>SL</th>
                                    <th>Customer Name</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($message as $item)
                                <tr 
                                    @if($item->status == 0)
                                        class="tr_css"
                                    @else
                                        class="tr_csss"
                                    @endif

                                    onclick="messageModal({{$item->id}})"

                                    id="message_{{$item->id}}"
                                >
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{ucfirst($item->customer?->name)}}</td>
                                    <td>{{ucfirst(substr($item->message, 0, 50))}}</td>
                                    <td>View</td>
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

<style type="text/css">
    .tr_css {
        background: #fffaf3 !important;
        color: black;
        font-weight: bold;
    }
    .tr_csss {
        color: #777;
    }
</style>
@endsection