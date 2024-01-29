<?php 
 include ('config/app.php'); 
include_once('controllers/AuthenticationController.php');
$data=$authenticated-> authManagerDetail();


include "include/header.php";

include "include/sidebar.php";
include "include/banner.php";


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
 <h5 > <i style="color:green; font:200"><?php  include('include/message.php'); ?></i></h5>
    <div class="card">
     <div class="card-header" style="background-color:green ;">
      <h5 style="color:white ;">Add Training</h5>
     </div>
       <div class="card-body">
       <form action="codes/training_code.php" method="POST">

         <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Training Name</label>
          <input type="text" name="trainingName" class="form-control"/>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
        <label for="">Training type</label>
        <select name="trainingType" class="form-control " id="trainingId"  required>
        <option value="Training Type"   disabled selected>Select Training Type</option>
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
         <!--<label for="">Place of the Training</label>-->
          <input type="hidden" name="trainingPlace" value="<?=$data['cicName'];  ?> "  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">          
         <!-- <label for="">Training Region</label>-->
          <input type="hidden" name="trainingRegion"  value="<?=$data['region'];  ?> " class="form-control"  />
        </div>
        </div>
        
     
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Female Participant</label>
          <input type="number" name="femaleTotalNo"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Male Participant</label>
          <input type="number" name="maleTotalNo"  class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Women Entrapreneur</label>
          <input type="number" name="womenTotalNo"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Student</label>
          <input type="number" name="studentTotalNo"  class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of School Dropout</label>
          <input type="number" name="dropoutTotalNo"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Head Poter</label>
          <input type="number" name="poterTotalNo"  class="form-control"/>
        </div>
        </div>

        
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of Youth</label>
          <input type="number" name="youthTotalNo"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number of People With Disability</label>
          <input type="number" name="pwdTotalNo"  class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Start Date of the Training</label>
          <input type="date" name="startDate"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">End Date of the Training </label>
          <input type="date" name="endDate"  class="form-control" />
        </div>
       
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
        <label for="">Badges </label>
        <select name="badges" class="form-control " id="trainingId"  required>
        <option value="Badges"   disabled selected>Select Badges</option>
        <option value="First Badge" >First Bage</option>
         <option value="Second Badge" >Second Badge</option>
         <option value="Third Badges" >Third Badge</option>
         <option value="Fouth Badge" >Fouth Badge</option>        
                                           
         </select>
        </div>
       
        
        <div class="col-sm-6 mb-3 mb-sm-0">
          <label for="">Total Number Of Participant</label>
          <input type="number" name="paticipantTotalNo"  class="form-control"/>
        </div>

        </div>

        <div class="mb-3">          
          <button type="submit" name="save_training" class="btn btn-success">Save Training</button>
        </div>

       </form>

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
3