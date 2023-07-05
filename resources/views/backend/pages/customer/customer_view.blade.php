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
                        <span>Customer view</span>
                    </h4>

                    <table class="table table-bordered">
                        <tr>
                            <td>Name</td>
                            <td>Md. Ziaur Rahman</td>
                            <td>Email</td>
                            <td>shakziaurrahmantito@gmail.com</td>
                        </tr>
                    </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- Form inputs end -->
               
    </div>
</div>
@endsection