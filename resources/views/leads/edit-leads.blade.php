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
                        <div class="page-heading">Deals</div>
                    </div>
                </div>
            </div>
            <div class="page-header row py-4 justify-content-center">
                <div class="col-md-9" style=" margin: 70px">

                    <div class="card card-small clinic-card">
                        <div class="card-header border-bottom">
                            Edit Deals
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{route('leads.update',$lead->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label class="mb-2 formlabel">Address</label>
                                        <input type="text" class="form-control" id="autocomplete" name="address" placeholder="Address" required value="{{$lead->address ?? ''}}">
                                        <input type="hidden" name="location_lat" value="{{$lead->location_lat ?? ''}}">
                                        <input type="hidden" name="location_long" value="{{$lead->location_long ?? ''}}">
                                        @if($errors->has('address'))
                                        <div class="error">{{ $errors->first('address') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Assign Lead</label>
                                        <select class="form-control" name="broker_id" id="broker_id">
                                            <option value="">Select Broker</option>
                                            @foreach($brokers as $broker)
                                            <option value="{{$broker->id}}" @if($lead->broker_id==$broker->id){{'selected'}}@endif>{{$broker->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Market Location</label>
                                        <input type="text" class="form-control" id="markete_location" name="markete_location" placeholder="Market Location" required value="{{$lead->markete_location ?? ''}}">
                                        @if($errors->has('markete_location'))
                                        <div class="error">{{ $errors->first('markete_location') }}</div>
                                        @endif
                                    </div>
                                    <div class=" form-group col-md-4">
                                        <label class="mb-2 formlabel">Ask Price</label>
                                        <input type="number" class="form-control" id="ask_price" name="ask_price" placeholder="Ask Price" required value="{{$lead->ask_price ?? ''}}">
                                        @if($errors->has('ask_price'))
                                        <div class="error">{{ $errors->first('ask_price') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Price Per Door</label>
                                        <input type="number" class="form-control" id="price_per_door" name="price_per_door" placeholder="Price per door" required value="{{$lead->price_per_door ?? ''}}">
                                        @if($errors->has('price_per_door'))
                                        <div class="error">{{ $errors->first('price_per_door') }}</div>
                                        @endif
                                    </div>
                                    <!-- <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Gross Revenue</label>
                                        <input type="number" class="form-control" id="gross_revenue" name="gross_revenue" placeholder="Gross Revenue" required value="{{$lead->gross_revenue ?? ''}}">
                                        @if($errors->has('gross_revenue'))
                                        <div class="error">{{ $errors->first('gross_revenue') }}</div>
                                        @endif
                                    </div> -->
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">NOI</label>
                                        <input type="text" class="form-control" id="noi" name="noi" placeholder="NOI" value="{{$lead->noi ?? ''}}">
                                        @if($errors->has('noi'))
                                        <div class="error">{{ $errors->first('noi') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Cap Rate</label>
                                        <input type="number" class="form-control" id="cap_rate" name="cap_rate" placeholder="Cap Rate" value="{{$lead->cap_rate ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Occupancy</label>
                                        <input type="text" class="form-control" id="occupancy" name="occupancy" placeholder="Occupancy" value="{{$lead->occupancy ?? ''}}">
                                        @if($errors->has('cap_rate'))
                                        <div class="error">{{ $errors->first('cap_rate') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Asset Class</label>
                                        <input type="text" class="form-control" id="asset_class" name="asset_class" placeholder="Asset Class" value="{{$lead->asset_class ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Pro Forma If Applicable</label>
                                        <input type="text" class="form-control" id="pro_forma" name="pro_forma" placeholder="Pro Forma If Applicable" value="{{$lead->pro_forma ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Renovations</label>
                                        <input type="text" class="form-control" id="renovations" name="renovations" placeholder="Renovations" value="{{$lead->renovations ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Broker and Contact</label>
                                        <input type="text" class="form-control" id="broker_contact" name="broker_contact" placeholder="Broker and Contact" value="{{$lead->broker_contact ?? ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Off Market</label>
                                        <input type="text" class="form-control" id="Off_market" name="Off_market" value="{{$lead->Off_market ?? ''}}" placeholder="Off Market">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">On Market</label>
                                        <input type="text" class="form-control" id="on_market" name="on_market" value="{{$lead->on_market ?? ''}}" placeholder="On Market">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 formlabel">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="0" @if($lead->status==0){{'selected'}}@endif</option>Offer Pending</option>
                                            <option value="1" @if($lead->status==1){{'selected'}}@endif>Active</option>
                                            <option value="2" @if($lead->status==2){{'selected'}}@endif>Under Contract</option>
                                            <option value="3" @if($lead->status==3){{'selected'}}@endif>Zellaray Under Contract</option>
                                            <option value="4" @if($lead->status==4){{'selected'}}@endif>Sold</option>
                                            <option value="5" @if($lead->status==5){{'selected'}}@endif>Undeliverable</option>
                                        </select>
                                    </div>
                                    <div class=" col-md-12">
                                        <label class="mb-2 formlabel">Other documents:</label>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">OM&nbsp;&nbsp;&nbsp;<a href="{{asset('client-images').'/'.$lead->om_file}}" target="_blank">@if($lead->om_file){{'View Document'}}@endif</a></label>
                                        <input type="file" class="pt-2" name="om_file" accept=".pdf,.doc,.docx,application/msword">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">Rent Roll&nbsp;&nbsp;&nbsp;<a href="{{asset('client-images').'/'.$lead->rent_roll_file}}" target="_blank">@if($lead->rent_roll_file){{'View Document'}}@endif</a></label>
                                        <input type="file" class="pt-2" name="rent_roll_file" accept=".pdf,.doc,.docx,application/msword">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">P and L&nbsp;&nbsp;&nbsp;<a href="{{asset('client-images').'/'.$lead->p_l_file}}" target="_blank">@if($lead->p_l_file){{'View Document'}}@endif</a></label>
                                        <input type="file" class="pt-2" name="p_l_file" accept=".pdf,.doc,.docx,application/msword">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">T12&nbsp;&nbsp;&nbsp;<a href="{{asset('client-images').'/'.$lead->t12_file}}" target="_blank">@if($lead->t12_file){{'View Document'}}@endif</a></label>
                                        <input type="file" class="pt-2" name="t12_file" accept=".pdf,.doc,.docx,application/msword">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">T3&nbsp;&nbsp;&nbsp;<a href="{{asset('client-images').'/'.$lead->t3_file}}" target="_blank">@if($lead->t3_file){{'View Document'}}@endif</a></label>
                                        <input type="file" class="pt-2" name="t3_file" accept=".pdf,.doc,.docx,application/msword">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">Collections report due to Covid&nbsp;&nbsp;&nbsp;<a href="{{asset('client-images').'/'.$lead->covid_file}}" target="_blank">@if($lead->covid_file){{'View Document'}}@endif</a></label>
                                        <input type="file" class="pt-2" name="covid_file" accept=".pdf,.doc,.docx,application/msword">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <label class="mb-1 formlabel">CapX Report&nbsp;&nbsp;&nbsp;<a href="{{asset('client-images').'/'.$lead->capx_file}}" target="_blank">@if($lead->capx_file){{'View Document'}}@endif</a></label>
                                        <input type="file" class="pt-2" name="capx_file" accept=".pdf,.doc,.docx,application/msword">
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <label class="mb-2 formlabel">OM</label>
                                        <input type="file" class="pt-2" id="image" name="image" required>
                                    </div> -->
                                </div>
                                <button type="submit" class=" mt-5 btn btn-primary btn-add float-right">Update Deals</button>
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
<script>
    $("#ask_price,#cap_rate").on("keypress keyup blur", function(event) {
        $(this).val($(this).val().replace(/[^0-9\.|\,]/g, ''));
        if (event.which == 44) {
            return true;
        }
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {

            event.preventDefault();
        }
    });
    $("#price_per_door").on("keypress keyup blur", function(event) {
        $(this).val($(this).val().replace(/[^0-9\.|\,/\m/\k/]/g, ''));
        if (event.which == 44) {
            return true;
        }
        if (event.which == 107) {
            return true;
        }
        if (event.which == 109) {
            return true;
        }
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {

            event.preventDefault();
        }
    });
</script>
@endsection