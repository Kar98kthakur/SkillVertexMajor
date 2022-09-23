<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super-Market - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'includes/login-navbar.php'; ?>
    <section class="vh-75 pb-3 pt-3" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center
                    h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius:
                            25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5
                                        order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5
                                            mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row
                                                align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3
                                                    fa-fw"></i>
                                            <div class="form-outline
                                                    flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" />
                                                <label class="form-label" for="form3Example1c" required>Your
                                                    Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row
                                                align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg
                                                    me-3 fa-fw"></i>
                                            <div class="form-outline
                                                    flex-fill mb-0">
                                                <input type="email" id="form3Example3c" class="form-control" />
                                                <label class="form-label" for="form3Example3c" required>Your
                                                    Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row
                                                align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg
                                                    me-3 fa-fw"></i>
                                            <div class="form-outline
                                                    flex-fill mb-0">
                                                <input type="tel" id="form3Example2c" class="form-control" />
                                                <label class="form-label" for="form3Example2c" name="telephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>Phone
                                                    Number</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row
                                                align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3
                                                    fa-fw"></i>
                                            <div class="form-outline
                                                    flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control" />
                                                <label class="form-label" for="form3Example4c" required>Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row
                                                align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3
                                                    fa-fw"></i>
                                            <div class="form-outline
                                                    flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control" />
                                                <label class="form-label" for="form3Example4cd" required>Repeat
                                                    your password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row
                                                align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg
                                                    me-3 fa-fw"></i>
                                            <div class="form-outline
                                                    flex-fill mb-0">
                                                <input type="text" id="form3Example5c" class="form-control" />
                                                <label class="form-label" for="form3Example5c" required>Your
                                                    Address</label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex
                                                justify-content-center mb-5">
                                            <input class="form-check-input
                                                    me-2" type="checkbox" value="" id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3" required>
                                                I agree
                                            </label>
                                        </div>

                                        <div class="d-flex
                                                justify-content-center mx-4 mb-3
                                                mb-lg-4">
                                            <button type="button" class="btn
                                                    btn-primary btn-lg">Register</button>
                                        </div>
                                        <div class="text-center text-lg-start mt-4 pt-2">
                                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php" class="link-danger">Login</a></p>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7
                                        d-flex align-items-center order-1
                                        order-lg-2">

                                    <img src="assets/img/register-bg.png" class="img-fluid mb-10" style="object-fit: cover; width: 500px; border-radius: 10px; opacity: 0.9;" alt="Sample
                                            image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/login-footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>