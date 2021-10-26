
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
                    <h2>Clients Data</h2>
                  </div>
                  <div class="col-md-6">
                    <a href="{{route('leads.create')}}" class="btn btn-primary btn-add float-right"><img class="plus" src="{{asset ('images/png/add.png')}}" alt="">Add Clients</a>
                  </div>
                </div>
            </div>
            <div class="card-body">
                <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
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
                        <td>Admin 1</td>
                        <td>admin@gmail.com</td>
                        <td>03490787878</td>
                        <td>New York</td>
                        <td>$500,00</td>
                        <td>unit size</td>
                        <td>Cap Rate</td>
                        <td>$550,000</td>
                        <td>rent</td>
                        <td>
                          <img src="{{asset ('images/png/bin.png')}}" alt="icon">
                        </td>
                    </tr>
                    <tr>
                        <td>Admin 1</td>
                        <td>admin@gmail.com</td>
                        <td>03490787878</td>
                        <td>New York</td>
                        <td>$500,00</td>
                        <td>unit size</td>
                        <td>Cap Rate</td>
                        <td>$550,000</td>
                        <td>rent</td>
                        <td>
                          <img src="{{asset ('images/png/bin.png')}}" alt="icon">
                        </td>
                    </tr>
                    <tr>
                        <td>Admin 1</td>
                        <td>admin@gmail.com</td>
                        <td>03490787878</td>
                        <td>New York</td>
                        <td>$500,00</td>
                        <td>unit size</td>
                        <td>Cap Rate</td>
                        <td>$550,000</td>
                        <td>rent</td>
                        <td>
                          <img src="{{asset ('images/png/bin.png')}}" alt="icon">
                        </td>
                    </tr>
                    <tr>
                        <td>Admin 1</td>
                        <td>admin@gmail.com</td>
                        <td>03490787878</td>
                        <td>New York</td>
                        <td>$500,00</td>
                        <td>unit size</td>
                        <td>Cap Rate</td>
                        <td>$550,000</td>
                        <td>rent</td>
                        <td>
                          <img src="{{asset ('images/png/bin.png')}}" alt="icon">
                        </td>
                    </tr>
                  
                    </tbody>
                    <!-- <tfoot>
                      <tr>
                        <th>Name
                            </th>
                            <th>Position
                            </th>
                            <th>Office
                            </th>
                            <th>Age
                            </th>
                            <th>Start date
                            </th>
                            <th>Salary
                            </th>
                      </tr>
                    </tfoot> -->
                  </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
@endsection