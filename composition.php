<section class="h-100 gradient-form" id="back" style="background-color: #eee;">

  <div class="container py-5 h-100" >
  
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="assets/logo.png" style="width: 185px;" alt="logo">
                 
                  <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                </div>

                <form method='post'>

                <div class="form-outline mb-4">
  <?php if (isset($_SESSION['signup_error'] )): ?>
				<div class="alert alert-green alert-dismissible fade show " style="background-color:red;">
				<strong>Please!</strong>
					<?php 
						echo $_SESSION['signup_error']; 
                        unset($_SESSION['signup_error']);
						
					?>
          
				</div>
			<?php endif ?>
  
   
  </div>
                 <strong> <p>Please login to your account</p></strong>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">first name</label>
                    <input type="email" id="form2Example11" class="form-control"  name="fname" placeholder="first name" />
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">last name</label>
                    <input type="password" id="form2Example22" class="form-control" name="lname"  placeholder="last name" />
                  </div>
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">email</label>
                    <input type="password" id="form2Example22" class="form-control" name="email"  placeholder="email" />
                  </div>
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" id="form2Example22" class="form-control" name="password"  placeholder="password" />
                  </div>
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password confirmation</label>
                    <input type="password" id="form2Example22" class="form-control" name="cpassword"  placeholder="repeat the password" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type='submit'><br>
                    <label class="form-label" for="form2Example22" >Login</label>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger">Create new</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2"  id='side'> 
              <!-- <div class="text-white px-3 py-4 p-md-5 mx-md-4" >
                
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>