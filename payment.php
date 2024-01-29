<?php 
 include ('config/app.php'); 
 include_once('controllers/paymentController.php');
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

  
<div class="col-lg-6">
<!-- Dropdown Card Example -->
<div class="card shadow mb-4">
<h5 > <i style="color:green; font:200"><?php  include('include/message.php'); ?></i></h5>
    <!-- Card Header - Dropdown -->
    <div  class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">CIC Manager Account and Payment Details</h6>
        <div class="dropdown no-arrow">
          <form>
            <input type="hidden" value="<?= $row['id'] ?>" name="payment_id" >
          </form>
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Account Details</div>
                <a class="dropdown-item" href="addPayment.php">Add Account Details</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Delete </a>
            </div>
        </div>
    </div>
    <!-- Card Body -->
     <div class="card-body"> <?php 


                            $email= $data['email'];
                            $payment_Qry="SELECT * FROM payments WHERE email='$email' ";
                            $result=$db->conn->query($payment_Qry);
                            if($result)
                            {
                                while ($row=$result->fetch_assoc())
                                {
                             ?>
                           
                           <form action="codes/payment_code.php" method="POST">
                           <button type="submit" name="deletePayment" class="btn btn-danger" role="alert" value="<?= $row['id'] ?>">Delete Account Details</button>
                           </form> </a> <p class="alert alert-info" role="alert">You Can Make Changes To You Account Here !!!  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <a href="editPayment.php?id=<?= $row['id'] ?>" class="btn btn-warning"> Edit Account</a> </p>
                             <hr>

                             <p class="alert alert-success" role="alert">Full Name : <?= $row['fName'] ?>   &nbsp;&nbsp;&nbsp;
E-Mail : <?= $row['email'] ?><br>
Phone Number : <?= $row['number'] ?>&nbsp;&nbsp;&nbsp;
Account Type : <?= $row['account'] ?> Account<br>
Account Name : <?= $row['accountName'] ?>&nbsp;&nbsp;&nbsp;
Account Number : <?= $row['accountNumber'] ?><br>
Bank Type : <?= $row['subDivision'] ?>&nbsp;&nbsp;&nbsp;
Bank branch : <?= $row['bankBranch'] ?><br>
Phone Number : <?= $row['number'] ?>&nbsp;&nbsp;&nbsp;
Date Created : <?= $row['created_at'] ?><br><br>
CIC Region : <?= $row['region'] ?>&nbsp;&nbsp;&nbsp;
CIC Name : <?= $row['cicName'] ?><br></p>


<?php 
                        }

                     } else
                       { 
                        echo " No Records Found ";
                       }
                     ?>
     </div>
</div>



</div>

<div class="col-lg-6">



<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
        role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">How To Open a Bank Account</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
    <p class="alert alert-secondary" role="alert">    To open an account, you'll need to bring a government-issued ID, your identification number, and your physical and mailing address.
When deciding on an account, you'll want to read the disclosures so you can learn about any account fees or balance minimums.
You can decide what bank or account you want based on the features you're looking for, whether it's high-interest rates, low balance minimums, no ATM fees, or something else.
                      </p> </div>
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