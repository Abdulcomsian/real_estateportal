@extends('layouts.master')
@section('title')
Zellaray Capital
@endsection
@section('css')
<style>
  .error {
    height: auto;
    color: red;
  }
</style>
@endsection
@section('content')

<div class="container-fluid">
  <div class="row">
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

      <div class="clinic-s">
        <div class="row py-4 container-fluid ">
          <div class="col-md-12">
            <div class="page-heading">Brokers</div>
          </div>
        </div>
      </div>
      <div class="page-header row py-4 justify-content-center">
        <div class="col-md-9" style=" margin: 70px">

          <div class="card card-small clinic-card">
            <div class="card-header border-bottom">
              Brokers
            </div>
            <div class="card-body">
              <form method="post" action="{{route('brokers.store')}}">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Name</label>
                    <input type="text" class="form-control" id="broker_name" name="name" placeholder="Name" required>
                    @if($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Phone Number</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" required>
                    @if($errors->has('phone_number'))
                    <div class="error">{{ $errors->first('phone_number') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    @if($errors->has('email'))
                    <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                  </div>
                </div>
                <div class="form-row">
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