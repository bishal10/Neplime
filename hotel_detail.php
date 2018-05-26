<?php include 'header.php' ?>



<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/flexslider.css">
  <link rel="stylesheet" type="text/css" href="css/hotel_detail.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.css">

  <!-- test -->

  

<section class="hotel_detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" itemscope itemtype="http://schema.org/Hotel">
                <div class="panel panel-default"  id="panelFooterText" itemprop="location" itemscope itemtype="http://schema.org/Place">
                    <div class="panel-heading" id="panelHeadingColor">
                        <h4>Our Location</h4>
                    </div>
                    <div class="panel-body" id="googleMap">
                       <!--  Add latitude and longitude here
                        <div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
                            Latitude: 40 deg 44 min 54.36 sec N
                            Longitude: 73 deg 59 min 8.5 dec W
                            <meta itemprop="latitude" content="40.75" />
                            <meta itemprop="longitude" content="73.98" />
                          </div> -->
                        
                    </div>
                    <div class="panel-footer panelColor" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <h5 class="text-center">Direct Contact</h5>
                        <h5 class="text-center"><span itemprop="telephone">+977-3455-6544</span></h5>
                        <h5 class="text-center">info@ecare.company</h5>
                        <h5 class="text-center"><span itemprop="addressRegion">Bhaktapur</span></h5>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading text-center" id="panelHotelInfo">
                        <h4>Like us on Facebook</h4>
                    </div>
                   <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fneplime&tabs=timeline&width=300&height=340&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="340" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
                

                    
                </div>
            <div class="col-xs-12 col-sm-12 col-md-8">
                <!-- navbar -->

                    <div class="navbar navbarForGallery">
                      <a href="#hotelImage">Gallery Slider</a>
                      <a href="#roomtypeLink">Price and Info</a>
                      <a href="#facility">Facilities</a>
                      <a href="#policies">Policies</a>
                      <a href="#guestReview" class='schedthis' value='Show'>Guest Review</a>
                    </div>
                       
                <!-- navbar ends here -->
                <div class="detail_wrapper" id="hotelImage">
                    <div class="hotel_title" itemscope itemtype="http://schema.org/Hotel">
                        <h3><span itemprop="name">Tara Lodge Lukla</span></h3>
                        <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><i class="fa fa-map-marker" aria-hidden="true"></i><span itemprop="streetAddress">Lukla</span> , <span itemprop="addressLocality">Everest Base Camp Trekking Route</span>,<span itemprop="addressRegion"> Chaurikharka</span>, <span itemprop="addressCountry">Nepal</span>.</p>
                    </div>
                    <div class="hotel_price pull-right">
                            <div id="TA_cdsratingsonlynarrow999" class="TA_cdsratingsonlynarrow">
                                <ul id="4slXKeXIl" class="TA_links 3gYyrCpc">
                                <li id="XKeNretnr" class="RWkCtma8c1C">
                                <a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png" alt="TripAdvisor"/></a>
                                </li>
                                </ul>
                            </div>
                            <script async src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=999&amp;locationId=3820167&amp;lang=en_US&amp;border=true&amp;shadow=true&amp;backgroundColor=gray&amp;display_version=2"></script>



                    </div>
                    <div class="hotel_slider" itemscope itemtype="http://schema.org/Hotel">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img itemprop="photo" src="https://images.unsplash.com/photo-1516864356635-5688f0a3fe31?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d42a84844536f995c15f6d0bab6102e9&auto=format&fit=crop&w=750&q=80" class="img-responsive"/>
                                </li>
                                <li>
                                    <img itemprop="photo" src="https://images.unsplash.com/photo-1516914589923-f105f1535f88?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f412a6ee4af609b0e3f4f85248f2879f&auto=format&fit=crop&w=750&q=80" class="img-responsive"/>
                                </li>
                                <li>
                                    <img itemprop="photo" src="https://images.unsplash.com/photo-1463062511209-f7aa591fa72f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=3c7691cc1fdd32ce188f0b8881476015&auto=format&fit=crop&w=750&q=80" class="img-responsive"/>
                                </li>
                                <li>
                                    <img itemprop="photo" src="https://images.unsplash.com/photo-1476231790875-016a80c274f3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=52d21e330c0a86c06abc47beb451d20c&auto=format&fit=crop&w=750&q=80" class="img-responsive"/>
                                </li>
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider flex-nav">
                            <ul class="slides">
                                <li>
                                    <img itemprop="photo" src="https://images.unsplash.com/photo-1516864356635-5688f0a3fe31?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d42a84844536f995c15f6d0bab6102e9&auto=format&fit=crop&w=750&q=80" class="img-responsive"/>
                                </li>
                                <li>
                                    <img itemprop="photo" src="https://images.unsplash.com/photo-1516914589923-f105f1535f88?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f412a6ee4af609b0e3f4f85248f2879f&auto=format&fit=crop&w=750&q=80" class="img-responsive"/>
                                </li>
                                <li>
                                    <img itemprop="photo" src="https://images.unsplash.com/photo-1463062511209-f7aa591fa72f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=3c7691cc1fdd32ce188f0b8881476015&auto=format&fit=crop&w=750&q=80" class="img-responsive"/>
                                </li>
                                <li>
                                    <img itemprop="photo" src="https://images.unsplash.com/photo-1476231790875-016a80c274f3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=52d21e330c0a86c06abc47beb451d20c&auto=format&fit=crop&w=750&q=80" class="img-responsive"/>
                                </li>
                                <li>
                                    <img itemprop="photo" src="https://images.unsplash.com/photo-1476231790875-016a80c274f3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=52d21e330c0a86c06abc47beb451d20c&auto=format&fit=crop&w=750&q=80" class="img-responsive"/>
                                </li>
                                <li>
                                    <img itemprop="photo" src="https://images.unsplash.com/photo-1476231790875-016a80c274f3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=52d21e330c0a86c06abc47beb451d20c&auto=format&fit=crop&w=750&q=80" class="img-responsive"/>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
                <div class="col-md-12">
                        <div class="col-md-12 check">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="search_label">Check In</label>
                                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                                    
                                </div>
                                
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="search_label">Check Out</label>
                                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                                    
                                </div>
                                      
                            </div>
                            <div class="col-md-2">
                               
                              <!-- buttons starts here -->
                  <form>
                    <fieldset>
                        <div class="form-group">
                            <label class="control-label">Rooms:</label>
                            <input id="colorful" class="form-control" type="number" value="1" min="1" max="10" />
                        </div>
                    </fieldset>
                  </form>
                            <!-- buttons ends here -->
                            </div>
                            <div class="col-md-2">
                              <form>
                                <fieldset>
                                    <div class="form-group">
                                        <label class="control-label">Adults:</label>
                                        <input id="colorful" class="form-control" type="number" value="1" min="1" max="100" />
                                    </div>
                                </fieldset>
                              </form>
                                    
                            </div>
                            <div class="col-md-2">
                               <div class="form-group">
                                        <label class="control-label">Childrens:</label>
                                        <input id="colorful" class="form-control" type="number" value="1" min="1" max="100" />
                                </div>
                            </div>
                        </div>




                        <!-- room type starts here -->
                     <div  class="container-fluid" itemscope itemtype="http://schema.org/HotelRoom http://schema.org/Product" id="roomtypeLink" >
    <div class="col-md-12 roomtypetable" itemprop="containsPlace" itemscope itemtype="http://schema.org/HotelRoom http://schema.org/Offer ">

    <table class="table table-responsive table-bordered romstable">
        <thead>
        <th>Room Type</th>
        <th>Service</th>
        <th>Price</th>
        <th>Reserve</th>

        </thead>
        <tbody>
        <tr>
            <td rowspan="2" class="slideshowtd">
                <!-- Slideshow container -->
                    <div class="container">
                    <div class="mySlides">
                        <div class="numbertext">1 / 6</div>
                        <img itemprop="image" class="img-responsive roomsimage" src="images/n.jpeg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 6</div>
                        <img itemprop="image" class="img-responsive roomsimage" src="./images/nn.jpeg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 6</div>
                        <img  itemprop="photo" class="img-responsive roomsimage" src="./images/nnn.jpeg"  style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 6</div>
                        <img  itemprop="image" class="img-responsive roomsimage" src="./images/n.jpeg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">5 / 6</div>
                        <img  itemprop="image" class="img-responsive roomsimage" src="./images/nnn.jpeg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">6 / 6</div>
                        <img  itemprop="image" class="img-responsive roomsimage" src="./images/nn.jpeg" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>
                </div>
                <br>
                <span itemprop="name"><strong class="pull-left"> Deluxe Room</strong></span>
                <br>
                <span itemprop="occupancy" itemscope itemtype="http://schema.org/QuantitativeValue">
                <span itemprop="maxValue">
                    <dfn data-info="Max 2 Adult,2 Child(0-5)">
                    <div class="fonticons">
                    <i class="fa fa-child iconscapacity"></i>
                    <i class="fa fa-male fa-2x iconscapacity"></i>
                    <i class="fa fa-female fa-2x iconscapacity"></i>
                    <i class="fa fa-child iconscapacity"></i>
                    </div>
                    </dfn>
                </span>
                </span>

                <div class="bedicons pull-left">
                    <dfn data-info="90-130cm wide
                                131-151cm wide" class="bedinfo">
                        <span itemprop="bed">
                        <img src="./images/bed.png" class="img-responsive bedsicon">
                        <img src="./images/bed.png" class="img-responsive twobedsicon">
</span>
                    </dfn>
                </div>

                <div itemprop="description" class="extrabed"> Extra bed available</div>
            </td>
            <td>
                <ul class="service">
                <span itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                    <li><i class="fa fa-wifi">&nbsp;<span itemprop="name">Free cancellation</span></i></li>
                    <li><i class="fa fa-coffee">&nbsp;<span itemprop="name">Breakfast included</span></i></li>
                    <li><i class="fa fa-wifi">&nbsp;<span itemprop="name">Free wifi</span></i></li>
                    <li><i class="fa fa-dollar">&nbsp;<span itemprop="name">Money Exchange</span></i></li>
                    <li><i class="fa fa-car">&nbsp;<span itemprop="name">Car Parking</span></i></li>
                </span>
                </ul>
                <p class="moredetails" data-toggle="modal" data-target="#myModal"><i class="fa fa-info-circle ">&nbsp;<a href="#">More Details</a></i></p></td>
            </td>
            <td>
                    <p class="price">
                <meta itemprop="price" content="200.00">Rs.200
                <meta itemprop="priceCurrency" content="Rs">

                </p>

            <p class="roomsleft">
            <span itemprop="numberOfRooms" itemscope itemtype="http://schema.org/QuantitativeValue">
            <span itemprop="value">2 rooms left
            </span>
            </span>
            </p>
            </td>
            <td><button class="btn btn-warning btn-lg reservedbutton">Reserved</button></td>
        </tr>
        <tr>
            <td>
                <ul class="service">
                    <li><i class="fa fa-wifi">&nbsp;<span itemprop="name">Free cancellation</span></i></li>
                    <li><i class="fa fa-coffee">&nbsp;<span itemprop="name">Breakfast available Rs.300</span></i></li>
                    <li><i class="fa fa-wifi">&nbsp;<span itemprop="name">Free wifi</span></i></li>
                    <li><i class="fa fa-dollar">&nbsp;<span itemprop="name">Money Exchange</span></i></li>
                    <li><i class="fa fa-car">&nbsp;<span itemprop="name">Car Parking</span></i></li>

                </ul>
                <p class="moredetails" data-toggle="modal" data-target="#myModal"><i class="fa fa-info-circle ">&nbsp;<a href="#">More Details</a></i></p></td>
            <td>
                   <p class="price">

            <meta itemprop="price" content="200.00">Rs.200
            <meta itemprop="priceCurrency" content="Rs">

            </p>
            </td>
            <td><button class="btn btn-warning btn-lg reservedbutton">Reserved</button></td>
        </tr>

        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Room Services</h4>
                </div>
                <div class="modal-body col-md-12">
                    <div class="col-md-3">
                    <ul>
                        <li><span itemprop="name">Smoke free Room</span></li>
                        <li>Breakfast available</li>
                        <li>Hair Dryer</li>
                        <li>Luggage Storage</li>
                        <li>Air Conditioning</li>
                        <li>Balcony</li>
                        <li>Terrace</li>
                        <li>Electric Kettle</li>
                        <li>Newspaper</li>
                        <li>Attached Bathroom</li>
                        <li>Shower</li>
                    </ul>
                    </div>
                    <div class="col-md-4">
                    <ul>
                    <li>Slippers</li>
                    <li>Fan/Ceiling Fan</li>
                    <li>Towels</li>
                    <li>Free wifi</li>
                    <li>Inroom Message Available</li>
                    <li>Complimentary Water Bottle</li>
                    <li>Desk</li>
                    <li>Sofa</li>
                    <li>Bath Top</li>
                    <li>SEwing Kit</li>
                    <li>Shampoo/Soap</li>

                </ul>
                    </div>
                    <div class="col-md-5">
                        <ul>
                            <li>Iron</li>
                            <li>Envelope</li>
                            <li>Sound Proffing</li>
                            <li>Electric Blanket </li>
                            <li>Room with Connecting Doors </li>
                            <li>Shower Bathroom </li>
                            <li>Sun Terrace</li>
                            <li>Sofa</li>
                            <ul><strong>Children's Special</strong>
                            <li>Window Guard</li>
                            <li>Children Toys</li>
                            <li>Baby Bath</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </span>
    </div>
</div> 
                    
                        <!-- room type ends here -->




                        <!-- hotel amenities starts here -->
        <div id="exTab1" class="container-fluid"> 
                <ul  class="nav nav-pills">
                <li class="active">
                    <a  href="#facility" data-toggle="tab">Facilities</a>
                </li>
            
                <li><a href="#guestReview" data-toggle="tab">Guest Review</a>
                </li>
                </ul>

            <div class="tab-content clearfix">
                <div class="tab-pane active" id="facility">
                             
                                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="h2Text">
                                        
                                    <h2><span itemprop="name"> Hotel Country Villa</span></h2>
                                    <a href="#"><span itemprop="address">Kathmandhu</span></a>
                                    <h2>Hotel Ammentites</h2>
                                    </div>
                                
                                    <div class="col-xs-4 col-sm-4 col-md-4 h4Text h5Text">

                                    <h4>Hotel ammentities</h4>
                                            <ul>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Free Wifi</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Free cancelation</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">free parking</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Breakfat available(veg non-veg)/Buffset</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                            </ul>
                                    
                                            <ul>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Lundry Service</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Complimentary drinks</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Bar/lounge</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Airpot Shuttle available</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Daily housekeeping</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Font Desk Safe</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Childcare or baby sitting</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Health care</span>
                                                    <meta itemprop="value" content="True">
                                                </li>

                                                <a data-toggle="collapse" data-target="#viewdetails3">see all ammenities &raquo;</a>
                                    <p>Guests can enjoy a complimentary breakfast. Wireless Internet access is complimentary. Complimentary self parking is available on-site.</p>
                                    <span class="collapse" id="viewdetails3">


                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Meeting/Banquet Facilites</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Seminar/Conference hall</span>
                                                    <meta itemprop="value" content="True">
                                                </li>


                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">lift/Elevator</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Hiking</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Garden</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Poolside bar</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Swimming pool/Out-door swimming pool</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">ATM & Banking</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Indoor sports arena</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Children play ground</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Casino</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Pool house</span>
                                                    <meta itemprop="value" content="True">
                                                </li><li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Camfire</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">live music</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Library</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Pet friendly(Conditions applied)</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Facility for disabled persons</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Riverside umbrella</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Room with connecting doors</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Washing machine</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Card accepted</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Concierge/ Security guard</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Portel Service</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Spa and wellness center</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Gym/fitness center</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Casino</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Fax photocopy</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Printer, Scanner</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                </span>
                                            </ul>
                                    

                                    
                                    <h4>Family Friendly Ammenity</h4>
                                            <ul>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Outdoor pool</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Daily housekeeping</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Free wi-fi</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                            </ul>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 h4Text h5Text">
                                        <h4>Internet</h4>
                                    <p>Available in all romms : Free WiFi</p>
                                    <p>Available in some public ares: Free WiFi</p>
                                    <h4>Rooms Ammenity</h4>
                                    
                                        <ul>
                                            <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Breakfast included/Breakfast available</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Smoke free rooms</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Led TV</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">hair dryer</span>
                                                    <meta itemprop="value" content="True">
                                                </li>


                                            
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Luggage storage</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Air Conditioning</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Balcony</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Terrace</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Electric Kettle</span>
                                                    <meta itemprop="value" content="True">
                                                </li>



                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Newspaper</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Attached bathroom</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Shower (Hot/Cold)</span>
                                                    <meta itemprop="value" content="True">
                                                </li>






                                                <a data-toggle="collapse" data-target="#viewdetails30">see all ammenities &raquo;</a>


                                            <span class="collapse" id="viewdetails30">






                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Sllipers</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Fan(Ceiling )</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Towel</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Free WiFi</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Inroom massage available</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Hot water jug</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Sitting area</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Coffee/Tea maker</span>
                                                    <meta itemprop="value" content="True">
                                                </li><li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Fridge</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Telephone</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Inroom safe</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Complimentary water bottle</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Desk</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Sofa</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Bathtop</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Sewing kit</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Shampoo/soap</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Iron</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Envelope</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Sound Proofing</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Electric blanket</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Room with connecting doors</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">sun terrace</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">hypoallergenic</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                    </span>
                                    </ul>
                                
                                        <h5>Childrens</h5>
                                        <ul>
                                            <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Window guard</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Children plays & tours</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Babybath</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                        </ul>
                                        
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 h4Text h5Text">
                                        <h4>Safety & Security</h4>
                                        <ul>
                                            <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">24 hours security</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Fire extinguisher</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">CCTV</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">First aid kit</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Doctor on call</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Currency exchange</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                        </ul>
                                    <h4>Fun things to do</h4>
                                    
                                            <ul>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">BBQ grill</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Fishing</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Camfire</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Live music</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Casinio</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Sunrise/Sunset</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                            </ul>
                                                <h5>Fun Things to do as a Adventerous</h5>
                                                <ul>
                                                    <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Mountain Climbing</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Hiking/Treking</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Hourse riding(additional charge)</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Bike/car/cycle rent</span>
                                                    <meta itemprop="value" content="True">
                                                </li>




                                                <a data-toggle="collapse" data-target="#viewdetails31">see all ammenities &raquo;</a>


                                            <span class="collapse" id="viewdetails31">






                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">golf course</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Cannoying</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Bunjee jump</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Paragliding</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Rafting</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Rock Climbing</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Boating</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Valley view</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Cinema</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Jungle Safari</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Snow skating</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Futsal</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Batter field</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Heritage</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                                <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Tour or class about local culture</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                            </span>
                                                </ul>
                                    <h4>Accessibility</h4>
                                    <p>If you have requests for specific accessibility needs, please note them at check-out when you book your room.</p>
                                    <ul>
                                        <li itemprop="amenityFeature" itemscope itemtype="http://schema.org/LocationFeatureSpecification">
                                                    <span itemprop="name">Accessible bathroom</span>
                                                    <meta itemprop="value" content="True">
                                                </li>
                                    </ul>
                                </div>

                </div>
                <div class="tab-pane" id="guestReview">
                    <!-- guest review starts here -->
    <div class="col-xs-12 col-sm-12 col-md-12 guest-review-report">
      <h1>Hotel Country Villa</h1>
      <!-- star Rating start -->
      <div class="lead evaluation">
        <div id="colorstar" class="starrr ratable" ></div>
          <span id="count">0</span> star(s) - <span id="meaning"> </span>
            
        
            <div class='indicators' style="display:none">
              <div id='textwr'>What went wrong?</div>
                <input id="rate[]" name="rate[]" type="text" placeholder="" class="form-control input-md" style="display:none;">
                <input id="rating[]" name="rating[]" type="text" placeholder="" class="form-control input-md rateval" style="display:none;">
                
                <span class="button-checkbox">
                <button type="button" class="btn criteria" data-color="info">Punctuallity</button>
                 <input type="checkbox" class="hidden"  />
                </span>
                <span class="button-checkbox">
                <button type="button" class="btn criteria" data-color="info">Assistance</button>
                 <input type="checkbox" class="hidden"  />
                </span>
                <span class="button-checkbox">
                <button type="button" class="btn criteria" data-color="info">Knowledge</button>
                 <input type="checkbox" class="hidden"  />
                </span>
            </div>
      </div>




      <!-- progree bar start -->
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 chart-bar">
          <div class="col-xs-2 col-sm-2 col-md-2 star-rating">
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 hotel-total-progress">
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
              </div>
            </div>
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 number-rating">
            <span>371257</span>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 chart-bar">
          <div class="col-xs-2 col-sm-2 col-md-2 star-rating">
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 hotel-total-progress">
            <div class="progress">
              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
              </div>
            </div>
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 number-rating">
            <span>74600</span>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 chart-bar">
          <div class="col-xs-2 col-sm-2 col-md-2 star-rating">
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 hotel-total-progress">
            <div class="progress">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
              </div>
            </div>
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 number-rating">
            <span>50377</span>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 chart-bar">
          <div class="col-xs-2 col-sm-2 col-md-2 star-rating">
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 hotel-total-progress">
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width:5%">
              </div>
            </div>
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 number-rating">
            <span>20712</span>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 chart-bar">
          <div class="col-xs-2 col-sm-2 col-md-2 star-rating">
            <i class="glyphicon glyphicon-star"></i>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 hotel-total-progress">
            <div class="progress">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
              </div>
            </div>
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 number-rating">
            <span>38619</span>
          </div>
        </div>
      </div>
      <!-- progree bar end -->


      <!-- user review start -->
      <div class="gest-review">
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 most" style="float:left;">
          <h4>Most helpful first</h4>
          <i class="fa fa-user fa-2x people"></i>
          <div class="review">
            <h5>A Google user</h5>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <span>06/02/2018</span>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 thumbs most classThumbsup" style="float:left;">
          <h4>Option</h4>
          <i class="fa fa-thumbs-up fa-2x people classThumbsup"></i>
        </div>
         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
      </div>
    </div>
      <div class="row gest-review">
        <div class="col-xs-6 col-sm-6 col-md-6" style="float:left;">
          <i class="fa fa-user fa-2x people"></i>
          <div class="review-two">
            <h5>A Google user</h5>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <span>06/02/2018</span>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 thumbs">
          <i class="fa fa-thumbs-up fa-2x people classThumbsup"></i>
        </div>
         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
      </div>
    </div>

                    <!-- guest review ends here -->
                </div>
        
            </div>
        </div>
                    
              

                        
      

          

                        <!-- hotel amenitites ends here -->



                        <!-- visiting places -->
                        <div class="container-fluid">
                            
<div class="title-arch">Our Project<p>Lorem ipsum dolor sit amet,ex pulvinar est laoreet ullamcorper.</p></div>
<div class="col-md-12">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project wow animated animated4 fadeInLeft">
        <div class="project-hover">
            <h2>TITLE</h2>
            
            <hr />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
            <a href="#">See Project</a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-2 wow animated animated3 fadeInLeft">
        <div class="project-hover">
            <h2>TITLE</h2>
            <hr />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
            <a href="#">See Project</a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-3 wow animated animated2 fadeInLeft">
        <div class="project-hover">
            <h2>TITLE</h2>
            <hr />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
            <a href="#">See Project</a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-4 wow animated fadeInLeft">
        <div class="project-hover">
            <h2>TITLE</h2>
            <hr />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet ullamcorper.</p>
            <a href="#">See Project</a>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
                        </div>

                        <!-- visiting places ends here -->







                <!-- hotel policy starts here -->
                <div class="container-fluid" id="policies">
                    <div  class="information">
                        <h2 class="policytitle"> Hotel Policies</h2>
                        <hr>
                        <div class="policybody">
                            <div class="row" itemscope itemtype="http://schema.org/Hotel">
                                <div class="col-md-3">
                                    <h5 class="pull-left headmenu">Check-in:&nbsp;&nbsp;
                                        <i class="fa fa-clock-o">
                                            <meta itemprop="checkinTime" content="14:00:00">12:00pm</i>&nbsp;/
                                        &nbsp;<i class="fa fa-clock-o fa-1x ">7:00pm</i>
                                    </h5>
                                </div>
                                <div class="col-md-3">
                                    <h5 class="pull-left headmenu">Check-Out:&nbsp;&nbsp;
                                        <i class="fa fa-clock-o">
                                            <meta itemprop="checkoutTime" content="11:00:00">5:00pm</i>
                                        &nbsp;/ &nbsp;<i class="fa fa-clock-o fa-1x">12:00pm</i></h5>
                                </div>
                                <div class="col-md-4 sideheadmenu" itemscope itemtype="http://schema.org/HotelRoom">
                                    <i class="fa fa-key">&nbsp;Rooms:20 </i>&nbsp;&nbsp;
                                    <i class="fa fa-building">&nbsp;8 floors </i>&nbsp;&nbsp;
                                    <i class="fa fa-building">&nbsp;5 building </i>&nbsp;&nbsp;
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="pull-left headmenu"><b>Language Spoken :</b></h5>
                                </div>
                                <div class="col-md-10 pull-left" itemprop="availableLanguage" itemscope itemtype="http://schema.org/Language" >
                                <div class="col-md-1 col-xs-3">
                                    <img src="./images/nepal.png" class="languageflag img-responsive">
                                    <br><span itemprop="name">Nepali</span></div>
                                <div class="col-md-1 col-xs-3">
                                    <img src="./images/america.png" class="languageflag img-responsive">
                                    <br><span itemprop="name"> English</span></div>
                                <div class="col-md-1 col-xs-3">
                                    <img src="./images/china.png" class="languageflag img-responsive">
                                    <br> <span itemprop="name">Chinese</span></div>
                                <div class="col-md-1 col-xs-3">
                                    <img src="./images/japanese.png" class="languageflag img-responsive">
                                    <br> <span itemprop="name">Japenese</span></div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="pull-left headmenu ">Cancellation :</h5>
                                </div>
                                <div class="col-md-10" itemscope itemtype="http://schema.org/HotelRoom http://schema.org/Product">
                                    <div class="col-md-12 col-xs -12" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <span itemprop="advanceBookingRequirement" itemscope itemtype="http://schema.org/QuantitativeValue">
                                            <span itemprop="minValue">1</span>
                                            <meta itemprop="unitCode" content="DAY"> days before the stay</span>
                                        <strong>25 feb Free</strong>
                                        <br><span class="cancellationbrief">You may cancel free of charge until 1 day Before you arrival.
                                        You will charged total price if you cancel in the day before you arrived.
                                    </span>
                                    </div>

                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <h5 class="pull-left headmenu">Payment Type :</h5>
                                </div>
                                    <div class="col-md-10 col-xs-10">
                                        <div class="col-md-12 col-xs-12" itemscope itemtype="http://schema.org/PaymentCard">
                                        <img itemprop="category" src="./images/visa.png" class="imagepayment img-responsive">
                                        <img itemprop="category" src="./images/khalti.png" class="imagekhalti img-responsive">
                                        <img itemprop="category" src="./images/paypal.png" class="imagekhalti img-responsive">
                                        <img itemprop="category" src="./images/eprabhu.png" class="imageprabhu img-responsive">
                                        <img itemprop="category" src="./images/e-sewa.png" class="imagepayment img-responsive">
                                        <img itemprop="category" src="./images/khalti.png" class="imagepayment img-responsive">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>



                </div>

                <!-- hotel policy ends here -->
                

                    
                <!-- end of gallery part -->
                </div>
              </div>
            </div>
 

</section>
  <!-- test ends here -->
  <link rel="stylesheet" type="text/css" href="css/footer.css">

<!--Footer-->

    <div id="footer">
        <div class="footer-container">
            <div class="footer-row">
                <a href="about.php" class="first">About</a> <span>|</span> <a href="#">Terms & Condition</a> <span>|</span> <a href="privacy.php">Privacy Policy</a> <span>|</span> <a href="#">Contact Us</a> <span>|</span> <a href="faq.php">FAQ</a>
                <p>&copy; 2017 <a href="#"><span class="highlight">neplime.com</span> </a> All right reserved.</p>
            </div>
        </div>
    </div>
    <!-- footer ends -->
  
 



<script src="./bootstrap/js/jquery.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./bootstrap/js/jquery.flexslider.js"></script>
<script src="./bootstrap/js/bootstrap-datepicker.min.js"></script>
<script src="./bootstrap/js/vegas.js"></script>
<script src="./bootstrap/js/bootstrap-number-input.js"></script>
<script src="./bootstrap/js/hotel_detail.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

<script>
  // Remember set you events before call bootstrapSwitch or they will fire after bootstrapSwitch's events
$("[name='checkbox2']").change(function() {
  if(!confirm('Do you wanna cancel me!')) {
    this.checked = true;
  }
});

$('#after').bootstrapNumber();
$('#colorful').bootstrapNumber({
  upClass: 'success',
  downClass: 'danger'
});
</script>
   
</body>
</html>
