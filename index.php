 <?php include 'header.php' ?>


 <link rel="stylesheet" type="text/css" href="css/vegas.css">
  
  <link rel="stylesheet" type="text/css" href="css/design.css">

  <div id = "wrapper">


  <div id ="middle_layer">
    <div id= "hotel_event">
      <section id="booking_wrapper">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 bg_booking">
              <ul class="nav nav-tabs tab_head" role="tablist">
                <li role="presentation" class="active"><a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">
                  <i class="glyphicon glyphicon-home" aria-hidden="true"></i>
                  Hotels
                </a></li>
                <li role="presentation"><a href="#car" aria-controls="car" role="tab" data-toggle="tab">
                  <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
                  Events</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="hotel">
                    <form class="booking-form">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group booking-group">
                            <label class="booking_label">Going to</label>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i></span>
                              <input type="text" class="form-control book_control" placeholder="Destination, hotel name, airport, train station, landmark or address" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                          <div class="form-group booking-group">
                            <label class="booking_label">Check In</label>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
                              <input type="text" class="form-control book_control_2" id="datepicker1" placeholder="dd/mm/yyy" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3">
                          <div class="form-group booking-group">
                            <label class="booking_label">Check Out</label>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
                              <input type="text" class="form-control book_control_2" id="datepicker2" placeholder="dd/mm/yyy" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-1">
                          <div class="form-group booking-group select-style">
                            <label class="booking_label">Rooms</label>
                            <select class="form-control book_control_2">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>8</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-3 adult_children">
                          <div class="container_adult" >
                                <i class="fa fa-user user_icon" aria-hidden="true"></i>
                                
                                      <button class="btn btn-default button_adult_children" id="menu1" data-toggle="dropdown">1 adult, 0 children<span class="caret">
                                      </span></button>
                                      <ul class="dropdown-menu_adult_children" role="menu" aria-labelledby="menu1">
                                        <li role="presentation" class= "adult_value">
                                          <button class="btn btn-default" type="button"><i class="fa fa-plus"></i></button>
                                          <label><span><input type="text" readonly class="form-control" value="1"></span> Adult</label>
                                        <button class="btn btn-default" type="button"><i class="fa fa-minus"></i></button>
                                        </li>
                                        <br/>
                                            <li role="presentation" class= "child_value">
                                          <button class="btn btn-default" type="button"><i class="fa fa-plus"></i></button>
                                          <label><span><input type="text" readonly class="form-control" value="0"></span> Children</label>
                                        <button class="btn btn-default" type="button"><i class="fa fa-minus"></i></button>
                                        </li>
                                        
                                        
                                      </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <input type="submit" class="btn btn-search" value="Search">
                        </div>
                      </div>
                    </form>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="car">
                    <form class="booking-form">
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-5">
                          <div class="form-group booking-group">
                            <label class="booking_label">Events Name</label>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-list-alt"></i></span>
                              <input type="text" class="form-control book_control_2" placeholder="Search Event by Name" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-5">
                          <div class="form-group booking-group">
                            <label class="booking_label">Location</label>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                              <input type="text" class="form-control book_control_2" placeholder="Search Event by Location" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 hidden-sm col-md-2"></div>

                        <div class="col-xs-12 col-sm-3 col-md-3">
                          <div class="form-group booking-group">
                            <label class="booking_label">Event Date</label>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                              <input type="text" class="form-control book_control_2" id="datepicker3" placeholder="dd/mm/yyy" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>

                        <!--<div class="col-xs-12 col-sm-2 col-md-2"></div>-->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <input type="submit" class="btn btn-search" value="Search">
                        </div>
                      </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>   
      </div>
    </div>

    <section class="service_section">
      <div class="container">
        <div class="row_services">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="service_div">
              <img src="images/info.png" class="img-responsive center-block" alt="">
              <p>Information about <br>hotels &amp; prices</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="service_div">
              <img src="images/hotel.png" class="img-responsive center-block" alt="">
              <p>Cheap hotels <br>near you</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="service_div">
              <img src="images/holiday.png" class="img-responsive center-block" alt="">
              <p>Better plan your <br>holiday</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-3  col-xs-12 ">
            <div class="service_div">
              <img src="images/cancel.png" class="img-responsive center-block" alt="">
              <p>No cancellation <br>Fees</p>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>

 


  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="js/vegas.js"></script>
  <script src="js/jquery.range.js"></script>
  
  <script src="js/jquery.flexslider.js"></script>
  <script>
 $("#booking_wrapper").vegas({
        delay: 10000,
        timer: false,
        shuffle: true,
        transition: ['zoomOut'],
        transitionDuration: 10000,
        slides: [
            { src: "collection/images/lake.jpg" },
            { src: "collection/images/mustang.jpg" },
            { src: "collection/images/neplime_hotel_booking_in_nepal.jpg" }
        ]
    });

    $(window).load(function() {
        // The slider being synced must be initialized first
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    });

    (function ($) {
        $('.adult_value .btn:first-of-type').on('click', function() {
          $('.adult_value input').val( parseInt($('.adult_value input').val(), 10) + 1);
        });
        $('.adult_value .btn:last-of-type').on('click', function() {
          $('.adult_value input').val( parseInt($('.adult_value input').val(), 10) - 1);
        });
      })(jQuery);

       (function ($) {
        $('.child_value .btn:first-of-type').on('click', function() {
          $('.child_value input').val( parseInt($('.child_value input').val(), 10) + 1);
        });
        $('.child_value .btn:last-of-type').on('click', function() {
          $('.child_value input').val( parseInt($('.child_value input').val(), 10) - 1);
        });
      })(jQuery);

    </script>

  <?php include 'footer.php' ?>