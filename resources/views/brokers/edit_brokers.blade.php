@extends('layouts.master')
@section('title')
Zellaray Capital
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

            <div class="clinic-s">
                <div class="row py-4 container-fluid ">
                    <div class="col-md-12">
                        <div class="page-heading">Update Brokers</div>
                    </div>
                </div>
            </div>
            <div class="page-header row py-4 justify-content-center">
                <div class="col-md-9" style=" margin: 70px">

                    <div class="card card-small clinic-card">
                        <div class="card-header border-bottom">
                            Update Brokers
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{route('brokers.update',$broker->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Name</label>
                                        <input type="text" class="form-control" id="broker_name" name="name" placeholder="Name" value="{{$broker->name ?? '' }}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" value="{{$broker->phone_number ?? ''}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$broker->email ?? '' }}" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="mb-2 formlabel">Market Location</label>
                                        <input type="text" class="form-control map-input" id="markete" name="markete" placeholder="Market Location" value="{{$broker->markete ?? ''}}">
                                        @if($errors->has('markete'))
                                        <div class="error">{{ $errors->first('markete') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-add">Update Brokers</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</div>

@endsection