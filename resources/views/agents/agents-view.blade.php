@extends('layouts.master')
@section('title')
    Real | Estate
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <div class="clinic-s">
                    <div class="row py-4 container-fluid ">
                        <div class="col-md-12">
                            <div class="page-heading"> Agents</div>
                        </div>
                    </div>
                </div>
                <div class="page-header row py-4 justify-content-center">
                    <div class="col-md-9" style=" margin: 70px">
                        <div class="card card-small clinic-card">
                            <div class="card-header border-bottom">
                                 Agents
                            </div>
                            <div class="card-body">
                            <form method="post" action="{{route('customer.store')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="mb-2 formlabel"> Name</label>
                                        <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder=" Name" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-2 formlabel"> Email</label>
                                        <input type="email" class="form-control" id="customer_email" name="customer_email" placeholder=" Email" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-2 formlabel"> Password</label>
                                        <input type="password" class="form-control" id="Password" name="password" placeholder=" Password" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-2 formlabel"> Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder=" Phone Number" required>
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn btn-primary btn-add">Submit</button>
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
