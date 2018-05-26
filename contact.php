<?php include 'header.php' ?>
  <link rel="stylesheet" type="text/css" href="css/contactus.css">

  <!-- body starts here -->
<div class="container contactus">
    <h2>Contact us</h2>
    <div class="col-xs-8 col-md-8 col-sm-8 col-lg-8 form">
      <form>
      <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
        <label><h4>Name:</h4></label>
        <input type="text" name="fname" placeholder="" autofocus required class="form-control input-sm">
        <label><h4>Email:</h4></label>
        <input type="email" name="email" placeholder="" required class="form-control input-sm">
        <label><h4>Contact Number:</h4></label>
        <input type="number" name="phone-number" placeholder="" required class="form-control input-sm">
        <input type="submit" name="sumit" placeholder="sumit" class="input-md">
      </div>
      <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
        <label><h4>Message:</h4></label>
        <textarea placeholder="Type Your Message" required class="form-control" rows="8"></textarea>
      </div>
      </form>
    </div>
    <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
      <h2>Our Office</h2>
      <hr>
      <h4>Neplime Pvt. Ltd.</h4>
      <h5>Radhe Radhe, Bhaktapur</h5>
      <span>Phone: 9801100222</span>
      <h5>Email: info@ecare.company</h5>
    </div>
  </div>
  <div class="container-fluid map">
    <h2>Our Location Map</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d28267.337212445633!2d85.39946236099921!3d27.673499099560573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sradhe++radhe+bhaktapur!5e0!3m2!1sen!2snp!4v1519210005224" width="1320" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <!-- body end here -->
  
  <?php include 'footer.php' ?>
</div>

<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>