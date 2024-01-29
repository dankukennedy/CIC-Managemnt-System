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
      <h5 style="color:white ;">Add Records</h5>
     </div>
       <div class="card-body">
       <form action="codes/report_code.php" method="POST">

         <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="text" name="email" placeholder="Enter Your Email" class="form-control"/>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
        <select name="reportType" class="form-control " id="reportId"  required>
        <option value="reportType"   selected>Select Report Type</option>
        <option value="Monthly" >Monthly</option>
         <option value="Quartally" >Quartally</option>
         <option value="Annual" >Annual</option>
         <option value="Others" >Others</option>
                                                   
         </select>
        </div>
       </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="hidden" name="cicName" value="<?=$data['cicName'];  ?> "  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">          
          <input type="hidden" name="region"  value="<?=$data['region'];  ?> " class="form-control"  />
        </div>
        </div>
        
     
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="text" name="gps" placeholder="Enter GPS" class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="text" name="managersName" placeholder="Managers/Manageress Name" class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
             <input type="number" name="totalFemale" placeholder="Enter Total Female Number "  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">      
          <input type="number" name="totalMale" placeholder="Enter Total Male Number " class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
         <input type="number" name="totalFemaleArt" placeholder="Enter Total Female Artisan Number "  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="number" name="totalMaleArt"  placeholder="Enter Total Male Artisan Number "  class="form-control"/>
        </div>
        </div>

        
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="number" name="totalStudent" placeholder="Enter Total Student"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="number" name="overallAttend"  placeholder="Enter Overall Attendence" class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
        <select name="internetType" class="form-control " id="internetId"  required>
        <option value="internetType"   selected>Internet Type</option>
        <option value="VSAT-DISZENGOFF" >VSAT-DISZENGOFF</option>
         <option value="TURBO NET-MTN" >TURBO NET-MTN</option>
         <option value="BROADBAND-VODAFONE" >BROADBAND-VODAFONE</option>
         <option value="BROADBAND-AIRTELTIGO" >BROADBAND-AIRTELTIGO</option>
         <option value="OTHERS" >OTHERS</option>
         <option value="NONE" >NONE</option>
                                                   
         </select>
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
        <select name="internetSpeed" class="form-control " id="internetSpeedId"  required>
        <option value="internetSpeed"   selected>Internet Speed</option>
        <option value="FAST" >FAST</option>
         <option value="NORMAL" >NORMAL</option>
         <option value="SLOW" >SLOW</option>
         <option value="BAD" >BAD</option>
                                                           
         </select>
        </div>
       
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea class="form-control"  name="challenges" rows="4" cols="40" required>Write The Challenges Here 
                                        
         </textarea>   
                                           
         </select>
        </div>
       
        
        <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea  class="form-control"  name="recommendation" rows="4" cols="40" required >Write The Recomendation Here
                                        
        </textarea>
        </div>

        </div>

        <div class="mb-3">          
          <button type="submit" name="save_report" class="btn btn-success">Save Report </button>
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