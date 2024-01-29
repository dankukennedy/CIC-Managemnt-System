<?php include ('config/app.php'); 

$auth->isLoggedIn();
include "include/staff_header.php";

?>

<body style="background-image: url(img/logo.png);">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
        <form> <a class="medium" href="<?= base_url('../../index.php') ;?> " style="text-decoration:none;"><button type="submit" class="btn btn-success" >Back To Home</button></a>
         </form>
        
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" >
                            <div class="col-lg-6 d-none d-lg-block " style="background-image: url(img/logo.png);background-repeat: repeat-y;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Administrator  Welcome Back!</h1>
                                        <h1 class="h4 text-gray-900 mb-4"><?php include('include/staff_message.php'); ?></h1>
                                    </div>
                                    <form class="user"action="" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="email"
                                                placeholder="Enter Email Address..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Password" required>
                                        </div>
                                       <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>-->
                                        
                                        <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-user btn-block"  id="loginId" name="login"
                                        >Login Here</button>
                                </div>
                                       <!-- <a href="#" name="login" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>-->
                                       
                                        
                                    </form>
                                    <hr>
                                   <!-- <div class="text-center">
                                        <a class="medium" style="color:orange;" href="<?= base_url('staff_forgetPassword.php'); ?>">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="medium" href="<?= base_url('staff_register.php') ;?>">Create an Account!</a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


<?php include "include/staff_footer.php";

?>
