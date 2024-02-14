
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <img src="{{asset(\Illuminate\Support\Facades\Auth::guard('admin')->user()->avatar)}}" alt="user-img" class="img-circle">
                        <span class="hide-menu">{{ \Illuminate\Support\Facades\Auth::guard('admin')->user()->user_name }}  </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>



                <li class="nav-small-cap">--- SUPPORT</li>

                <li>
                    <a href="{{ route('dashboard.home') }}">
                        <i class="icon-speedometer"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard.members')  }}">
                        <i class="icon-people"></i> <span>Members</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard.testimonials')}}">
                        <i class=" icon-list"></i> <span>Testimonials</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard.sampleList')}}">
                        <i class=" icon-list"></i> <span>All Sample</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard.workList')}}">
                        <i class=" icon-list"></i> <span>All Previous Work</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard.offerList')}}">
                        <i class=" icon-list"></i> <span>All Offer</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard.getSupport')}}">
                        <i class=" fas fa-users"></i> <span>Customer Support</span>
                    </a>
                </li>


                <li>
                    <a href="{{route('dashboard.clientList')}}">
                        <i class=" fas fa-file"></i> <span>Client Data</span>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
