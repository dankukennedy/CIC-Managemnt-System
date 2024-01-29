
<?php 
include('config/app.php');

include_once('controllers/AuthenticationController.php');
$authenticated=new AuthenticationController;
$data= $authenticated->authManagerDetail();


include ('include/header.php');
include ('include/sidebar.php');
include ('include/banner.php');


?>

<?php 


      include('include/message.php');
           
            include ('include/navhome.php');

  ?>


            <?php
           include ('include/footer.php');


            ?>
