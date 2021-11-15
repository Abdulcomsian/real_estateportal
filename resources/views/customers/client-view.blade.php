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
                  <a href="{{route('customer.create')}}" class="btn btn-primary btn-add float-right"><img class="plus" src="{{asset ('images/png/add.png')}}" alt="">Add Clients</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th class="th-sm">Name
                    </th>
                    <th class="th-sm">Email
                    </th>
                    <th class="th-sm">Phone Number
                    </th>
                    <th class="th-sm">Target Location
                    </th>
                    <th class="th-sm">Price Range
                    </th>
                    <th class="th-sm">Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($clients as $client)
                  <tr>
                    <td>{{$client->name}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->phone_number}}</td>
                    <td>{{$client->target_location}}</td>
                    <td>{{number_format($client->price_range, 2, ".", ",")}}</td>
                    <td>
                      <a data-toggle="tooltip" href="{{route('customer.edit',$client->id)}}" title="Edit">
                        <img class="pr-2" src="{{asset ('images/png/edit.png')}}" alt="icon">
                      </a>
                      <a data-toggle="tooltip" href="{{route('customer.show',$client->id)}}" title="View">
                        <img class="pr-2" src="{{asset ('images/png/view.png')}}" alt="icon">
                      </a>
                      <a data-toggle="tooltip" href="{{route('client.all.leads',$client->id)}}" title="Client All Deals">
                        <span class="fa fa-list"></span>
                      </a>
                      <form id="form_{{$client->id}}" action="{{route('customer.destroy',$client)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="void:javascript" onclick="return false" id="{{$client->id}}" class="deleteclient"><span class="fa fa-trash"></span></a>
                      </form>
                    </td>
                  </tr>
                  @endforeach

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
@section('script')
<script>
  $(document).on('click', '.deleteclient', function() {
    var id = $(this).attr('id');
    swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        if (result.isConfirmed) {
          $('#form_' + id + '').submit();
        }

      }
    });
  });
</script>
@endsection