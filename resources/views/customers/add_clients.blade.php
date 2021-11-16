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
            <div class="page-heading"> Clints</div>
          </div>
        </div>
      </div>
      <div class="page-header row py-4 justify-content-center">
        <div class="col-md-9" style=" margin: 70px">

          <div class="card card-small clinic-card">
            <div class="card-header border-bottom">
              Clients
            </div>
            <div class="card-body">
              <form method="post" action="{{route('customer.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Name</label>
                    <input type="text" class="form-control" id="customer_name" name="name" placeholder="Name" required>
                    @if($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Company Name</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" required>
                    @if($errors->has('company_name'))
                    <div class="error">{{ $errors->first('company_name') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Phone Number</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" required>
                    @if($errors->has('phone_number'))
                    <div class="error">{{ $errors->first('phone_number') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label class="mb-2 formlabel">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    @if($errors->has('email'))
                    <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label class="mb-2 formlabel">Target Location</label>
                    <input type="text" class="form-control" id="target_location" name="target_location" placeholder="Target location" required>
                    @if($errors->has('target_location'))
                    <div class="error">{{ $errors->first('target_location') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Price Range</label>
                    <input type="number" class="form-control" id="price_range" name="price_range" placeholder="Price Range" required>
                    @if($errors->has('price_range'))
                    <div class="error">{{ $errors->first('price_range') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Unit Size</label>
                    <input type="number" class="form-control" id="unit_size" name="unit_size" placeholder="Unit Size" required>
                    @if($errors->has('unit_size'))
                    <div class="error">{{ $errors->first('unit_size') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Cap Rate</label>
                    <input type="number" class="form-control" id="cap_rate" name="cap_rate" placeholder="Cap Rate" required>
                    @if($errors->has('cap_rate'))
                    <div class="error">{{ $errors->first('cap_rate') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Price per door</label>
                    <input type="number" class="form-control" id="price_per_door" name="price_per_door" placeholder="Price per door" S>
                    @if($errors->has('price_per_door'))
                    <div class="error">{{ $errors->first('price_per_door') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Deal type</label>
                    <select class="form-control" id="deal_type" name="deal_type" required>
                      <option value="">Select Deal Type</option>
                      <option value="core">Core</option>
                      <option value="stabiized">Stabilized</option>
                      <option value="value-add">Value-Add</option>
                      <option value="heavy-left">Heavy Lift</option>
                      <option value="development">Development</option>
                      <option value="mixed-use">Mixed Use</option>
                      <option value="retail">Retail</option>
                      <option value="land">Land</option>
                    </select>
                    @if($errors->has('deal_type'))
                    <div class="error">{{ $errors->first('deal_type') }}</div>
                    @endif
                  </div>
                  <div class="col-md-4">
                    <label class="mb-2 formlabel">Image</label>
                    <input type="file" class="pt-2" id="image" name="image" required accept="image/*">
                    @if($errors->has('image'))
                    <div class="error">{{ $errors->first('image') }}</div>
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