@extends('layouts.master')
@section('title')
Zine Collective | International Marketing
@endsection
@section('css')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
@endsection
@section('content')
 @php
    $locations=array();
 @endphp
<div class="container-fluid">
    <div class="row">
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            <div class="clinic-s">
                <div class="row py-4 container-fluid ">
                    <div class="col-md-12">
                        <div class="page-heading">Search</div>
                    </div>
                </div>

                <div id="rs-popular-courses" class="rs-popular-courses main-home event-bg pt-100 pb-100 md-pt-70 md-pb-70">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div id="map_canvas" style="height:670px; width:100%;"></div>
                                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53170.948274008886!2d73.06785476748225!3d33.60052310805986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95f7c0118bb1%3A0x773c0f0856728b7!2sSilk%20Centre%20Rawalpindi!5e0!3m2!1sen!2s!4v1634791617080!5m2!1sen!2s" width="100%" height="600" style="border:none;" allowfullscreen="" loading="lazy"></iframe> -->
                            </div>
                            @foreach($lead as $le)
                            @php
                             $locations[]=array('name'=>$le->address,'lat'=>$le->location_lat,'lng'=>$le->location_long,'id'=>$le->leadid);
                            @endphp
                            <div class="col-lg-3 col-md-6 mb-30 bg-white">
                                <div class="courses-item pt-3">
                                    <div class="courses-grid">
                                        <div class="img-part">
                                            <a onclick="openmodal('{{json_encode($le)}}')" href="#">
                                             <img src="@if($le->file){{asset('client-images').'/'.$le->file}}@else{{asset('images/110-1102927_create-your-profile-user-icon-white-color-hd.png')}}@endif" alt="img" class="img-fluid"></a>
                                        </div>
                                        <div class="content-part" style="height: 314px">
                                            <div class="info-meta">
                                                <ul>
                                                    <li class="ratings">
                                                        <h5>${{$le->ask_price}}</h5>
                                                    </li><br>

                                                    <li class="user">
                                                        Traget location
                                                    </li>
                                                    <li class="user">
                                                        {{$le->target_location}}
                                                    </li><br>
                                                    <li class="user">
                                                        Unit size
                                                    </li>
                                                    <li class="user">
                                                        {{$le->unit_size}}
                                                    </li><br>
                                                </ul>
                                            </div>

                                            <div class="course-price">

                                                <span class="price">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="ratings">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </span>
                                                <span class="price2">{{$le->markete_location}}</span>
                                            </div>
                                            <ul class="meta-part">
                                                <p class="title"><a href="#">{{$le->address}}</a></p>
                                            </ul>

                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg"  role="document">
                                            <div class="modal-content rounded-0" style="width:1000px">
                                                <div class="modal-body py-0">
                                                    <div class="d-flex main-content">
                                                        <input type="hidden" id="publicurl" value="{{asset('client-images')}}">
                                                         <input type="hidden" id="publicurl1" value="{{asset('images')}}">
                                                        <div class="bg-image promo-img mr-3" id="bgimage"style="">
                                                            <span class="price" id="modalprice">$249,900</span>
                                                        </div>
                                                        <div class="content-text p-4 px-5 align-item-stretch">
                                                            <div>
                                                                <a href="#" class="share"><span class="icon-share"></span></a>
                                                                <h3 class="mb-3 line text-center" id="mmarkete_location">Emerald lakes</h3>
                                                                <table class="table table-bordered">

                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Address</th>
                                                                            <td id="modaladdress">abc</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row"> Ask Price</th>
                                                                            <td id="modalaskprice">034004030303</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row" >gross_revenue</th>
                                                                            <td id="modalgross_revenue">>abc@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">NOI</th>
                                                                            <td id="modalnoi">Pindi</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">occupancy</th>
                                                                            <td id="modaloccupancy">$50000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">asset_class</th>
                                                                            <td id="modalasset_class">150 feet</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Cap Rate</th>
                                                                            <td id="modalcaprate">Cap rate</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Price per door</th>
                                                                            <td id="modalpriceperdoor">Price per door</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Assign To</th>
                                                                            <td id="modalassignto"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                             <div class="col-md-6"></div>
                             <div class="col-md-6 d-flex justify-content-center" style="margin-bottom:10px">
                                 {{$lead->links("pagination::bootstrap-4")}}
                            </div>
                        </div>
                       
                    </div>

                </div>
            </div>
        </main>
    </div>
</div>
@php  $markers = json_encode( $locations ); @endphp
@endsection
@section('script')
<script>
    function openmodal(lead) {
        lead=JSON.parse(lead);
        
        if(lead.file)
        {
          publicurl=$("#publicurl").val();
        $("#bgimage").css({'background-image':'url('+publicurl+'/'+lead.file+')','background-repeat': 'no-repeat','background-size'  : 'cover'});
        }else{
            publicurl1=$("#publicurl1").val();
            $("#bgimage").css({'background-image':'url('+publicurl1+'/110-1102927_create-your-profile-user-icon-white-color-hd.png)','background-repeat': 'no-repeat','background-size'  : 'cover'});
        } 
        $("#mmarkete_location").text(lead.markete_location);
        $("#modalprice").text('$'+lead.ask_price);
        $("#modaladdress").text(lead.address);
        $("#modalgross_revenue").text('$'+lead.gross_revenue);
        $("#modalnoi").text(lead.noi);
        $("#modaloccupancy").text('$'+lead.occupancy);
        $("#modalasset_class").text(lead.asset_class);
        $("#modalcaprate").text('$'+lead.leadcap_rate);
        $("#modalpriceperdoor").text('$'+lead.leadpricedoor);
        $("#modalassignto").text(lead.name);
        $("#exampleModalCenter").modal();
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeHpSgm-hy0_G_NC6PynKEYgASntQIi1Y&libraries=places&callback=initMap" async defer></script>
<script>
    var directionsDisplay,
        directionsService,
        map;
        <?php
        echo "var json=$markers;\n";
        ?>

    function initMap() {
        var directionsService = new google.maps.DirectionsService();
        directionsDisplay = new google.maps.DirectionsRenderer();
         var chicago = new google.maps.LatLng({{$lead[0]->location_lat}}, {{$lead[0]->location_long}});
        var mapOptions = {
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            center: chicago,
            icon:'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
        }
        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
        var infowindow = new google.maps.InfoWindow(), marker, lat, lng;
         // var json=JSON.parse( markers );
          for( var o in json ){
            
            lat = json[ o ].lat;
            lng=json[ o ].lng;
            name=json[ o ].id;
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(lat,lng),
                name:name,
                map: map
            }); 
            google.maps.event.addListener( marker, 'click', function(e){
                // infowindow.setContent( this.name );
                // infowindow.open( map, this );
                openleadinmodal(this.name);
            }.bind( marker ) );
        }
    }
</script>
<script type="text/javascript">
    function openleadinmodal(id)
    {
        $.ajax({
            url:'{{url("/get-lead-details")}}',
            method:'get',
            data:{id:id},
            success:function(res)
            {
                 var lead=JSON.parse( res );
                  if(lead.file)
                    {
                      publicurl=$("#publicurl").val();
                    $("#bgimage").css({'background-image':'url('+publicurl+'/'+lead[0].file+')','background-repeat': 'no-repeat','background-size'  : 'cover'});
                    }else{
                        publicurl1=$("#publicurl1").val();
                        $("#bgimage").css({'background-image':'url('+publicurl1+'/110-1102927_create-your-profile-user-icon-white-color-hd.png)','background-repeat': 'no-repeat','background-size'  : 'cover'});
                    } 
                $("#mmarkete_location").text(lead[0].markete_location);
                $("#modalprice").text('$'+lead[0].ask_price);
                $("#modaladdress").text(lead[0].address);
                $("#modalaskprice").text('$'+lead[0].ask_price);
                $("#modalgross_revenue").text('$'+lead[0].gross_revenue);
                $("#modalnoi").text(lead[0].noi);
                $("#modaloccupancy").text('$'+lead[0].occupancy);
                $("#modalasset_class").text(lead[0].asset_class);
                $("#modalcaprate").text('$'+lead[0].leadcap_rate);
                $("#modalpriceperdoor").text('$'+lead[0].leadpricedoor);
                $("#modalassignto").text(lead[0].name);
                $("#exampleModalCenter").modal();
            }
        })
    }
</script>
@endsection