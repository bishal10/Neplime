<?php include 'header.php' ?>


    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/hotel1.css">


<div id ="middle_layer">
    <section class="dx-viewport hotel_search ng-scope dx-device-desktop dx-device-generic" data-ng-app="myApp">
        <div class="container">
            <div class="row ng-scope" data-ng-controller="hotelController" data-ng-init="init()">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="quick_search">
                        <h4>Quick Search</h4>
                        <form class="ng-pristine ng-invalid ng-invalid-required">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label class="search_label">Destination</label>
                                        <input type="text" id="searchhotel" class="form-control search_control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="searchtext" placeholder="Destination, hotel name, airport, train station, landmark or address" required="">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type = "submit" class ="btn btn-search">Search</button>
                                    <!-- <input type="submit" class="btn btn-search" value="Search"> -->
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="main-menu">
                        <nav class="navbar navbar-default hidden-filter" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header pull-right">

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#customfilter">
                                    <h4>Filter</h4>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                        
                                </button>

                            </div>
                        </nav>
                    </div>
                    
                    <div class="filter_search collapse navbar-collapse" id="customfilter">
                        <h3 class="hidden-xs hidden-sm">Filter Search</h3>
                        <div class ="price_div">
                            <div class = "price_heading">
                                <h4 data-toggle = "collapse" class= "amount">Price Range</h4>
                            </div>
                            <div class="slider-range">
                                <!-- slider price -->
                                <input type="text" id="amount" readonly style="border:0; color:#005596; font-weight:bold; height:;" >
                                
                                <!-- slider price ends -->
                            </div>

                        </div>
                        
                        <div class="property_search">
                            <h4 data-toggle="collapse" data-target="#facility">Facility 
                                <i class="glyphicon glyphicon-chevron-down glyphicon-2x pull-right" aria-hidden="true"></i> 
                            </h4>
                            <form id="facility" class="collapse ng-pristine ng-valid">
                                <div class="checkbox_div">
                                    <label class="filter_label">
                                        <input type="checkbox" data-ng-model="searchCheck.type1" data-ng-true-value="'free-wifi'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Free Wi-Fi
                                    </label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type2" data-ng-true-value="'airport-shuttle-service'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Airport Shuttle Service</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type3" data-ng-true-value="'non-smoking-room'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Non-smoking room</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type4" data-ng-true-value="'parking'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Parking</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type5" data-ng-true-value="'family-room'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Family Room</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type6" data-ng-true-value="'pets-allowed'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Pets allowed</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type7" data-ng-true-value="'spa-and-wellness-center'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Spa and Wellness Center</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type8" data-ng-true-value="'room-service'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Room Services</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type9" data-ng-true-value="'restaurant'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Restaurant</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type10" data-ng-true-value="'fitness-center'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Fitness Center</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type11" data-ng-true-value="'children-activity'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Children activity</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type12" data-ng-true-value="'card-accepted'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Card Acceptance</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type13" data-ng-true-value="'bar'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Bar</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type14" data-ng-true-value="'night-club'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Night Club</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type15" data-ng-true-value="'banquet-hall'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Banquet Hall</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type16" data-ng-true-value="'laundry-services'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Laundry Services</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type38" data-ng-true-value="'twentyfour_hrs_service'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">24 Hours Room Service</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type39" data-ng-true-value="'outdoor_swimming_pool'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Outdoor Swimming Pool</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type40" data-ng-true-value="'poolbar'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Poolbar</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type41" data-ng-true-value="'porter_service'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Portser Service</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type42" data-ng-true-value="'conference_hall'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Conference Hall</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type43" data-ng-true-value="'washing_machine'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Washing Machine</label>
                                </div>


                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type52" data-ng-true-value="'rooms_connecting_door'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Rooms with connecting doors</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type53" data-ng-true-value="'business_center'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Business Center</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type54" data-ng-true-value="'breakfast_buffet'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Breakfast Buffet</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type55" data-ng-true-value="'concierge'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Concierge</label>
                                </div>

                            </form>
                        </div>
                        <div class="property_search">
                            <h4 data-toggle="collapse" data-target="#funthings">Fun Things To Do <i class="glyphicon glyphicon-chevron-down glyphicon-2x pull-right" aria-hidden="true"></i></h4>
                            <form id="funthings" class="collapse ng-pristine ng-valid">
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type17" data-ng-true-value="'bicycle-rental-sucharge'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Bicycle Rental (surcharge)</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type18" data-ng-true-value="'libray'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Library</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type19" data-ng-true-value="'canoeing'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Canoeing</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type20" data-ng-true-value="'hiking'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Hiking</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type21" data-ng-true-value="'cycling'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Cycling</label>
                                </div>
                            </form>
                        </div>
                        <div class="property_search">
                            <h4 data-toggle="collapse" data-target="#roomfacility">Room Facility <i class="glyphicon glyphicon-chevron-down glyphicon-2x pull-right" aria-hidden="true"></i></h4>
                            <form id="roomfacility" class="collapse ng-pristine ng-valid">
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type22" data-ng-true-value="'balcony'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Balcony</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type23" data-ng-true-value="'flatscreen'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Flat screen TV </label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type24" data-ng-true-value="'terrace'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Terrace</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type25" data-ng-true-value="'view'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">View</label>
                                </div>
                            </form>
                        </div>
                        <div class="property_search">
                            <h4 data-toggle="collapse" data-target="#wellnessSpa">Wellness and Spa <i class="glyphicon glyphicon-chevron-down glyphicon-2x pull-right" aria-hidden="true"></i></h4>
                            <form id="wellnessSpa" class="collapse ng-pristine ng-valid">
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type44" data-ng-true-value="'beauty_salon'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Beauty Salon</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type45" data-ng-true-value="'body_treatment'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Body Treatment</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type46" data-ng-true-value="'hot_stone_massage'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Hot Stone Massage</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type47" data-ng-true-value="'massage'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Massage</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type48" data-ng-true-value="'sauna'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Sauna</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type49" data-ng-true-value="'steam_room'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Steam Room</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type50" data-ng-true-value="'whirl_pool'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Whirl Pool</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type51" data-ng-true-value="'infinity_pool'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Infinity Pool</label>
                                </div>
                            </form>
                        </div>
                        <div class="property_search">
                            <h4 data-toggle="collapse" data-target="#location">Location<i class="glyphicon glyphicon-chevron-down glyphicon-2x pull-right" aria-hidden="true"></i></h4>
                            <form id="location" class="collapse ng-pristine ng-valid">
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" class="checkbox_class"> Near Location</label>
                                </div>

                            </form>
                        </div>
                        <div class="property_search">
                            <h4 data-toggle="collapse" data-target="#bookwithease">Book With Ease <i class="glyphicon glyphicon-chevron-down glyphicon-2x pull-right" aria-hidden="true"></i></h4>
                            <form id="bookwithease" class="collapse ng-pristine ng-valid">
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type26" data-ng-true-value="'free-cancellation'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Free Cancellation</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type27" data-ng-true-value="'no-pre-payment'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">No Pre-payment </label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type28" data-ng-true-value="'pre-payment'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Pre payment</label>
                                </div>
                            </form>
                        </div>
                        <div class="property_search">
                            <h4 data-toggle="collapse" data-target="#bedpreference">Bed Preference <i class="glyphicon glyphicon-chevron-down glyphicon-2x pull-right" aria-hidden="true"></i></h4>
                            <form id="bedpreference" class="collapse ng-pristine ng-valid">
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type29" data-ng-true-value="'twin_bed'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Twin Bed</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type30" data-ng-true-value="'double_bed'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Double Bed</label>
                                </div>
                            </form>
                        </div>
                        <div class="property_search">
                            <h4 data-toggle="collapse" data-target="#propertytype">Property Type <i class="glyphicon glyphicon-chevron-down glyphicon-2x pull-right" aria-hidden="true"></i></h4>
                            <form id="propertytype" class="collapse ng-pristine ng-valid">
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type31" data-ng-true-value="'hotels'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Hotels</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type32" data-ng-true-value="'guest-house'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Guest House</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type33" data-ng-true-value="'bed-and-breakfast'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Bed and Breakfast</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type34" data-ng-true-value="'hostel'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Hostels</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type35" data-ng-true-value="'apartment'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Apartments</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type36" data-ng-true-value="'lodge'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Lodge</label>
                                </div>
                                <div class="checkbox_div">
                                    <label class="filter_label"><input type="checkbox" data-ng-model="searchCheck.type37" data-ng-true-value="'stay-house'" data-ng-false-value="" class="checkbox_class ng-pristine ng-untouched ng-valid ng-empty">Stay House</label>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>



                <div class="col-xs-12 col-sm-12 col-md-9">
                    <div class="search_title ">
                        <br> <h3><span>1 Properties Available</span></h3>
                    </div>
                    <!-- sub navigation starts -->
                    <div class="sort_div hidden-xs hidden-sm">
                        <div class="nav navbar-nav sort-nav">
                            <div class="table-responsive">          
                                <table class="table">
                                   <!--  <thead class = "header">
                                            <th><li id = "sub"><a href="#"><b>Hotel Name </b></a></li></th>
                                            <th><li id = "sub"><a href="#"><b>Pricing</b></a></li></th>
                                            <th><li id = "sub"><a href="#"><b>Near By</b></a></li></th>
                                            <th><li id = "sub"><a href="#"><b>Review score</b></a></li></th>
                                            <th><li id = "sub"><a href="#"><b>Recommended</b></a></li></th>
                                       
                                    </thead> -->

                                    <thead class = "header">
                                          <tr>
                                            <th>Hotel Name</th>
                                            <th>Pricing</th>
                                            <th>Nearby</th>
                                            <th>Review Score</th>
                                            <th>Recommended</th>
                                           </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- sub navigation ends -->
                    <!-- hotel wrapper starts for hotel countryvilla -->
                    <div class = "hotel_wrapper">
                        <a href="hotel_detail.php">
                        <div class="col-xs-12 col-sm-4 col-md-4 padding-out">
                            <div class="search_list">
                                    <!-- carousel image slider starts-->
                                <div class="container-image">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                          <li data-target="#myCarousel" data-slide-to="1"></li>
                                          <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                      <div class="item active">
                                        <img src="images/hotel_2.jpg" alt="Hotel" >
                                      </div>

                                      <div class="item">
                                        <img src="images/mustang.jpg" alt="Mustang">
                                      </div>
                                    
                                      <div class="item">
                                        <img src="images/rara.jpg" alt="Rara">
                                      </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                </div>

                                <!-- carousel images slider ends -->

<!-- 
                                <img src="images/pokhara.jpg" /> -->
                                <!-- icon over image -->
                                <div class="positioner">
                                    <div class="add-to-fav">
                                        <i class="btn btn-primary btn-xs fa fa-heart" aria-hidden="true">
                                        </i>
                                    </div>
                                </div>
                                <div class="ribbon"><span>OFFERS</span></div>
                            </div>
                            <!-- icon over image ends -->
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 padding-in">
                            <div class="search_detail">
                                <h4> <span itemprop="name" class="ng-binding"><b><a href="hotel_detail.php">Hotel Countryvilla</a><b></span></h4>
                                <div class="overall-rating">
                                    <div class="ratings">
                                        <p class = "star">
                                            <span style="float:left;" class="glyphicon glyphicon-star" size="+2"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star-empty"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star-empty"></span>
                                        </p>

                                        <div class="rating-score">
                                            <span class="ng-binding">3</span> out of 5 ( <span id="totalrat" class="ng-binding">3</span> Rating Review)
                                        </div>
                                    </div>
                                </div>

                                <div class= "information-about-hotel">
                                    <p ><span><i class="btn btn-primary btn-xs fa fa-map-marker" aria-hidden="true"></i></span>&nbsp;<a href="#" title="Countryvilla on map"><u>Countryvilla on map</u></a> &nbsp;&nbsp;

                                        <span><i class="btn btn-primary btn-xs fa fa-location-arrow" aria-hidden="true"></i></span>&nbsp;<u>1.2km from center</u></p>

                                        <div class="overall-attraction">
                                            <div class = "attraction-point">
                                                <p> Great value today!!!
                                                </p>
                                            </div>
                                        </div>
                                        <div class ="marker">
                                            <p><span><i class="btn btn-primary btn-xs fa fa-wechat" aria-hidden="true"></i></span>4.5/5- Excellent 53 reviews</p>
                                        </div>
                                </div>
                                     <ul>
                                        <!--Wifi -->
                                        <div class="scope">
                                            <li style="float:left"><a href="#" data-toggle="tooltip" title="WiFi"><i class="btn btn-primary btn-xs fa fa-wifi" aria-hidden="true"></i></a></li>
                                        </div><!-- end Wifi-->

                                            <!-- parking-->
                                            <div class="scope">
                                                <li style="float:left"><a href="" data-toggle="tooltip" title="Car Parking"><i class="btn btn-primary btn-xs fa fa-car" aria-hidden="true"></i></a></li>
                                            </div><!-- end Parking -->



                                            <!-- Restaurant  -->
                                            <div  class="scope">
                                                <li style="float:left"><a href="" data-toggle="tooltip" title="Restaurant"><i class="btn btn-primary btn-xs fa fa-cutlery" aria-hidden="true"></i></a></li>
                                            </div><!-- end Restaurant  -->

                                            <div class="pull-right">
                                                <!-- facebook-->
                                                <div  class="pull-right scope">
                                                    <li><a target="_blank" href="https://www.facebook.com/hotelcountryvilla" data-toggle="tooltip" title="Facebook"><i class="btn btn-primary btn-xs fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                                </div><!-- end facebook  -->
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 detail-box">
                                    <p class = "actual-price">
                                        For one night <del>$200</del> <span>$150</span>
                                    </p>
                                    <p class = "room-availability">
                                       2 rooms left.Hurry up!!
                                    </p>
                                    <input type= "button" name ="Details" id = "details" value = "Details">       
                                </div>
                            </a>
                            </div><!-- hotel wrapper for hotel country villa ends -->

                            <!-- hotel wrapper for hotel CountryLove starts -->
                            <div class = "hotel_wrapper">
                                <div class="col-xs-12 col-sm-4 col-md-4 padding-out">

                            <!-- icon over image -->
                                <div class="search_list">
                                     <!-- carousel image slider starts-->

                                <div class="container-image">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                      <div class="item active">
                                        <img src="images/hotel_2.jpg" alt="Hotel" >
                                      </div>

                                      <div class="item">
                                        <img src="images/mustang.jpg" alt="Mustang">
                                      </div>
                                    
                                      <div class="item">
                                        <img src="images/rara.jpg" alt="Rara">
                                      </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                </div>

                                <!-- carousel images slider ends -->






                                    <!-- <img src="images/hotel_2.jpg" /> -->
                                    <div class="positioner">
                                        <div class="add-to-fav"> <i class="btn btn-primary btn-xs fa fa-heart" aria-hidden="true"></i>
                                        </div>
                                        
                                    </div>
                                    <div class="ribbon"><span>OFFERS</span></div>
                                </div>
                            <!-- icon over image ends -->
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 padding-in">
                            <div class="search_detail">
                                <h4> <span itemprop="name" class="ng-binding"><b>Hotel CountryLove<b></span></h4>
                                <div class="overall-rating">
                                    <div class="ratings">
                                        <p class = "star">
                                            <span style="float:left;" class="glyphicon glyphicon-star"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star-empty"></span>
                                        </p>

                                        <div class="rating-score">
                                            <span class="ng-binding">4</span> out of 5 ( <span id="totalrat" class="ng-binding">4</span> Rating Review)
                                        </div>
                                    </div>
                                </div>

                                <div class= "information-about-hotel">
                                    <p ><span><i class="btn btn-primary btn-xs fa fa-map-marker" aria-hidden="true"></i></span>&nbsp;<a href="#" title="Countrylove on map"><u>CountryLove on map</u></a> &nbsp;&nbsp;

                                        <span><i class="btn btn-primary btn-xs fa fa-location-arrow" aria-hidden="true"></i></span>&nbsp;<u>2km from center</u></p>

                                        <!-- <div class="overall-attraction">
                                            <div class = "attraction-point">
                                                <p = "high-demand"> High demand
                                                    <span>
                                                        <i class = "fa fa-tags" aria hidden = "true"></i>
                                                        Booked 20 times in 24hrs.
                                                    </span>
                                                </p>
                                            </div>
                                        </div> -->
                                        <div class ="marker">
                                            <p><u>Mountain and sunrise view</u></p>
                                           <!--  <p><span><i class="btn btn-primary btn-xs fa fa-user" aria-hidden="true"></i></span>Suitable for couples</p> -->
                                        </div>
                                    </div>

                                    <ul>
                                        <!--Wifi -->
                                        <div class="scope">
                                            <li style="float:left"><a href="#" data-toggle="tooltip" title="WiFi"><i class="btn btn-primary btn-xs fa fa-wifi" aria-hidden="true"></i></a></li>
                                        </div><!-- end Wifi-->

                                            <!-- parking-->
                                            <div class="scope">
                                                <li style="float:left"><a href="" data-toggle="tooltip" title="Car Parking"><i class="btn btn-primary btn-xs fa fa-car" aria-hidden="true"></i></a></li>
                                            </div><!-- end Parking -->



                                            <!-- Restaurant  -->
                                            <div  class="scope">
                                                <li style="float:left"><a href="" data-toggle="tooltip" title="Restaurant"><i class="btn btn-primary btn-xs fa fa-cutlery" aria-hidden="true"></i></a></li>
                                            </div><!-- end Restaurant  -->



                                            <!-- Bar -->
                                            <div class="scope">
                                                <li style="float:left"><a href="" data-toggle="tooltip" title="bar"><i class="btn btn-primary btn-xs fa fa-glass" aria-hidden="true"></i></a></li>
                                            </div><!-- end bar -->

                                            <div class="pull-right">
                                                <!-- facebook-->
                                                <div  class="pull-right scope">
                                                    <li><a target="_blank" href="https://www.facebook.com/hotelcountryvilla" data-toggle="tooltip" title="Facebook"><i class="btn btn-primary btn-xs fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                                </div><!-- end facebook  -->
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 detail-box">
                                    <p class = "actual-price">
                                        For one night <del>$500</del> <span>$400</span>
                                    </p>
                                    <p class = "room-availability">
                                       Few rooms left.Hurry up!!
                                    </p>
                                    <input type= "button" name ="Details" id = "details" value = "Details">       
                                </div>

                            </div><!-- hotel wrapper for hotel CountryLove ends -->



                            <!-- hotel wrapper for hotel Mountview starts -->
                            <div class = "hotel_wrapper">
                                <div class="col-xs-12 col-sm-4 col-md-4 padding-out">

                            <!-- icon over image -->
                                <div class="search_list">
                                     <!-- carousel image slider starts-->

                                <div class="container-image">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                      <div class="item active">
                                        <img src="images/hotel_2.jpg" alt="Hotel" >
                                      </div>

                                      <div class="item">
                                        <img src="images/mustang.jpg" alt="Mustang">
                                      </div>
                                    
                                      <div class="item">
                                        <img src="images/rara.jpg" alt="Rara">
                                      </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                </div>

                                <!-- carousel images slider ends -->





                                    <!-- <img src="images/mustang.jpg" /> -->
                                    <div class="positioner">
                                        <div class="add-to-fav"> <i class="btn btn-primary btn-xs fa fa-heart" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="ribbon"><span>OFFERS</span></div>
                                </div>
                            <!-- icon over image ends -->
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 padding-in">
                            <div class="search_detail">
                                <h4> <span itemprop="name" class="ng-binding"><b>Hotel MountView<b></span></h4>
                                <div class="overall-rating">
                                    <div class="ratings">
                                        <p class = "star">
                                            <span style="float:left;" class="glyphicon glyphicon-star"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star-empty"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star-empty"></span>
                                        </p>

                                        <div class="rating-score">
                                            <span class="ng-binding">3</span> out of 5 ( <span id="totalrat" class="ng-binding">3</span> Rating Review)
                                        </div>
                                    </div>
                                </div>

                                <div class= "information-about-hotel">
                                    <p ><span><i class="btn btn-primary btn-xs fa fa-map-marker" aria-hidden="true"></i></span>&nbsp;<a href="#" title="Mountview on map"><u>Mountview on map</u></a> &nbsp;&nbsp;

                                        <span><i class="btn btn-primary btn-xs fa fa-location-arrow" aria-hidden="true"></i></span>&nbsp;<u>5km from center</u></p>

                                        <div class="overall-attraction">
                                            <div class = "attraction-point">
                                                <p>
                                                    <span>
                                                        <i class = "fa fa-tags" aria hidden = "true"></i>
                                                        20% Discount!!!
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class ="marker">
                                            <p><u>2 persons looking at it right now!</u></p>
                                            <!-- <p><span><i class="btn btn-primary btn-xs fa fa-user" aria-hidden="true"></i></span>Suitable for couples</p> -->
                                        </div>
                                    </div>

                                    <ul>
                                        <!--Wifi -->
                                        <div class="scope">
                                            <li style="float:left"><a href="#" data-toggle="tooltip" title="WiFi"><i class="btn btn-primary btn-xs fa fa-wifi" aria-hidden="true"></i></a></li>
                                        </div><!-- end Wifi-->

                                            <!-- parking-->
                                            <div class="scope">
                                                <li style="float:left"><a href="" data-toggle="tooltip" title="Car Parking"><i class="btn btn-primary btn-xs fa fa-car" aria-hidden="true"></i></a></li>
                                            </div><!-- end Parking -->



                                            <!-- Restaurant  -->
                                            <div  class="scope">
                                                <li style="float:left"><a href="" data-toggle="tooltip" title="Restaurant"><i class="btn btn-primary btn-xs fa fa-cutlery" aria-hidden="true"></i></a></li>
                                            </div><!-- end Restaurant  -->



                                            <!-- Bar -->
                                            <div class="scope">
                                                <li style="float:left"><a href="" data-toggle="tooltip" title="bar"><i class="btn btn-primary btn-xs fa fa-glass" aria-hidden="true"></i></a></li>
                                            </div><!-- end bar -->

                                            <div class="pull-right">
                                                <!-- facebook-->
                                                <div  class="pull-right scope">
                                                    <li><a target="_blank" href="https://www.facebook.com/hotelcountryvilla" data-toggle="tooltip" title="Facebook"><i class="btn btn-primary btn-xs fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                                </div><!-- end facebook  -->
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 detail-box">
                                    <p class = "actual-price">
                                        For one night <del>$200</del> <span>$150</span>
                                    </p>
                                    <p class = "room-availability">
                                       2 rooms left.Hurry up!!
                                    </p>
                                    <input type= "button" name ="Details" id = "details" value = "Details">       
                                </div>

                            </div><!-- hotel wrapper for hotel MountView ends -->


                            <!-- hotel wrapper for hotel LakeSide starts -->
                            <div class = "hotel_wrapper">
                                <div class="col-xs-12 col-sm-4 col-md-4 padding-out">

                            <!-- icon over image -->
                                <div class="search_list">
                                     <!-- carousel image slider starts-->

                                <div class="container-image">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                      <div class="item active">
                                        <img src="images/hotel_2.jpg" alt="Hotel" >
                                      </div>

                                      <div class="item">
                                        <img src="images/mustang.jpg" alt="Mustang">
                                      </div>
                                    
                                      <div class="item">
                                        <img src="images/rara.jpg" alt="Rara">
                                      </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                </div>

                                <!-- carousel images slider ends -->






                                    <!-- <img src="images/rara.jpg" /> -->
                                    <div class="positioner">
                                        <div class="add-to-fav"> <i class="btn btn-primary btn-xs fa fa-heart" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="ribbon"><span>OFFERS</span></div>   
                                </div>
                            <!-- icon over image ends -->
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 padding-in">
                            <div class="search_detail">
                                <h4> <span itemprop="name" class="ng-binding"><b>Hotel LakeSide<b></span></h4>
                                <div class="overall-rating">
                                    <div class="ratings">
                                        <p class = "star">
                                            <span style="float:left;" class="glyphicon glyphicon-star"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star-empty"></span>
                                        </p>

                                        <p class = "star">
                                            <span style="float: left;" class="glyphicon glyphicon-star-empty"></span>
                                        </p>

                                        <div class="rating-score">
                                            <span class="ng-binding">3</span> out of 5 ( <span id="totalrat" class="ng-binding">3</span> Rating Review)
                                        </div>
                                    </div>
                                </div>

                                <div class= "information-about-hotel">
                                    <p ><span><i class="btn btn-primary btn-xs fa fa-map-marker" aria-hidden="true"></i></span>&nbsp;<a href="#" title="LakeSide on map"><u>LakeSide on map</u></a> &nbsp;&nbsp;

                                        <span><i class="btn btn-primary btn-xs fa fa-location-arrow" aria-hidden="true"></i></span>&nbsp;<u>10km from center</u></p>

                                        <div class="overall-attraction">
                                            <div class = "attraction-point">
                                                <p>
                                                    <span>
                                                        <i class = "fa fa-tags" aria hidden = "true"></i>
                                                        Offers left for 2 days.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class ="marker">
                                            <p><u>2 persons looking at it right now!</u></p>
                                            <!-- <p><span><i class="btn btn-primary btn-xs fa fa-user" aria-hidden="true"></i></span>Suitable for couples</p> -->
                                        </div>
                                    </div>

                                    <ul>
                                        <!--Wifi -->
                                        <div class="scope">
                                            <li style="float:left"><a href="#" data-toggle="tooltip" title="WiFi"><i class="btn btn-primary btn-xs fa fa-wifi" aria-hidden="true"></i></a></li>
                                        </div><!-- end Wifi-->

                                            <!-- parking-->
                                            <div class="scope">
                                                <li style="float:left"><a href="" data-toggle="tooltip" title="Car Parking"><i class="btn btn-primary btn-xs fa fa-car" aria-hidden="true"></i></a></li>
                                            </div><!-- end Parking -->



                                            <!-- Restaurant  -->
                                            <div  class="scope">
                                                <li style="float:left"><a href="" data-toggle="tooltip" title="Restaurant"><i class="btn btn-primary btn-xs fa fa-cutlery" aria-hidden="true"></i></a></li>
                                            </div><!-- end Restaurant  -->



                                            <!-- Bar -->
                                            <div class="scope">
                                                <li style="float:left"><a href="" data-toggle="tooltip" title="bar"><i class="btn btn-primary btn-xs fa fa-glass" aria-hidden="true"></i></a></li>
                                            </div><!-- end bar -->

                                            <div class="pull-right">
                                                <!-- facebook-->
                                                <div  class="pull-right scope">
                                                    <li><a target="_blank" href="https://www.facebook.com/hotelcountryvilla" data-toggle="tooltip" title="Facebook"><i class="btn btn-primary btn-xs fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                                </div><!-- end facebook  -->
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 detail-box">
                                    <p class = "actual-price">
                                        For one night <del>$200</del> <span>$150</span>
                                    </p>
                                    <p class = "room-availability">
                                       2 rooms left.Hurry up!!
                                    </p>
                                    <input type= "button" name ="Details" id = "details" value = "Details">       
                                </div>

                            </div><!-- hotel wrapper for hotel LakeSide ends -->



                        </div>
                    </div>
                </div>
            </div>             
        </section>


    </div>


    <!--Footer-->

    <div id="footer">
        <div class="footer-container">
            <div class="footer-row">
                <a href="#" class="first">About</a> <span>|</span> <a href="#">Terms & Condition</a> <span>|</span> <a href="#">Privacy Policy</a> <span>|</span> <a href="#">Contact Us</a> <span>|</span> <a href="#">FAQ</a>
                <p>&copy; 2017 <a href="#"><span class="highlight">neplime.com</span> </a> All right reserved.</p>
            </div>
        </div>
    </div>
    <!-- footer ends -->


</div>


<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/jquery-ui.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script>
$( function() {
    $( ".slider-range" ).slider({
      range: true,
      min: 0,
      max: 1200,
      values: [ 0, 1200 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
    }
});
    $( "#amount" ).val( "$" + $( ".slider-range" ).slider( "values", 0 ) +
      " - $" + $( ".slider-range" ).slider( "values", 1 ) );
} );
</script>



</body>
</html>