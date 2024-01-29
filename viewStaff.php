<?php
include('config/app.php');

include_once('controllers/AuthenticationController.php');
include_once('controllers/staffController.php');
$authenticated=new AuthenticationController;
$data= $authenticated->authManagerDetail();


include ('include/header.php');
include ('include/sidebar.php');
include ('include/banner.php');



?>
<style>
    div.gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 180px;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }
</style>

<div class="container-fluid">

    <!-- Page Heading -->
    <!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>-->
    <?php  include('include/message.php'); ?>
    <!-- Content Row -->
    <div class="row">


        <?php
        $cicName= $data['cicName'];
        $staff_Qry="SELECT * FROM managers WHERE cicName='$cicName'";
        $result=$db->conn->query($staff_Qry);
        if(!$result)
        {
            echo "Something Went Wrong";
        } else
        {
            while ($row=$result->fetch_assoc())
            {

                echo' <div class="gallery">
        
                  <a >
            <img src="uploaded/images/profiles/'.$row["profile_img"] .' " alt="Cinque Terre" width="100" height="100">
                     </a>
                        <div class="desc"> <p style="color: #0a53be">Name: <i  style="color:#DB0630">'.$row["fName"] .' '. $row["otherName"].' '.$row["lastName"].'</i> <br> CIC Name:<i  style="color:#DB0630"> '.$row["cicName"].'</i>  </p></div> 


           </div>';
                   }
        }

        ?>







    </div>








</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include "include/footer.php";


?>


