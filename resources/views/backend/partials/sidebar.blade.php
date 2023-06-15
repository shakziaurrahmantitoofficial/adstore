
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
                        <a href="{{ route('admin.dashboard') }}" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                       
                    </li>

                    {{-- <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-money"></i><span>Sales</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('sale-add.create') }}">Add New Sale Ad</a></li>
                            <li><a href="{{ route('sale-add.index') }}">All Sale Ads</a></li>
                        </ul>
                    </li> --}}

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-money"></i><span>Payment</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('paymentlist.customerPaymentList') }}">Payment List</a></li>
                            <li><a href="{{ route('renewlist.customerRenewList') }}">Renew List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-money"></i><span>Membership</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('membership.List') }}">Request List</a></li>
                            <li><a href="{{ route('membership.paylist') }}">Payment List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-money"></i><span>Ad Request</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('adlist.customerAdList') }}">Request List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('customer.list') }}" aria-expanded="true"><i class="ti-settings"></i><span>Customer</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>User</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('user.list') }}">User List</a></li>
                            <li><a href="{{ route('user.create') }}">Add User</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>Message</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('messagelist.customermessagelist') }}">Message List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('admin.profile.setting') }}" aria-expanded="true"><i class="ti-user"></i><span>Profile</span></a>
                    </li>
                    <li>
                        <a href="{{ route('settings.page') }}" aria-expanded="true"><i class="ti-settings"></i><span>Settings</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>