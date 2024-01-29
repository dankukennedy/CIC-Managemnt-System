<?php 
 include ('config/app.php'); 

 include_once('controllers/InventoryController.php');
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
      <h5 style="color:white ;">View Inventory</h5>
     </div>
       <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                       <th>#</th> 
                       <th>Region</th>
                       <th>Place</th>
                       <th>Computers</th>
                       <th>UPS</th>
                       <th>Air Cobditioner</th>
                       <th>Scanner</th>
                       <th>Fan</th>
                       <th>Desk</th>                     
                       <th>Chair</th>
                       <th>Projector</th>
                       <th>Printer</th>
                       <th>Router</th>
                       <th>Photocoppier</th>
                       <th>Others</th>
                       
                       <th>Edit</th>
                       <th>Deleted</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    $inventory=new InventoryController;
                     $result=$inventory->Index();
                     if($result)
                     {
                        foreach($result as $row )
                        {
                                ?>
                             <tr id="<?= $row['id'] ?>">
                       <td><?php echo $i++; ?></td>
                        <td><?= $row['region'] ?></td>
                        <td><?= $row['cicName'] ?></td>
                        <td><?= $row['computers'] ?></td>                      
                        <td><?= $row['ups'] ?></td>
                        <td><?= $row['airConditioner'] ?></td>
                        <td><?= $row['scanner'] ?></td>
                        <td><?= $row['fan'] ?></td>
                        <td><?= $row['desk'] ?></td>
                        <td><?= $row['chair'] ?></td>
                        <td><?= $row['projector'] ?></td>
                        <td><?= $row['printer'] ?></td>
                        <td><?= $row['router'] ?></td>
                        <td><?= $row['photocoppier'] ?></td>
                        <td><?= $row['extensionBoard'] ?></td>
                        <td><?= $row['others'] ?></td>
                        
                        <td>
                             <a href="editInventory.php?id=<?= $row['id'] ?>" class="btn btn-success">Edit</a></td>
                        <td>
                           <form action="codes/inventory_code.php" method="POST">
                           <button type="submit" name="deleteInventory" value="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
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

  
   










