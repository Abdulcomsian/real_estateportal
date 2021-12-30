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
        <div class="col-md-9" style="margin: 70px">
          <div class="row">
            <div class="col-md-3">
              <a href="{{route('leads.exportexcel')}}" target="_blank" class="btn btn-info btn-add float-left">Export Lead</a>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <form class="form-inline" method="post" action="{{url('leads-filter-broker')}}">
                @csrf
                <div class="form-group mx-sm-4 mb-2">
                  <label for="inputPassword2" class="sr-only">Broker</label>
                  <select class="form-control" name="broker">
                    <option value="">Filter by Broker</option>
                    @foreach($brokers as $broker)
                    <option value="{{$broker->id}}">{{$broker->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group mx-sm-4 mb-2">
                  <label for="inputPassword2" class="sr-only">Status</label>
                  <select class="form-control" name="status">
                    <option value="">Filter by Status</option>
                    <option value="0">Pending</option>
                    <option value="1">Active</option>
                    <option value="2">Under Contract</option>
                    <option value="3">Zellaray Under Contract</option>
                    <option value="4">Sold</option>
                    <option value="5">Undeliverable</option>
                  </select>
                </div>
                <div class="form-group mx-sm-4 mb-2">
                  <label for="inputPassword2" class="sr-only">Price</label>
                  <input type="number" name="ask_price" placeholder="Filter by price" class="form-control" />
                </div>
                <div class="form-group mx-sm-4 mb-2">
                  <label for="inputPassword2" class="sr-only">Market</label>
                  <input type="text" name="markete_location" placeholder="Filter by Market" class="form-control" />
                </div>
                <div class="form-group mx-sm-4 mb-2">
                  <label for="inputPassword2" class="sr-only">Cap Rate</label>
                  <input type="number" name="cap_rate" placeholder="Filter by Cap rate" class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary mb-2">Filter</button>
              </form>
            </div>
          </div>
          <br>
          <div class="card card-small clinic-card d-flex">
            <div class="card-header border-bottom">
              <div class="row">

                <div class="col-md-6 ">
                  <h2>{{$title}}</h2>
                </div>
                <div class="col-md-6">
                  <a href="{{route('leads.create')}}" class="btn btn-primary btn-add float-right"><img class="plus" src="{{asset ('images/png/add.png')}}" alt="">Add Deals</a>

                </div>
              </div>
            </div>
            <div class="card-body">
              <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Deal Name</th>
                    <th class="th-sm">Address
                    </th>
                    <th class="th-sm">Market Location
                    </th>
                    <th class="th-sm">Price
                    </th>
                    <th class="th-sm">Cap Rate
                    </th>
                    <th class="th-sm">Status</th>
                    <th class="th-sm">Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($leads as $lead)
                  <tr>
                    <td>{{$lead->deal_name}}</td>
                    <td>{{$lead->address}}</td>
                    <td>{{$lead->markete_location}}</td>
                    <td>${{number_format($lead->ask_price, 1, ".", ",")}}</td>
                    <td>${{number_format((int)$lead->cap_rate, 1, ".", ",")}}</td>
                    <td style="color:{{lead_status($lead->status)['color']}}">{{lead_status($lead->status)['name']}}</td>
                    <td>
                      <a data-toggle="tooltip" href="{{route('leads.edit',$lead->id)}}" title="Edit">
                        <img class="pr-2" src="{{asset ('images/png/edit.png')}}" alt="icon">
                      </a>
                      <a data-toggle="tooltip" href="{{route('leads.show',$lead->id)}}" title="View">
                        <img class="pr-2" src="{{asset ('images/png/view.png')}}" alt="icon">
                      </a>
                      <form id="form_{{$lead->id}}" action="{{route('leads.destroy',$lead)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="void:javascript" onclick="return false" id="{{$lead->id}}" class="deletelead"><span class="fa fa-trash"></span></a>
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
  $(document).on('click', '.deletelead', function() {
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