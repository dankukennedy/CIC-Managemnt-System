
<?php 
include('config/app.php');
include_once('controllers/staff_AuthenticationController.php');
$authenticated=new staffAuthenticationController;
$data=$authenticated-> authAdminDetail();


include ('include/staff_header.php');
include ('include/staff_sidebar.php');
include ('include/staff_banner.php');


?>

<?php 


      include('include/staff_message.php');
           
            include ('include/staff_navhome.php');

  ?>


            <?php
           include ('include/staff_footer.php');


            ?>
