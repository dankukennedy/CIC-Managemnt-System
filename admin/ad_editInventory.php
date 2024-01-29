<?php 
 include ('config/app.php');  
include_once('controllers/ad_InventoryController.php');
include_once('controllers/ad_AuthenticationController.php');
$data=$authenticated-> authZonalDetail();

include "include/ad_header.php";

include "include/ad_sidebar.php";
include "include/ad_banner.php";


?>


<div class="container-fluid">

<!-- Page Heading -->
<!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>-->
<?php // include('include/message.php'); ?>
<!-- Content Row -->
<div class="row">

  <div class="col-md-12">
 <h5 > <i style="color:green; font:200"><?php  include('include/ad_message.php'); ?></i></h5>
    <div class="card">
     <div class="card-header" style="background-color: #3b5998 ;">
      <h5 style="color:white ;">Update Inventory</h5>
     </div>
       <div class="card-body">
       <?php 
        if(isset($_GET['id']))
        {
            $inventory_id=validateInput($db->conn,$_GET['id']);
             $inventory=new InventoryController; 
             $result=$inventory->edit($inventory_id);  
             if($result)
             {  
                  ?>

       <form action="codes/ad_inventory_code.php" method="POST">

       <input type="hidden"  name="inventory_id" value="<?=$result['id']; ?>" />
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <!--<label for="">Place of the Training</label>-->
          <input type="hidden" name="cicName" value="<?=$data['cicName'];  ?> "  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">          
          <!--<label for="">Training Region</label>-->
          <input type="hidden" name="region"  value="<?=$data['region'];  ?> " class="form-control"  />
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Set of Computers</label>
          <input type="number" name="computers"  value="<?=$result['computers'];  ?>" class="form-control"/>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of UPS</label>
          <input type="number" name="ups" value="<?=$result['ups'];  ?>"  class="form-control"/>
        </div>
       </div>

        
     
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Air Conditioner</label>
          <input type="number" name="airConditioner"  value="<?=$result['airConditioner'];  ?>"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Scanner</label>
          <input type="number" name="scanner" value="<?=$result['scanner'];  ?>"  class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Fan</label>
          <input type="number" name="fan" value="<?=$result['fan'];  ?>"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Ofice Desk</label>
          <input type="number" name="desk" value="<?=$result['desk'];  ?>"   class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Office Chairs</label>
          <input type="number" name="chair" value="<?=$result['chair'];  ?>"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Projector</label>
          <input type="number" name="projector" value="<?=$result['projector'];  ?>"   class="form-control"/>
        </div>
        </div>

        
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Printer</label>
          <input type="number" name="printer" value="<?=$result['printer'];  ?>"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Router</label>
          <input type="number" name="router" value="<?=$result['router'];  ?>"   class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Extention Board</label>
          <input type="number" name="extensionBoard"  value="<?=$result['extensionBoard'];  ?>"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Photocoppier </label>
          <input type="number" name="photocoppier" value="<?=$result['photocoppier'];  ?>"  class="form-control" />
        </div>
       
        </div>
        <div class="form-group row">
        <textarea  class="form-control" value="<?=$result['others'];  ?>"  name="others" rows="5" cols="10" required> <?=$result['others'];  ?> 
                                        
         </textarea>
        </div>

        

        <div class="mb-3">          
          <button type="submit" name="update_inventory" class="btn btn-outline-info">Update Inventory</button>
        </div>

       </form>
       <?php
             }   
             else
             {
              echo "<h4>No Record Found</h4>";
             }

         }  else
          {
            echo "<h4> Something Went Wrong</h4>";
          }
        ?>

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
3