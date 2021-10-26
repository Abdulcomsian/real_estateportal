@extends('layouts.master')
@section('title')
    Zine Collective | International Marketing
@endsection
@section('css')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
@endsection
@section('content')

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
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53170.948274008886!2d73.06785476748225!3d33.60052310805986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95f7c0118bb1%3A0x773c0f0856728b7!2sSilk%20Centre%20Rawalpindi!5e0!3m2!1sen!2s!4v1634791617080!5m2!1sen!2s" width="100%" height="600" style="border:none;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-30 bg-white" >
                                    <div class="courses-item pt-3">
                                            <div class="courses-grid">
                                                <div class="img-part">
                                                    <a data-toggle="modal" data-target="#exampleModalCenter" href="#"><img src="{{asset ('images/6c466474155f14bb34a49fe180f1ea49-p_e.jpg')}}" alt="img" class="img-fluid"></a>
                                                </div>
                                                <div class="content-part">
                                                    <div class="info-meta">
                                                        <ul>                                                
                                                            <li class="ratings">
                                                                <h5>$289,900</h5>
                                                            </li><br>
                                                            
                                                            <li class="user">
                                                                Traget location
                                                            </li>
                                                            <li class="user">
                                                                Pindi                                        
                                                            </li><br>
                                                            <li class="user">
                                                                Unit size
                                                            </li>
                                                            <li class="user">
                                                                123                                        
                                                            </li><br>
                                                            <li class="user">
                                                               House for 
                                                            </li>
                                                            <li class="user">
                                                                Sale                                       
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
                                                        <span class="price2">Emerald lakes</span>
                                                    </div>
                                                    <ul class="meta-part">
                                                        <p class="title"><a href="#">648 Sullivan Trl, Long Pond, PA 18334</a></p>
                                                        <p class="title"><a href="#">BETTER HOMES AND GARDENS REAL ESTATE WILKINS & ASSOCIATES - STROUDSBURG</a></p>
                                                    </ul>
                                                
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered"        role="document">
                                                    <div class="modal-content rounded-0">
                                                    <div class="modal-body py-0">

                                                        
                                                        <div class="d-flex main-content">
                                                        <div class="bg-image promo-img mr-3" style="background-image: url('{{asset ('images/6c466474155f14bb34a49fe180f1ea49-p_e.jpg')}}');">
                                                            <span class="price">$249,900</span>
                                                        </div>
                                                        <div class="content-text p-4 px-5 align-item-stretch">
                                                            <div >
                                                                <a href="#" class="share"><span class="icon-share"></span></a>
                                                                <h3 class="mb-3 line text-center">Emerald lakes</h3>
                                                                <table class="table table-bordered">

                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Name</th>
                                                                            <td>abc</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">phone number</th>
                                                                            <td>034004030303</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Email</th>
                                                                            <td>abc@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Traget location</th>
                                                                            <td>Pindi</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Price Range</th>
                                                                            <td>$50000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Unit Size</th>
                                                                            <td>150 feet</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Cap Rate</th>
                                                                            <td>Cap rate</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Price per door</th>
                                                                            <td>Price per door</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Deal Type</th>
                                                                            <td>Deal type</td>
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
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="courses-item pt-3">
                                            <div class="courses-grid">
                                                <div class="img-part">
                                                    <a data-toggle="modal" data-target="#exampleModalCenter" href="#"><img src="{{asset ('images/home2.jpg')}}" alt="img" class="img-fluid"></a>
                                                </div>
                                                <div class="content-part">
                                                    <div class="info-meta">
                                                    <ul>                                                
                                                            <li class="ratings">
                                                                <h5>$289,900</h5>
                                                            </li><br>
                                                            
                                                            <li class="user">
                                                                Traget location
                                                            </li>
                                                            <li class="user">
                                                                Pindi                                        
                                                            </li><br>
                                                            <li class="user">
                                                                Unit size
                                                            </li>
                                                            <li class="user">
                                                                123                                        
                                                            </li><br>
                                                            <li class="user">
                                                               House for 
                                                            </li>
                                                            <li class="user">
                                                                Sale                                       
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
                                                        <span class="price2">Emerald lakes</span>
                                                    </div>
                                                    <ul class="meta-part">
                                                        <p class="title"><a href="#">648 Sullivan Trl, Long Pond, PA 18334</a></p>
                                                        <p class="title"><a href="#">BETTER HOMES AND GARDENS REAL ESTATE WILKINS & ASSOCIATES - STROUDSBURG</a></p>
                                                    </ul>
                                                
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered"        role="document">
                                                    <div class="modal-content rounded-0">
                                                    <div class="modal-body py-0">

                                                        
                                                        <div class="d-flex main-content">
                                                        <div class="bg-image promo-img mr-3" style="background-image: url('{{asset ('images/home2.jpg')}}');">
                                                            <span class="price">$249,900</span>
                                                        </div>
                                                        <div class="content-text p-4 px-5 align-item-stretch">
                                                            <div >
                                                                <a href="#" class="share"><span class="icon-share"></span></a>
                                                                <h3 class="mb-3 line text-center">Emerald lakes</h3>
                                                                <table class="table table-bordered">

                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Name</th>
                                                                            <td>abc</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">phone number</th>
                                                                            <td>034004030303</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Email</th>
                                                                            <td>abc@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Traget location</th>
                                                                            <td>Pindi</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Price Range</th>
                                                                            <td>$50000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Unit Size</th>
                                                                            <td>150 feet</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Cap Rate</th>
                                                                            <td>Cap rate</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Price per door</th>
                                                                            <td>Price per door</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Deal Type</th>
                                                                            <td>Deal type</td>
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
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


@endsection
@section('script')
    
   
@endsection

