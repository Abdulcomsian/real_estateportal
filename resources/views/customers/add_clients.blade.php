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

  .slider-box {
    width: 90%;
  }

  label,
  input {
    border: none;
    display: inline-block;
    margin-right: -4px;
    vertical-align: top;
  }

  input {
    width: 70%
  }

  .slider {
    margin: 25px 0
  }
</style>

@endsection
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet" />
@section('content')

<div class="container-fluid">
  <div class="row">
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

      <div class="clinic-s">
        <div class="row py-4 container-fluid ">
          <div class="col-md-12">
            <div class="page-heading"> Add Clients</div>
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
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number">
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
                    <!--  <label class="mb-2 formlabel">Price Range</label> -->
                    <!--  <input type="number" class="form-control" id="price_range" name="price_range" placeholder="Price Range" required> -->
                    <div class="slider-box">
                      <input type="text" id="priceRange" name="price_range" readonly>
                      <div id="price-range" class="slider"></div>
                    </div>
                    @if($errors->has('price_range'))
                    <div class="error">{{ $errors->first('price_range') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Unit Size</label>
                    <input type="text" class="form-control" id="unit_size" name="unit_size" placeholder="Unit Size" required>
                    @if($errors->has('unit_size'))
                    <div class="error">{{ $errors->first('unit_size') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Cap Rate</label>
                    <input type="number" class="form-control" id="cap_rate" name="cap_rate" placeholder="Cap Rate" step=".01" required>
                    @if($errors->has('cap_rate'))
                    <div class="error">{{ $errors->first('cap_rate') }}</div>
                    @endif
                  </div>
                  <!-- <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Price per door</label>
                    <input type="number" class="form-control" id="price_per_door" name="price_per_door" placeholder="Price per door" S>
                    @if($errors->has('price_per_door'))
                    <div class="error">{{ $errors->first('price_per_door') }}</div>
                    @endif
                  </div> -->
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Deal type</label>
                    <select class="form-control chosen-select" id="deal_type" name="deal_type[]" multiple required>
                      <option value="">Select Deal Type</option>
                      <option value="core">Core</option>
                      <option value="stabiized">Stabilized</option>
                      <option value="value-add">Value-Add</option>
                      <option value="heavy-left">Heavy Lift</option>
                      <option value="development">Development</option>
                      <option value="mixed-use">Mixed Use</option>
                      <option value="retail">Retail</option>
                      <option value="land">Land</option>
                      <option value="add-any">Add Any</option>
                    </select>
                    @if($errors->has('deal_type'))
                    <div class="error">{{ $errors->first('deal_type') }}</div>
                    @endif
                  </div>
                  <div class="col-md-4">
                    <label class="mb-2 formlabel">Image</label>
                    <input type="file" class="pt-4" id="image" name="image" accept="image/*">
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

@section('script')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<script>
  $(".chosen-select").chosen({
    no_results_text: "Oops, nothing found!"
  })
</script>
<script type="text/javascript">
  $(function() {
    $("#price-range").slider({
      step: 500,
      range: true,
      min: 0,
      max: 20000,
      values: [0, 20000],
      slide: function(event, ui) {
        $("#priceRange").val(ui.values[0] + " - " + ui.values[1]);
      }
    });
    $("#priceRange").val($("#price-range").slider("values", 0) + " - " + $("#price-range").slider("values", 1));

  });
</script>
<script>
  $("#unit_size").on("keypress keyup blur", function(event) {
    $(this).val($(this).val().replace(/[^0-9\.|\,/\+/]/g, ''));
    if (event.which == 44) {
      return true;
    }
    if (event.which == 43) {
      return true;
    }
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
      event.preventDefault();
    }
  });
</script>

@endsection