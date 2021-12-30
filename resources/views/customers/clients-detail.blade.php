@extends('layouts.master')
@section('title')
Zellaray Capital
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
                  <h2>Clients Data</h2>
                </div>
                <div class="col-md-6">
                  <a href="{{route('leads.create')}}" class="btn btn-primary btn-add float-right"><img class="plus" src="{{asset ('images/png/add.png')}}" alt="">Add Clients</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th class="th-sm">Name</th>
                    <th class="th-sm">Email</th>
                    <th class="th-sm">Phone Number</th>
                    <th class="th-sm">Target Location</th>
                    <th class="th-sm">Price Range</th>
                    <th class="th-sm">Unit Size</th>
                    <th class="th-sm">Cap Rate</th>
                    <th class="th-sm">Price per door</th>
                    <th class="th-sm">Deal type</th>
                    <th class="th-sm">Image</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$client->name}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->phone_number}}</td>
                    <td>{{$client->target_location}}</td>
                    <td>{{$client->price_range}}</td>
                    <td>{{$client->unit_size}}</td>
                    <td>{{number_format($client->cap_rate, 1, ".", ",")}}</td>
                    <td>{{number_format($client->price_per_door, 1, ".", ",")}}</td>
                    <td>
                      @foreach($client->deal_type as $type)
                      <strong>{{$type}}</strong><br>
                      @endforeach
                    </td>
                    <td>
                      @if($client->file!=null)
                      <img class="img img-circle img-responsive" width="100px" height="100px" src="{{asset('client-images').'/'.$client->file}}" alt="icon">
                      @endif
                    </td>
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