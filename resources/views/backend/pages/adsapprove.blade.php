@extends('backend.layouts.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
       
                <!-- Form inputs start -->
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Ad Details</h4>

                            <form action="{{Route('adaccept.customeradaccept')}}" method="post" class="form-inline my-2 float-right">
                                @csrf
                                <input type="hidden" name="adid" value="{{$ads->id}}">
                                <input type="hidden" name="duration" value="{{$ads->duration}}">
                                <div class="form-group">


                                    <select class="form-control" name="accept" style="height: auto;" required>
                                        @if($ads->status == 0)
                                            <option value="" selected>Select</option>
                                            <option value="1">Approve</option>
                                            <option value="2">Reject</option>

                                        @elseif($ads->status == 1)
                                            <option value="">Select</option>
                                            <option value="1" selected>Approve</option>
                                            <option value="2">Reject</option>
                                        @elseif($ads->status == 2)
                                            <option value="">Select</option>
                                            <option value="1">Approve</option>
                                            <option value="2" selected>Reject</option>
                                        @else
                                            <option value="" selected>Select</option>
                                            <option value="1">Approve</option>
                                            <option value="2">Reject</option>
                                        @endif

                                    </select>
                                </div>
                                <div class="form-group mx-2">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                            <div class="data-tables">
                               <table class="table table-bordered">
                                   <tr>
                                       <td>Title</td>
                                       <td>{{$ads->title}}</td>
                                   </tr>
                                   <tr>
                                       <td>Link</td>
                                       <td>{{$ads->link}}</td>
                                   </tr>
                                   <tr>
                                       <td>Ad Type</td>
                                       <td>{{ucfirst($ads->adType)}}</td>
                                   </tr>

                                   <tr>
                                       <td>Ad Service</td>
                                       <td>{{ucfirst($ads->adservicetype)}}</td>
                                   </tr>

                                   <tr>
                                       <td>Description</td>
                                       <td width="80%">{{$ads->description}}</td>
                                   </tr>



                                   <tr>
                                       <td>Owner Name</td>
                                       <td>{{$ads->customer->name}}</td>
                                   </tr> 

                                   <tr>
                                       <td>Owner Contact</td>
                                       <td>{{$ads->customer->mailPhone}}</td>
                                   </tr> 

                                   <tr>
                                       <td>Owner NID</td>
                                       <td>{{isset($ads->customer->nid) ? $ads->customer->nid : "N/A"}}</td> 
                                   </tr> 

                                   <tr>
                                       <td>Company Name</td>
                                       <td>{{isset($ads->customer->companyName) ? $ads->customer->companyName : "N/A"}}</td>
                                   </tr>

                                   <tr>
                                       <td>Customer Type</td>
                                       <td>{{ucwords($ads->customer->customerType)}}</td>
                                   </tr> 

                                   <tr>
                                       <td>Company Address</td>
                                       <td>{{$ads->customer->address}}</td>
                                   </tr> 



                                   <tr>
                                       <td>Package Name</td>
                                       <td>{{ucwords($ads->package->packageName)}}</td>
                                   </tr> 

                                   <tr>
                                       <td>Price</td>
                                       <td>TK. {{$ads->package->price}}</td>
                                   </tr>

                                   <tr>
                                       <td>Payment</td>
                                       <td>{{$ads->package->payment == 0 ? "Unpaid" : "Paid"}}</td>
                                   </tr> 

                                   <tr>
                                       <td>Duration</td>
                                       <td>{{$ads->package->duration}} Days</td>
                                   </tr> 

                                   <tr>
                                       <td colspan="2">
                                           <img src="{{asset($ads->image)}}" class="img-fluid" style="width: 100%">
                                       </td>
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