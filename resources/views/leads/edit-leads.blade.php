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
                            Edit Leads
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{route('leads.update',$lead->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label class="mb-2 formlabel">Address</label>
                                        <input type="text" class="form-control" id="autocomplete" name="address" placeholder="Address" required value="{{$lead->address ?? ''}}">
                                        <input type="hidden" name="location_lat" value="">
                                        <input type="hidden" name="location_long" value="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Assign Lead</label>
                                        <select class="form-control" name="client_id" id="client_id">
                                            <option value="">Select Client</option>
                                            @foreach($clients as $client)
                                            <option value="{{$client->id}}" @if($lead->client_id==$client->id){{'selected'}}@endif>{{$client->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Market Location</label>
                                        <input type="text" class="form-control" id="markete_location" name="markete_location" placeholder="Market Location" required value="{{$lead->markete_location ?? ''}}">
                                    </div>
                                    <div class=" form-group col-md-4">
                                        <label class="mb-2 formlabel">Ask Price</label>
                                        <input type="number" class="form-control" id="ask_price" name="ask_price" placeholder="Ask Price" required value="{{$lead->ask_price ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Price Per Door</label>
                                        <input type="number" class="form-control" id="price_per_door" name="price_per_door" placeholder="Price per door" required value="{{$lead->price_per_door ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Gross Revenue</label>
                                        <input type="number" class="form-control" id="gross_revenue" name="gross_revenue" placeholder="Gross Revenue" required value="{{$lead->gross_revenue ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">NOI</label>
                                        <input type="text" class="form-control" id="noi" name="noi" placeholder="NOI" required value="{{$lead->noi ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Cap Rate</label>
                                        <input type="number" class="form-control" id="cap_rate" name="cap_rate" placeholder="Cap Rate" required value="{{$lead->cap_rate ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Occupancy</label>
                                        <input type="text" class="form-control" id="occupancy" name="occupancy" placeholder="Occupancy" required value="{{$lead->occupancy ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Asset Class</label>
                                        <input type="text" class="form-control" id="asset_class" name="asset_class" placeholder="Asset Class" required value="{{$lead->asset_class ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Pro Forma If Applicable</label>
                                        <input type="text" class="form-control" id="pro_forma" name="pro_forma" placeholder="Pro Forma If Applicable" required value="{{$lead->pro_forma ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Renovations</label>
                                        <input type="text" class="form-control" id="renovations" name="renovations" placeholder="Renovations" required value="{{$lead->renovations ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Broker and Contact</label>
                                        <input type="text" class="form-control" id="broker_contact" name="broker_contact" placeholder="Broker and Contact" required value="{{$lead->broker_contact ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Status</label>
                                        <input type="text" class="form-control" id="status" name="status" placeholder="Status" required value="{{$lead->status ?? ''}}">
                                    </div>
                                    <div class=" col-md-12">
                                        <label class="mb-2 formlabel">Other documents:</label>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">OM</label>
                                        <input type="file" class="pt-2" name="om_file">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">Rent Roll</label>
                                        <input type="file" class="pt-2" name="rent_roll_file">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">P and L</label>
                                        <input type="file" class="pt-2" name="p_l_file">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">T12</label>
                                        <input type="file" class="pt-2" name="t12_file">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">T3</label>
                                        <input type="file" class="pt-2" name="t3_file">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">Collections report due to Covid</label>
                                        <input type="file" class="pt-2" name="covid_file">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">CapX Report</label>
                                        <input type="file" class="pt-2" name="capx_file">
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <label class="mb-2 formlabel">OM</label>
                                        <input type="file" class="pt-2" id="image" name="image" required>
                                    </div> -->
                                </div>
                                <button type="submit" class=" mt-5 btn btn-primary btn-add float-right">Update Lead</button>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeHpSgm-hy0_G_NC6PynKEYgASntQIi1Y&libraries=places&callback=initMap" async defer></script>
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