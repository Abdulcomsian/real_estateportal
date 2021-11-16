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
                  <h2>Brokers Data</h2>
                </div>
                <div class="col-md-6">
                  <a href="{{route('brokers.create')}}" class="btn btn-primary btn-add float-right"><img class="plus" src="{{asset ('images/png/add.png')}}" alt="">Add Brokers</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-striped" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th class="th-sm">Name</th>
                    <th class="th-sm">Email</th>
                    <th class="th-sm">Phone Number</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$broker->name}}</td>
                    <td>{{$broker->email}}</td>
                    <td>{{$broker->phone_number}}</td>
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