
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="index.html"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                       
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-money"></i><span>Sales</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('sale-add.create') }}">Add New Sale Ad</a></li>
                            <li><a href="{{ route('sale-add.index') }}">All Sale Ads</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-money"></i><span>Payment</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('paymentlist.customerPaymentList') }}">Payment List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-money"></i><span>Ad Request</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('adlist.customerAdList') }}">Request List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>Buy</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('buy-add.create') }}">Add New Buy Ad</a></li>
                            <li><a href="{{ route('buy-add.index') }}">All Buy Ads</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>Rent</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('rent-add.create') }}">Add New Rent Ad</a></li>
                            <li><a href="{{ route('rent-add.index') }}">All Rent Ads</a></li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Charts</span></a>
                        <ul class="collapse">
                            <li><a href="barchart.html">bar chart</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>UI Features</span></a>
                        <ul class="collapse">
                            <li><a href="accordion.html">Accordion</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>icons</span></a>
                        <ul class="collapse">
                            <li><a href="fontawesome.html">fontawesome icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                            <span>Tables</span></a>
                        <ul class="collapse">
                            <li><a href="table-basic.html">basic table</a></li>
                        </ul>
                    </li>
                    <li><a href="maps.html"><i class="ti-map-alt"></i> <span>maps</span></a></li>
                    <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Pages</span></a>
                        <ul class="collapse">
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-exclamation-triangle"></i>
                            <span>Error</span></a>
                        <ul class="collapse">
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                    </li> --}}
                    
                </ul>
            </nav>
        </div>
    </div>
</div>