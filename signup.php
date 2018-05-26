<?php include 'header.php' ?>

  <link rel="stylesheet" type="text/css" href="css/signup1.css">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <div id ="middle_layer">

    <section class ="register_section">

     <!-- form starts -->
     <div class="container">
      <div class="row main">

        <div class="main-login main-center">
          <div class="panel-heading">
           <div class="panel-title text-center">
            <h1 class="title">Register</h1>
          </div>
        </div> 


        <form class="form-horizontal" method="post" action="#">
         <h2>
          <select name="user_hotel">
           <option value="User">User</option>
           <option value="Hotel">Hotel</option>
         </select>
       </h2>

       <div class="form-group">
        <div class="cols-sm-10">
          <div class="input-group">
            <input type="text" class="form-control" name="username" id="username"  placeholder="Fullname" required autofocus/>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="cols-sm-10">
          <div class="input-group">
            <input type="email" class="form-control" name="email" id="email"  placeholder=" Email" required />
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="cols-sm-10">
          <div class="input-group">
            <input type="number" class="form-control" name="number" id="number"  placeholder="Phone Number" required />
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="cols-sm-10">
          <div class="input-group">
            <input type="text" class="form-control" name="address" id="address"  placeholder=" Address" required />
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="cols-sm-10">
          <div class="input-group">
            <input type="text" class="form-control" name="username" id="username"  placeholder=" Username" required />
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="cols-sm-10">
          <div class="input-group">
            <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="cols-sm-10">
          <div class="input-group">
            <input type="password" class="form-control" name="password" id="password"  placeholder="Confirm your Password"/>
          </div>
        </div>
      </div>
      <div class="form-group ">

        <div class="form-group">
          <div class="cols-sm-10">
            <div class="input-group-file">
              <input type="file" class="form-control" name="file_browse" id="file_browse" />
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="cols-sm-10">
            <div class="input-group-file">
              <div class="g-recaptcha" data-sitekey="6LfsZEAUAAAAAPG-H7j5styFKfkyQRrPFoD6aB1I"></div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="cols-sm-10">
            <div class="input-group-file">
              <button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="cols-sm-10">
            <div class="input-group-file">
              <button type="button" class="fb-login">Login with Facebook</button>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="cols-sm-10">
            <div class="input-group-file">
              <button type="button" class="google-login">Login with Google</button>
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- form ends -->


    </section>
  </div>

  
</div>

<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


<?php include 'footer.php' ?>