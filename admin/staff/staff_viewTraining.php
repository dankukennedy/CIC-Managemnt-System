<?php 
 include ('config/app.php'); 

include_once('controllers/staff_TrainingController.php');
include_once('controllers/staff_AuthenticationController.php');

$data=$authenticated-> authAdminDetail();


include "include/staff_header.php";

include "include/staff_sidebar.php";
include "include/staff_banner.php";


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
 <h5 > <i style="color:green; font:200"><?php  include('include/staff_message.php'); ?></i></h5>
    <div class="card">
     <div class="card-header" style="background-color: #3b5998 ;">
      <h5 style="color:white ;">View Training</h5>
     </div>
       <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                       <th>#</th> 
                       <th>Training Name</th>
                       <th>Type</th>
                       <th>Region</th>
                       <th>Place</th>
                       <th>Trainees No</th>
                       <th>Female</th>
                       <th>Male</th>
                       <th>Women</th>
                       <th>Student</th>
                       <th>Head Poter</th>
                       <th>Youth</th>
                       <th>Dropout</th>
                       <th>Disability</th>
                       <th>startDate</th>
                       <th>EndDate</th>
                       <th>Badges</th>  
                       <th>Edit</th>
                       <th>Deleted</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    $training=new TrainingController;
                     $result=$training->Index();
                     if($result)
                     {
                        foreach($result as $row )
                        {
                                ?>
                             <tr id="<?= $row['id'] ?>">
                       <td> <?php echo $i++; ?></td>
                        <td><?= $row['trainingName'] ?></td>
                        <td><?= $row['trainingType'] ?></td>
                        <td><?= $row['trainingRegion'] ?></td>
                        <td><?= $row['trainingPlace'] ?></td>                      
                        <td><?= $row['paticipantTotalNo'] ?></td>
                        <td><?= $row['femaleTotalNo'] ?></td>
                        <td><?= $row['maleTotalNo'] ?></td>
                        <td><?= $row['womenTotalNo'] ?></td>
                        <td><?= $row['studentTotalNo'] ?></td>
                        <td><?= $row['dropoutTotalNo'] ?></td>
                        <td><?= $row['poterTotalNo'] ?></td>
                        <td><?= $row['youthTotalNo'] ?></td>
                        <td><?= $row['pwdTotalNo'] ?></td>
                        <td><?= $row['startDate'] ?></td>
                        <td><?= $row['endDate'] ?></td>
                        <td ><?= $row['badges'] ?></td>
                        <td>
                             <a href="staff_editTraining.php?id=<?= $row['id'] ?>" class="btn btn-success">Edit</a></td>
                        <td>
                           <form action="codes/staff_training_code.php" method="POST">
                           <button type="submit" name="deleteTraining" value="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
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
            include "include/staff_footer.php";


            ?>

  
   










