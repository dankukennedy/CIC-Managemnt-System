<?php include ('config/app.php'); 
include "include/ad_header.php"

?>


<body style="background-image: url(img/logo.png);">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" > 
                            <div class="col-lg-6 d-none d-lg-block " style="background-image: url(img/logo.png);background-repeat: repeat-y;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Resset Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your Confirmation Code  below
                                            and to reset your password!</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="email"
                                                placeholder="Enter Your Confirmation Code">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="newPassword" aria-describedby="emailHelp" name="password"
                                                placeholder="Enter New Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="repeatPassword" aria-describedby="emailHelp" name="rePassword"
                                                placeholder="Repeat Password">
                                        </div>

                                        <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-user btn-block"  id="resetPasswordId" name="resetPassword"
                                        >Reset Password </button>
                                </div>
                                      <!--  <a href="#" name="resetPassword" class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                        </a>-->
                                    </form>
                                    <hr>
                                   
                                    <div class="text-center">
                                        <a class="medium" style="color:green;" href="<?= base_url('ad_login.php') ?>">Already have an account? Login!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="medium" href="<?= base_url('ad_register.php') ?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php include "include/ad_footer.php";
?>
