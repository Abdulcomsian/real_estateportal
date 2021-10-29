@extends('layouts.master')
@section('title')
Real Estate
@endsection
@section('content')

<!-- Table section -->
<div class="container-fluid">
  <div class="row">
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">


      <div class="page-header row py-1 justify-content-center">
        <div class="col-md-9" style=" margin: 70px">
          <div class="card card-small clinic-card d-flex">
            <div class="card-header border-bottom">
              <div class="row">
                <div class="col-md-6 ">
                  <h2>Leads Deatils</h2>
                </div>

              </div>
            </div>
            <div class="card-body">
              <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th class="th-sm">Address</th>
                    <th class="th-sm">Market Location</th>
                    <th class="th-sm">Ask Price</th>
                    <th class="th-sm">Gross Revenue</th>
                    <th class="th-sm">Cap Rate</th>
                    <th class="th-sm">Occupancy</th>
                    <th class="th-sm">Asset Class</th>
                    <th class="th-sm">Applicable</th>
                    <th class="th-sm">Renovations</th>
                    <th class="th-sm">Broker</th>
                    <th class="th-sm">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="td-sm">{{$lead->address}}</td>
                    <td class="td-sm">{{$lead->markete_location}}</td>
                    <td class="td-sm">{{$lead->ask_price}}</td>
                    <td class="td-sm">{{$lead->gross_revenue}}</td>
                    <td class="td-sm">{{$lead->cap_rate}}</td>
                    <td class="td-sm">{{$lead->occupancy}}</td>
                    <td class="td-sm">{{$lead->asset_class}}</td>
                    <td class="td-sm">{{$lead->pro_forma}}</td>
                    <td class="td-sm">{{$lead->renovations}}</td>
                    <td class="td-sm">{{$lead->broker_contact}}</td>
                    <td class="td-sm">{{$lead->status}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
@endsection