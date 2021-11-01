@extends('layouts.master')
@section('title')
Real Estate
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

            <div class="clinic-s">
                <div class="row py-4 container-fluid ">
                    <div class="col-md-12">
                        <div class="page-heading">Update Clints</div>
                    </div>
                </div>
            </div>
            <div class="page-header row py-4 justify-content-center">
                <div class="col-md-9" style=" margin: 70px">

                    <div class="card card-small clinic-card">
                        <div class="card-header border-bottom">
                            Update Clients
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{route('customer.update',$client->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Name</label>
                                        <input type="text" class="form-control" id="customer_name" name="name" placeholder="Name" value="{{$client->name}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" value="{{$client->phone_number}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$client->email}}" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-2 formlabel">Target Location</label>
                                        <input type="text" class="form-control" id="target_location" name="target_location" placeholder="Target location" value="{{$client->target_location}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Price Range</label>
                                        <input type="number" class="form-control" id="price_range" name="price_range" placeholder="Price Range" value="{{$client->price_range}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Unit Size</label>
                                        <input type="number" class="form-control" id="unit_size" name="unit_size" placeholder="Unit Size" value="{{$client->unit_size}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Cap Rate</label>
                                        <input type="number" class="form-control" id="cap_rate" name="cap_rate" placeholder="Cap Rate" value="{{$client->cap_rate}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Price per door</label>
                                        <input type="number" class="form-control" id="price_per_door" name="price_per_door" placeholder="Price per door" value="{{$client->price_per_door}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Deal type</label>
                                        <input type="text" class="form-control" id="deal_type" name="deal_type" placeholder="Deal type" value="{{$client->deal_type}}" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="mb-2 formlabel">Image</label>
                                        <input type="file" class="pt-2" id="image" name="image" accept="image/*">
                                    </div>

                                </div>

                                <div class="form-row">



                                </div>

                                <button type="submit" class="btn btn-primary btn-add">Update Client</button>
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