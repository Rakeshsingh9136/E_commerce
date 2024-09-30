<?php
$pageTitle = 'Home';
ob_start();
?>
<div class="container-fluid">
<section class="vh-20 gradient-custom">
  <div class="container py-5 h-80">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <form action="../backend/login.php" method="POST"> <!-- Form action here -->
                <div class="form-outline form-white mb-4">
                  <input type="email" name="email" placeholder="xyz@gmail.com" class="form-control form-control-lg" required />
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" name="password" placeholder="**************" class="form-control form-control-lg" required />
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="./forgotpassword.php">Forgot password?</a></p>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Submit</button>
              </form>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="./registerPage.php" class="text-white-50 fw-bold">Sign Up</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<?php
$content = ob_get_clean();
include 'base.php';
?>
