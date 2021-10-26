
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
                        <h2>Agents Data</h2>
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
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>Admin 1</td>
                        <td>admin@gmail.com</td>
                        <td>03490787878</td>
                    </tr>
                    <tr>
                        <td>Admin 1</td>
                        <td>admin@gmail.com</td>
                        <td>03490787878</td>
                    </tr>
                    <tr>
                        <td>Admin 1</td>
                        <td>admin@gmail.com</td>
                        <td>03490787878</td>
                    </tr>
                    <tr>
                        <td>Admin 1</td>
                        <td>admin@gmail.com</td>
                        <td>03490787878</td>
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