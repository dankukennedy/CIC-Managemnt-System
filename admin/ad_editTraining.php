<?php 
 include ('config/app.php'); 
 include_once('controllers/ad_TrainingController.php');
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
      <h5 style="color:white ;" >Edit Training</h5>
     </div>
       <div class="card-body">
        <?php 
        if(isset($_GET['id']))
        {
            $training_id=validateInput($db->conn,$_GET['id']);
             $training=new TrainingController;
             $result=$training->edit($training_id);  
             if($result)
             {  
                  ?>


       <form action="codes/ad_training_code.php" method="POST">
      <input type="hidden"  name="training_id" value="<?=$result['id']; ?>" />
         <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Training Name</label>
          <input type="text" name="trainingName" value="<?=$result['trainingName'];  ?> " class="form-control"/>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
        <label for="">Training type</label>
        <select name="trainingType" class="form-control " id="trainingId"  required>
        <option value="<?=$result['trainingType'];  ?> "    selected><?=$result['trainingType'];  ?> </option>
        <option value="DTC Training" >DTC Training</option>
         <option value="Computer Basic" >Computer Basic</option>
         <option value="MS Office Suite" >MS Office Suite</option>
         <option value="Advance IT Training" >Advance IT Training</option>
         <option value="Graphic Design" >Graphic Design</option>
         <option value="Video Editing" >Video Editing</option>
         <option value="Others" >Others</option>
                                           
         </select>
        </div>
       </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Place of the Training</label>
          <input type="text" name="trainingPlace" value="<?=$result['trainingPlace'];  ?> "  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">          
          <label for="">Training Region</label>
          <input type="text" name="trainingRegion"  value="<?=$result['trainingRegion'];  ?> " class="form-control"  />
        </div>
        </div>
        
     
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Female Participant</label>
          <input type="number" name="femaleTotalNo" value="<?=$result['femaleTotalNo'];  ?>"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Male Participant</label>
          <input type="number" name="maleTotalNo"  value="<?=$result['maleTotalNo'];  ?>"  class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Women Entrapreneur</label>
          <input type="number" name="womenTotalNo"  value="<?=$result['womenTotalNo'];  ?>" class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Student</label>
          <input type="number" name="studentTotalNo"  value="<?=$result['studentTotalNo'];  ?>" class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of School Dropout</label>
          <input type="number" name="dropoutTotalNo" value="<?=$result['dropoutTotalNo'];  ?>" class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Head Poter</label>
          <input type="number" name="poterTotalNo" value="<?=$result['poterTotalNo'];  ?>"  class="form-control"/>
        </div>
        </div>

        
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Youth</label>
          <input type="number" name="youthTotalNo" value="<?=$result['youthTotalNo'];  ?>"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of People With Disability</label>
          <input type="number" name="pwdTotalNo"  value="<?=$result['pwdTotalNo'];  ?>" class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Start Date of the Training</label>
          <input type="date" name="startDate" value="<?=$result['startDate'];  ?>" class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">End Date of the Training </label>
          <input type="date" name="endDate" value="<?=$result['endDate'];  ?>" class="form-control" />
        </div>
       
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
        <label for="">Badges </label>
        <select name="badges" class="form-control " id="trainingId"  required>
        <option value="<?=$result['badges'];  ?>"  selected><?=$result['badges'];  ?></option>
        <option value="First Badge" >First Bage</option>
         <option value="Second Badge" >Second Badge</option>
         <option value="Third Badges" >Third Badge</option>
         <option value="Fouth Badge" >Fouth Badge</option>        
                                           
         </select>
        </div>
       
        
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number Of Participant</label>
          <input type="number" name="paticipantTotalNo"  value="<?=$result['paticipantTotalNo'];  ?>"  class="form-control"/>
        </div>

        </div>

        <div class="mb-3">          
          <button type="submit" name="update_training" class="btn btn-primary">Update Training</button>
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