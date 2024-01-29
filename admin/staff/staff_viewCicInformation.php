<?php 
 include ('config/app.php'); 
include_once('controllers/staff_AuthenticationController.php');
include_once('controllers/staff_cicInfoController.php');
$data=$authenticated-> authAdminDetail();


include "include/staff_header.php";

include "include/staff_sidebar.php";
include "include/staff_banner.php";


?>
 
 <div class="container-fluid">

<!-- Page Heading -->
<!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>-->
<?php  include('include/staff_message.php'); ?>
<!-- Content Row -->
<div class="row">



    <div class="container">
        <?php
        $cicInfo=new cicInfoController;
        $result=$cicInfo->Index();
        if($result)
        {
        foreach($result as $row )
        {
        ?>
            <div class="box">
                <span><form action="codes/staff_cicinfo_code.php" method="POST">
                    <button type="submit" name="deleteCicInfo" value="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
                </form></span>
                <img src="uploaded/images/cicImages/<?= $row['img_url'] ?>"> <span></span>


            </div>
            <?php
        }

        } else
        {
            echo " <h4 style='color:indianred;' >No Records Found  !!! Try Uploading CIC's Pictures</h4>";
        }
        ?>

           <!-- <div class="box">
            <img src="https://source.unsplash.com/1000x802">
            <span>Image</span>
        </div>
        <div class="box">
            <img src="https://source.unsplash.com/1000x804">
            <span>Hover</span>
        </div>
        <div class="box">
            <img src="https://source.unsplash.com/1000x806">
            <span>Effect</span>
        </div>
        <div class="box">
            <img src="https://source.unsplash.com/1000x806">
            <span>Effect</span>
        </div>-->


    </div>





</div>


</div>
<!-- /.container-fluid -->
<style>
    .container {
        display: flex;
        width: 100%;
        /* padding: 4% 2%;
        box-sizing: border-box;
        height: 100vh;*/
    }

    .box {
        flex: 1;
        overflow: hidden;
        transition: .5s;
        margin: 0 2%;
        box-shadow: 0 20px 30px rgba(0,0,0,.1);
        line-height: 0;
    }

    .box > img {
        width: 200%;
        height: calc(100% - 10vh);
        object-fit: cover;
        transition: .5s;
    }

    .box > span {
        font-size: 3.8vh;
        display: block;
        text-align: center;
        height: 10vh;
        line-height: 2.6;
    }

    .box:hover { flex: 1 1 50%; }
    .box:hover > img {
        width: 100%;
        height: 100%;
    }

</style>
</div>
<!-- End of Main Content -->

<?php
            include "include/staff_footer.php";


            ?>

  
   





</div>







