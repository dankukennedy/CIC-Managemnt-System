<?php 
 include ('config/app.php'); 
 include_once('controllers/ActivityController.php');
include_once('controllers/AuthenticationController.php');

$data=$authenticated-> authManagerDetail();


include "include/header.php";

include "include/sidebar.php";
include "include/banner.php";


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
 <h5 > <i style="color:green; font:200"><?php  include('include/message.php'); ?></i></h5>
    <div class="card">
     <div class="card-header" style="background-color:green;">
      <h5 style="color:white ;">View Activities</h5>
     </div>
       <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                       <th>#</th> 
                       <th>Region</th>
                       <th>CIC Name</th>
                       <th>Description</th>
                        <th>Time Created</th>
                        <th>Edit</th>
                       <th>Deleted</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    $activity=new ActivityController;
                     $result=$activity->Index();
                     if($result)
                     {
                        foreach($result as $row )
                        {
                                ?>
                             <tr id="<?= $row['id'] ?>">
                       <td><?php echo $i++; ?></td>
                        <td><?= $row['region'] ?></td>
                        <td><?= $row['cicName'] ?></td>                      
                        <td><?= $row['description'] ?></td>
                         <td><?= $row['created_at'] ?></td>
                        
                        <td>
                             <a href="editActivity.php?id=<?= $row['id'] ?>" class="btn btn-success">Edit</a></td>
                        <td>
                           <form action="codes/activity_code.php" method="POST">
                           <button type="submit" name="deleteActivity" value="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
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
            include "include/footer.php";


            ?>

  
   










