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
              <form method="post" action="{{route('leads.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label class="mb-2 formlabel">Address</label>
                    <input type="text" class="form-control" id="autocomplete" name="address" placeholder="Address" required>
                    <input type="hidden" name="location_lat" value="">
                    <input type="hidden" name="location_long" value="">
                    @if($errors->has('address'))
                    <div class="error">{{ $errors->first('address') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Assign Lead</label>
                    <select class="form-control" name="client_id" id="client_id">
                      <option value="">Select Client</option>
                      @foreach($clients as $client)
                      <option value="{{$client->id}}">{{$client->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Market Location</label>
                    <input type="text" class="form-control map-input" id="markete_location" name="markete_location" placeholder="Market Location" required>
                    @if($errors->has('markete_location'))
                    <div class="error">{{ $errors->first('markete_location') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Ask Price</label>
                    <input type="number" class="form-control" id="ask_price" name="ask_price" placeholder="Ask Price" required>
                    @if($errors->has('ask_price'))
                    <div class="error">{{ $errors->first('ask_price') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Price Per Door</label>
                    <input type="number" class="form-control" id="price_per_door" name="price_per_door" placeholder="Price per door" required>
                    @if($errors->has('price_per_door'))
                    <div class="error">{{ $errors->first('price_per_door') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Gross Revenue</label>
                    <input type="number" class="form-control" id="gross_revenue" name="gross_revenue" placeholder="Gross Revenue" required>
                    @if($errors->has('gross_revenue'))
                    <div class="error">{{ $errors->first('gross_revenue') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">NOI</label>
                    <input type="text" class="form-control" id="noi" name="noi" placeholder="NOI" required>
                    @if($errors->has('noi'))
                    <div class="error">{{ $errors->first('noi') }}</div>
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
                    <label class="mb-2 formlabel">Occupancy</label>
                    <input type="text" class="form-control" id="occupancy" name="occupancy" placeholder="Occupancy" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Asset Class</label>
                    <input type="text" class="form-control" id="asset_class" name="asset_class" placeholder="Asset Class" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Pro Forma If Applicable</label>
                    <input type="text" class="form-control" id="pro_forma" name="pro_forma" placeholder="Pro Forma If Applicable" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Renovations</label>
                    <input type="text" class="form-control" id="renovations" name="renovations" placeholder="Renovations" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Broker and Contact</label>
                    <input type="text" class="form-control" id="broker_contact" name="broker_contact" placeholder="Broker and Contact" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Status</label>
                    <select class="form-control" id="status" name="status">
                      <option value="0">Pending</option>
                      <option value="1">Approved</option>
                    </select>
                  </div>
                  <div class=" col-md-12">
                    <label class="mb-2 formlabel">Other documents:</label>
                  </div>

                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">OM</label>
                    <input type="file" class="pt-2" id="om_file" name="om_file" accept=".pdf,.doc,.docx,application/msword">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">Rent Roll</label>
                    <input type="file" class="pt-2" id="image" name="rent_roll_file" accept=".pdf,.doc,.docx,application/msword">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">P and L</label>
                    <input type="file" class="pt-2" id="image" name="p_l_file" accept=".pdf,.doc,.docx,application/msword">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">T12</label>
                    <input type="file" class="pt-2" id="image" name="t12_file" accept=".pdf,.doc,.docx,application/msword">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">T3</label>
                    <input type="file" class="pt-2" id="image" name="t3_file" accept=".pdf,.doc,.docx,application/msword">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">Collections report due to Covid</label>
                    <input type="file" class="pt-2" id="image" name="covid_file" accept=".pdf,.doc,.docx,application/msword">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">CapX Report</label>
                    <input type="file" class="pt-2" id="image" name="capx_file" accept=".pdf,.doc,.docx,application/msword">
                  </div>
                  <!-- <div class="col-md-4">
                    <label class="mb-2 formlabel">OM</label>
                    <input type="file" class="pt-2" id="image" name="image" required>
                  </div> -->
                </div>
                <button type="submit" class=" mt-5 btn btn-primary btn-add float-right">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

@endsection
@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGZsEuXCZJyg8-h8jmSFpLUiXd9BIJsew&libraries=places&callback=initMap" async defer></script>
<script>
  function initMap() {

    let autocomplete_location;
    let input_field = document.getElementById('autocomplete');
    // geographical location types.
    autocomplete_location = new google.maps.places.Autocomplete(input_field, {
      types: ['geocode']
    });
    // Set initial restrict to the greater list of countries.
    // autocomplete_location.setComponentRestrictions({'country': ['de']});
    autocomplete_location.setFields(['geometry']);

    let latitude;
    let longitude;
    let country;

    google.maps.event.addListener(autocomplete_location, 'place_changed', function() {
      let location = autocomplete_location.getPlace();
      latitude = location.geometry.location.lat();
      longitude = location.geometry.location.lng();
      $('input[name="location_lat"]').val(latitude);
      $('input[name="location_long"]').val(longitude);


      codeLatLng(latitude, longitude);

      function codeLatLng(lat, lng) {

        var latlng = new google.maps.LatLng(lat, lng);
        let geocoder = new google.maps.Geocoder;
        geocoder.geocode({
          'latLng': latlng
        }, function(results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            let length = results.length - 1;
            country = results[length].formatted_address;
            console.log(results);

            if (results[1]) {
              //formatted address
              //find country name
              for (var i = 0; i < results[0].address_components.length; i++) {
                for (var b = 0; b < results[0].address_components[i].types.length; b++) {
                  //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                  if (results[0].address_components[i].types[b] === "administrative_area_level_1") {
                    state = results[0].address_components[i];
                    break;
                  }

                  if (results[0].address_components[i].types[b] === "locality") {
                    //this is the object you are looking for
                    city = results[0].address_components[i];
                    break;
                  }
                }
              }
              //city data
              $('input[name="location_city"]').val(city.long_name);
              $('input[name="location_country"]').val(country);
              $('input[name="location_state"]').val(state.long_name);

            } else {
              console.log("No results found");
            }
          } else {
            console.log("Geocoder failed due to: " + status);
          }
        })
      }

    });
  }
</script>
@endsection
