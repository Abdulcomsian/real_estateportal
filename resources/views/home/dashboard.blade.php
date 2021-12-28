@extends('layouts.master')
@section('title')
Zellaray Capital
@endsection
@section('content')




<div class="container-fluid">
  <div class="row">
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
      <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row py-4 justify-content-center">
          <!--Displaying the Total Registered Clinics as well as Total Revenue Generated-->

          <div class="col-md-6">
            <div class="card welcome-card">
              <div class="s">
                <div class="d-flex align-content-center align-middle bd-highlight">
                  <div class="icon1 text-center"><img src="images/specialist-user.png"></div>
                  <div class="flex-grow-1 valtop">
                    <div class="heading">Total Clients</div>
                    <div class="cont-val">{{$totalcustomers}}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card welcome-card">
              <div class="s">
                <div class="d-flex align-content-center align-middle bd-highlight">
                  <div class="icon2 text-center"><img src="images/deadline.png"></div>
                  <div class="flex-grow-1 valtop">
                    <a href="{{url('/leads')}}">
                      <div class="heading2">Total Deals</div>
                    </a>
                    <div class="cont-val">{{ $totalleads}}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card welcome-card">
              <div class="s">
                <div class="d-flex align-content-center align-middle bd-highlight">
                  <div class="icon2 text-center"><img src="images/deadline.png"></div>
                  <div class="flex-grow-1 valtop">
                    <a href="{{route('leads.pending')}}">
                      <div class="heading2">Pending Deals</div>
                    </a>
                    <div class="cont-val">{{$pendingleads}}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card welcome-card">
              <div class="s">
                <div class="d-flex align-content-center align-middle bd-highlight">
                  <div class="icon2 text-center"><img src="images/deadline.png"></div>
                  <div class="flex-grow-1 valtop">
                    <a href="{{route('leads.active')}}">
                      <div class="heading2">Active Deals</div>
                    </a>
                    <div class="cont-val">{{ $activeleads}}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card welcome-card">
              <div class="s">
                <div class="d-flex align-content-center align-middle bd-highlight">
                  <div class="icon2 text-center"><img src="images/deadline.png"></div>
                  <div class="flex-grow-1 valtop">
                    <a href="{{route('leads.under.contract')}}">
                      <div class="heading2">Zellaray Under Contract</div>
                    </a>
                    <div class="cont-val">{{ $zalaryleads}}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">

          </div>
        </div>
        <!--End here-->

      </div>

  </div>
  </main>
</div>
</div>

@endsection