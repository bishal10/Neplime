<?php include 'header.php' ?>

<link rel="stylesheet" type="text/css" href="css/customersupport.css">
    <div id ="middle_layer">
      <section class ="customer_section">
       
        <div class="container">
          <div class="row main">
            
            <div class="main-login main-center">
              <div class="panel-heading">
               <div class="panel-title text-center">
                <h1 class="title">Customer Support</h1>
              </div>
            </div> 
            
            <form class="form-horizontal" method="post" action="#">
              

              <div class="form-group">
                <label for="username" class="cols-sm-2 control-label">Subject:</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <input type="text" class="form-control" name="subject" id="subject"  placeholder="Input..." required autofocus/>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Type:</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <input type="text" class="form-control" name="type" id="type"  placeholder="Input..."/>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Thread:</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <textarea rows="3" cols="28" name="comment" placeholder = 'Enter text here...'></textarea>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="cols-sm-10">
                  <div class="input-group">
                    <button type="button" class="btn btn-primary btn-lg btn-block login-button">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>




      
		</section>
  </div>
  
  
</div>

<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<?php include 'footer.php' ?>