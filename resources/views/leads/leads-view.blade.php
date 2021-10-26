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
                    <h2>Leads Data</h2>
                  </div>
                  <div class="col-md-6">
                    <a href="{{route('leads.create')}}" class="btn btn-primary btn-add float-right"><img class="plus" src="{{asset ('images/png/add.png')}}" alt="">Add Leads</a>
                  </div>
                </div>
            </div>
            <div class="card-body">
                <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th class="th-sm">Address
                      </th>
                      <th class="th-sm">Market Location
                      </th>
                      <th class="th-sm">Price pre Door
                      </th>
                      <th class="th-sm">Gross Revenue
                      </th>
                      <th class="th-sm">Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>2011/04/25</td>
                      <td>
                          <a data-toggle="tooltip" href="" title="Edit">
                            <img class="pr-2" src="{{asset ('images/png/edit.png')}}" alt="icon">
                          </a>
                          <a data-toggle="tooltip" href="" title="View">
                            <img class="pr-2" src="{{asset ('images/png/view.png')}}" alt="icon">
                          </a>
                          <a data-toggle="tooltip" href="" title="Delete">
                            <img src="{{asset ('images/png/bin.png')}}" alt="icon">
                          </a>
                      </td>                   
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>           
                      <td>Tokyo</td>
                      <td>2011/07/25</td>
                      <td>
                          <a data-toggle="tooltip" href="" title="Edit">
                            <img class="pr-2" src="{{asset ('images/png/edit.png')}}" alt="icon">
                          </a>
                          <a data-toggle="tooltip" href="" title="View">
                            <img class="pr-2" src="{{asset ('images/png/view.png')}}" alt="icon">
                          </a>
                          <a data-toggle="tooltip" href="" title="Delete">
                            <img src="{{asset ('images/png/bin.png')}}" alt="icon">
                          </a>
                      </td>                    
                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>2009/01/12</td>
                      <td>
                          <a data-toggle="tooltip" href="" title="Edit">
                            <img class="pr-2" src="{{asset ('images/png/edit.png')}}" alt="icon">
                          </a>
                          <a data-toggle="tooltip" href="" title="View">
                            <img class="pr-2" src="{{asset ('images/png/view.png')}}" alt="icon">
                          </a>
                          <a data-toggle="tooltip" href="" title="Delete">
                            <img src="{{asset ('images/png/bin.png')}}" alt="icon">
                          </a>
                      </td>
                    </tr>
                    <tr>
                      <td>Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>2012/03/29</td>

                      <td>
                          <a data-toggle="tooltip" href="" title="Edit">
                            <img class="pr-2" src="{{asset ('images/png/edit.png')}}" alt="icon">
                          </a>
                          <a data-toggle="tooltip" href="" title="View">
                            <img class="pr-2" src="{{asset ('images/png/view.png')}}" alt="icon">
                          </a>
                          <a data-toggle="tooltip" href="" title="Delete">
                            <img src="{{asset ('images/png/bin.png')}}" alt="icon">
                          </a>
                      </td>
                    </tr>
                    </tbody>

                    <!-- <div class="cart"> 
                      <a data-toggle="tooltip" title="<img src='http://getbootstrap.com/apple-touch-icon.png' />">
                          <i class="icon-shopping-cart"></i>
                      </a>
                  </div> -->

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