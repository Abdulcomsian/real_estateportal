@section('css')
<style>
    .bgcolor {
        background-color: #2f3b4ccf;
    }
</style>
@endsction
<div class="container-fluid">
    <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
            <div class="main-navbar">
                <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                    <a class="navbar-brand w-100 mr-0" href="{{url('dashboard')}}" style="line-height: 25px;">
                        <div class="d-table m-auto logo">
                            <img src="{{asset('images/real-estate.png')}}" alt="logo" />
                        </div>
                    </a>
                    <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                        <i class="material-icons">&#xE5C4;</i>
                    </a>
                </nav>
            </div>
            <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
                <div class="input-group input-group-seamless ml-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
                </div>
            </form>
            <div class="nav-wrapper">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('dashboard')}}">
                            <i><img src="{{asset('images/dash-icon.png')}}"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('customer.index')}}">
                            <i><img src="{{asset('images/png/user.png')}}"></i>
                            <span>Clients</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('brokers.index')}}">
                            <i><img src="{{asset('images/png/user.png')}}"></i>
                            <span>Brokers</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-collapse " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i><img src="{{asset('images/file.png')}}"></i>Deals <span class="fa fa-caret-down" style="float: right;"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link bgcolor" href="{{url('/leads')}}">
                                <i><img src="{{asset('images/file.png')}}"></i>
                                <span>All Deals</span>
                            </a>
                            <a class="nav-link bgcolor" href="{{route('leads.active')}}">
                                <i><img src="{{asset('images/file.png')}}"></i>
                                <span>Active Deals</span>
                            </a>
                            <a class="nav-link bgcolor" href="{{route('leads.pending')}}">
                                <i><img src="{{asset('images/file.png')}}"></i>
                                <span>Offers Pending</span>
                            </a>
                            <a class="nav-link bgcolor" href="{{route('leads.under.contract')}}">
                                <i><img src="{{asset('images/file.png')}}"></i>
                                <span>Zellaray Deals</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/lead/mapview')}}">
                            <i><img src="{{asset('images/appointment.png')}}"></i>
                            <span>Deals Search</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i><img src="{{asset('images/logout-icon.png')}}"></i>
                            <span>Log out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</div