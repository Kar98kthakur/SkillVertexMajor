<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super Market Website</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous">
            <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
        .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
    </style>
    </head>
    <body>
        <!-- NavBar -->
        <?php include "includes/login-navbar.php"; ?>

        <!-- NavBar End -->

        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center
                    h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img
                            src="assets/img/login-bg.webp"
                            class="img-fluid" alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form>
                            <div class="d-flex flex-row align-items-center
                                justify-content-center">
                                <h1 class="text-center mb-5 me-3">Sign in</h1>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3"
                                    class="form-control form-control-lg"
                                    placeholder="Enter a valid email address" />
                                <label class="form-label" for="form3Example3">Email
                                    address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <input type="password" id="form3Example4"
                                    class="form-control form-control-lg"
                                    placeholder="Enter password" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <div class="d-flex justify-content-between                       align-items-center">
                                <a href="#!" class="text-body">Forgot password?</a>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="button" class="btn btn-primary
                                    btn-lg"
                                    style="padding-left: 2.5rem; padding-right:
                                    2.5rem;">Login</button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">Don't
                                    have an account? <a href="register.php"
                                        class="link-danger">Register</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- <div
                class="d-flex flex-column flex-md-row text-center text-md-start
                justify-content-between py-4 px-4 px-xl-5 bg-primary"> -->
                <!-- Copyright -->
                <!-- <div class="text-white mb-3 mb-md-0">
                    Copyright © 2020. All rights reserved.
                </div> -->
                <!-- Copyright -->

                <!-- Right -->
                <!-- <div>
                    <a href="#!" class="text-white me-4">
                        <i class="fab fa-facebook-f" style="color: #fff;"></i>
                    </a>
                    <a href="#!" class="text-white me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#!" class="text-white me-4">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#!" class="text-white">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div> -->
                <!-- Right -->

                
            </div>
        </section>

        <?php include "includes/login-footer.php"; ?>
        
    </body>
</html>