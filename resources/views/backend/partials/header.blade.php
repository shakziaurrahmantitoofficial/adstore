<div class="header-area">
    <div class="row align-items-center">
        <!-- nav and search button -->
        <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="search-box pull-left">
                <form action="#">
                    <input type="text" name="search" placeholder="Search..." required>
                    <i class="ti-search"></i>
                </form>
            </div>
        </div>
        <!-- profile info & task notification -->
        <div class="col-md-6 col-sm-4 clearfix">
            <ul class="notification-area pull-right">
                <li class="dropdown">
                    <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown">
                        <span id="messCount">{{App\Models\message::where("customer_id", Auth::guard("customer")->id())->where("status", 0)->count()}}</span>
                    </i>
                </li>
            </ul>
        </div>
    </div>
</div>