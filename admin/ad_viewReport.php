<?php 
 include ('config/app.php'); 

 include_once('controllers/ad_ReportController.php');
include_once('controllers/ad_AuthenticationController.php');
$data=$authenticated-> authZonalDetail();


include "include/ad_header.php";

include "include/ad_sidebar.php";
include "include/ad_banner.php";


?>
 
 <div class="container-fluid ">

<!-- Page Heading -->
<!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>-->



<!-- Content Row -->
<div class="row">

  <div class="col-md-12">
     <h5 > <i style="color:green; font:200"><?php  include('include/ad_message.php'); ?></i></h5>
    <div class="card">
     <div class="card-header" style="background-color: #3b5998 ;">
      <h5 style="color:white ;">View Reports</h5>
     </div>
       <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                       <th>#</th> 
                       <th>Email</th>
                       <th>Report Type</th>
                       <th>Place</th>
                       <th>region</th>
                       <th>GPS</th>
                       <th>Manager</th>
                       <th>Females</th>
                       <th>Males</th>                     
                       <th>Female Artisan</th>
                       <th>Students</th>
                       <th>Male Artisan</th>
                       <th>Attendance</th>
                       <th>Internet</th>
                       <th>internet Speed</th>
                       <th>Challenges</th>  
                       <th>Recommendation</th>  
                       <th>Edit</th>
                       <th>Deleted</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    $report=new ReportController;
                     $result=$report->Index();
                     if($result)
                     {
                        foreach($result as $row )
                        {
                                ?>
                             <tr id="<?= $row['id'] ?>">
                       <td><?php echo $i++; ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['reportType'] ?></td>
                        <td><?= $row['cicName'] ?></td>                      
                        <td><?= $row['region'] ?></td>
                        <td><?= $row['gps'] ?></td>
                        <td><?= $row['managersName'] ?></td>
                        <td><?= $row['totalFemale'] ?></td>
                        <td><?= $row['totalMale'] ?></td>
                        <td><?= $row['totalFemaleArt'] ?></td>
                        <td><?= $row['totalMaleArt'] ?></td>
                        <td><?= $row['totalStudent'] ?></td>
                        <td><?= $row['overallAttend'] ?></td>
                        <td><?= $row['internetType'] ?></td>
                        <td><?= $row['internetSpeed'] ?></td>
                        <td ><?= $row['challenges'] ?></td>
                        <td ><?= $row['recommendation'] ?></td>
                        <td>
                             <a href="ad_editReport.php?id=<?= $row['id'] ?>" class="btn btn-success">Edit</a></td>
                        <td>
                           <form action="codes/ad_report_code.php" method="POST">
                           <button type="submit" name="deleteReport" value="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
                           </form> 
                        </td>
                        
                    </tr>
                                <?php 
                        }

                     } else
                       { 
                        echo " No Records Found ";
                       }
                     ?>
                   
                </tbody>
            </table>
          </div>
        </div>

    

   </div>
 </div>

    




</div>








</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
            include "include/ad_footer.php";


            ?>

  
   










