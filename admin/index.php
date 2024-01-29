
<?php 
include('config/app.php');

include_once('controllers/ad_AuthenticationController.php');
$authenticated=new adAuthenticationController;
$data=$authenticated-> authZonalDetail();


include ('include/ad_header.php');
include ('include/ad_sidebar.php');
include ('include/ad_banner.php');


?>

<?php 


      include('include/ad_message.php');
           
            include ('include/ad_navhome.php');

  ?>


            <?php
           include ('include/ad_footer.php');


            ?>
