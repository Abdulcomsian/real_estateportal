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
            <div class="page-heading">Leads</div>
          </div>
        </div>
      </div>
      <div class="page-header row py-4 justify-content-center">
        <div class="col-md-9" style=" margin: 70px">

          <div class="card card-small clinic-card">
            <div class="card-header border-bottom">
              Leads
            </div>
            <div class="card-body">
              <form method="post" action="{{route('customer.store')}}">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label class="mb-2 formlabel">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Market Location</label>
                    <input type="text" class="form-control" id="market-location" name="market-location" placeholder="Market Location" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Ask Price</label>
                    <input type="text" class="form-control" id="ask-price" name="ask-price" placeholder="Ask Price" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Price Per Door</label>
                    <input type="text" class="form-control" id="price-per-door" name="price-per-door" placeholder="Price per door" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Gross Revenue</label>
                    <input type="text" class="form-control" id="gross-revenue" name="gross-revenue" placeholder="Gross Revenue" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">NOI</label>
                    <input type="text" class="form-control" id="NOI" name="NOI" placeholder="NOI" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Cap Rate</label>
                    <input type="text" class="form-control" id="cap_rate" name="cap_rate" placeholder="Cap Rate" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Occupancy</label>
                    <input type="text" class="form-control" id="occupancy" name="occupancy" placeholder="Occupancy" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Asset Class</label>
                    <input type="text" class="form-control" id="asset-class" name="asset-class" placeholder="Asset Class" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Pro Forma If Applicable</label>
                    <input type="text" class="form-control" id="applicable" name="applicable" placeholder="Pro Forma If Applicable" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Renovations</label>
                    <input type="text" class="form-control" id="renovations" name="renovations" placeholder="Renovations" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Broker and Contact</label>
                    <input type="text" class="form-control" id="broker" name="broker" placeholder="Broker and Contact" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Status</label>
                    <input type="text" class="form-control" id="status" name="status" placeholder="Status" required>
                  </div>
                  <div class=" col-md-12">
                    <label class="mb-2 formlabel">Other documents:</label>
                  </div>
                  <!-- <div class="col-md-4">
                    <label class="mb-2 formlabel">OM</label>
                    <input type="file" class="pt-2" id="image" name="image" required>
                  </div> -->
                  
                  </div>
              
                <button type="submit" class=" mt-5 btn btn-primary btn-add float-right">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

@endsection