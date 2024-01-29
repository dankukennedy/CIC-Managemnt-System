<?php 
 include ('config/app.php'); 
 include_once('controllers/staff_ReportController.php');
include_once('controllers/staff_AuthenticationController.php');
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
<?php // include('include/message.php'); ?>
<!-- Content Row -->
<div class="row">

  <div class="col-md-12">
 <h5 > <i style="color:green; font:200"><?php  include('include/staff_message.php'); ?></i></h5>
    <div class="card">
     <div class="card-header" style="background-color: #3b5998 ;">
      <h5 style="color:white ;">Update Records</h5>
     </div>
       <div class="card-body">
       <?php 
        if(isset($_GET['id']))
        {
            $report_id=validateInput($db->conn,$_GET['id']);
             $report=new ReportController;
             $result=$report->edit($report_id);  
             if($result)
             {  
                  ?>

       <form action="codes/staff_report_code.php" method="POST">
       <input type="hidden"  name="report_id" value="<?=$result['id']; ?>" />
         <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="text" name="email" value="<?=$result['email']; ?>" class="form-control"/>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
        <select name="reportType" class="form-control " id="reportId"  required>
        <option value="<?=$result['reportType']; ?>"   selected><?=$result['reportType']; ?></option>
        <option value="Monthly" >Monthly</option>
         <option value="Quartally" >Quartally</option>
         <option value="Annual" >Annual</option>
         <option value="Others" >Others</option>
                                                   
         </select>
        </div>
       </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="text" name="cicName" value="<?=$data['cicName'];  ?> "  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">          
          <input type="text" name="region"  value="<?=$data['region'];  ?> " class="form-control"  />
        </div>
        </div>
        
     
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="text" name="gps" value="<?=$result['gps']; ?>" placeholder="Please Enter GPS" class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="text" name="managersName"value="<?=$result['managersName']; ?>" placeholder="Please Enter Manager's Name"  class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
             <input type="number" name="totalFemale" value="<?=$result['totalFemale']; ?>" placeholder="Please Enter Total Female Number"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">      
          <input type="number" name="totalMale" value="<?=$result['totalMale']; ?>" placeholder="Please Enter Total Male Number" class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
         <input type="number" name="totalFemaleArt" value="<?=$result['totalFemaleArt']; ?>" placeholder="Please Enter Total Female Artisan's Number"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="number" name="totalMaleArt"  value="<?=$result['totalMaleArt']; ?>" placeholder="Please Enter Total Male Artisans Number"  class="form-control"/>
        </div>
        </div>

        
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="number" name="totalStudent" value="<?=$result['totalStudent']; ?>"  placeholder="Please Enter Total Student Number"class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="number" name="overallAttend"  value="<?=$result['overallAttend']; ?>" placeholder="Please Enter Total Overall Number" class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
        <select name="internetType" class="form-control " id="internetId"  required>
        <option value="<?=$result['internetType']; ?>"   selected><?=$result['internetType']; ?></option>
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
        <option value="<?=$result['internetSpeed']; ?>"   selected><?=$result['internetSpeed']; ?> </option>
        <option value="FAST" >FAST</option>
         <option value="NORMAL" >NORMAL</option>
         <option value="SLOW" >SLOW</option>
         <option value="BAD" >BAD</option>
                                                           
         </select>
        </div>
       
        </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea class="form-control"   name="challenges" rows="10" cols="70" required placeholder="Write The Challenges Here"> <?=$result['challenges']; ?>
                                        
         </textarea>   
                                           
         </select>
        </div>
       
        
        <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea  class="form-control"  name="recommendation" rows="10" cols="70" required > <?=$result['recommendation']; ?>
                                        
        </textarea>
        </div>

        </div>

        <div class="mb-3">          
          <button type="submit" name="update_report" class="btn btn-success">Update Report </button>
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
            include "include/staff_footer.php";


            ?>
