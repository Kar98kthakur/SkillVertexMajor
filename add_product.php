<?php
include 'includes/common.php';
error_reporting(0);
// if (!(isset($_SESSION["email"]) && $_SESSION["email"] == "supermarketadmin@admin.com")) {
//     header('location: index.php');
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super-Market - Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
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

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Product</p>

                                    <form method="POST" enctype="multipart/form-data">

                                        <div class="d-flex flex-row align-items-center mb-4 form-group">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4 form-group">
                                            <div class="form-outline flex-fill mb-0">
                                                <textarea type="text" name="desc" class="form-control" rows="5" placeholder="Enter Product Description" required></textarea>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4 form-group">
                                            <div class="form-outline flex-fill mb-0">
                                                <label for="category" class="mb-3">Select a Category : </label>
                                                <select class="form-control" name="cate" required>
                                                    <option selected>Category...</option>
                                                    <option>Staples</option>
                                                    <option>Beverages</option>
                                                    <option>Snacks</option>
                                                    <option>Kitchen Essentials</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4 form-group">
                                            <div class="form-outline flex-fill mb-0">
                                                <!-- <label for="image" class="mb-3">Select a image(.jpg, .jpeg, .png) : </label><br> -->
                                                <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000"> -->
                                                <input type="file" class="form-control-file" id="fileToUpload" name="fileToUpload" accept=".jpg, .jpeg, .png" required>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mt-5">
                                            <div class="justify-content-center mx-4 mb-3 mb-lg-4" style="display: inline;">
                                                <input type="reset" name="reset" class="btn btn-primary btn-lg" value="Reset">
                                            </div>

                                            <div class="justify-content-center mx-4 mb-3 mb-lg-4" style="display: inline;">
                                                <input type="submit" name="add" class="btn btn-primary btn-lg" value="Add">
                                            </div>
                                        </div>

                                        <?php
                                        // if (isset($_GET["m"])) {
                                        //     echo $_GET['m'];
                                        // }
                                        ?>

                                        <?php
                                        if (isset($_POST['add'])) {
                                            $name = $_POST['name'];
                                            $desc = $_POST['desc'];
                                            $cate = $_POST['cate'];
                                            $uploadOK = 1;
                                            $target_dir = "assets/img/products/";
                                            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                            $imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                                            if ($imagefiletype != "jpg" && $imagefiletype != "jpeg" && $imagefiletype != "png") {
                                                echo "Sorry only image formats allowed";
                                                $uploadOK = 0;
                                            }
                                            if ($uploadOK == 0) {
                                        ?>
                                                <script>
                                                    location.href = "add_product.php?yd=2";
                                                </script>
                                            <?php
                                            } else {
                                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                                    mysqli_query($con, "INSERT INTO `products`(`name`, `description`, `category`, `img_path`) VALUES ('$name','$desc','$cate','$target_file')");
                                                }
                                            ?>
                                                <script>
                                                    location.href = "add_product.php?yd=1";
                                                </script>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <?php
                                        $yd = $_GET['yd'];
                                        if ($yd == 1) {
                                        ?>
                                            <div class="alert" style="background: green; color: #fff;">Product added successfully</div>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        $yd = $_GET['yd'];
                                        if ($yd == 2) {
                                        ?>
                                            <div class="alert alert-danger" style="background: red; color: #fff;">Product not added!! error</div>
                                        <?php
                                        }
                                        ?>

                                    </form>
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