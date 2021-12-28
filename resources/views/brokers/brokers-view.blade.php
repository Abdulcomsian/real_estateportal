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
              <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th class="th-sm">Name
                    </th>
                    <th class="th-sm">Email
                    </th>
                    <th class="th-sm">Phone Number
                    </th>
                    <th class="th-sm">Market</th>
                    <th class="th-sm">Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($brokers as $broker)
                  <tr>
                    <td>{{$broker->name}}</td>
                    <td>{{$broker->email}}</td>
                    <td>{{$broker->phone_number}}</td>
                    <td>{{$broker->markete}}</td>
                    <td>
                      <a data-toggle="tooltip" href="{{route('brokers.edit',$broker->id)}}" title="Edit">
                        <img class="pr-2" src="{{asset ('images/png/edit.png')}}" alt="icon">
                      </a>
                      <a data-toggle="tooltip" href="{{route('brokers.show',$broker->id)}}" title="View">
                        <img class="pr-2" src="{{asset ('images/png/view.png')}}" alt="icon">
                      </a>
                      <a data-toggle="tooltip" href="{{route('broker.all.leads',$broker->id)}}" title="Broker All Deals">
                        <span class="fa fa-list"></span>
                      </a>
                      <form id="form_{{$broker->id}}" action="{{route('brokers.destroy',$broker)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="void:javascript" onclick="return false" id="{{$broker->id}}" class="deletebroker"><span class="fa fa-trash"></span></a>
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
  $(document).on('click', '.deletebroker', function() {
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