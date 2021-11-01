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
                                    @foreach($leads as $lead)
                                    <tr>
                                        <td>{{$lead->address}}</td>
                                        <td>{{$lead->markete_location}}</td>
                                        <td>{{$lead->price_per_door}}</td>
                                        <td>{{$lead->gross_revenue}}</td>
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
