<?php 
 include ('config/app.php'); 
 include_once('controllers/paymentController.php');
include_once('controllers/AuthenticationController.php');
$data=$authenticated-> authManagerDetail();


include "include/header.php";

include "include/sidebar.php";
include "include/banner.php";


?>


<script type="text/javascript">
     
  var account ={
       Bank:["AmalBank","Barclays Bank","CAL Bank","Ecobank Ghana","Fidelity Bank (Ghana)","Bank of Ghana","First Atlantic Merchant Bank Ghana (FAMBG)","Ghana Commercial Bank","Guaranty Trust Bank (Ghana)","HFC Bank","Intercontinental Bank (Ghana)","Northern City Bank (Ghana)","International Commercial Bank","Merchant Bank Ghana Limited (MBG)","National Investment Bank","Prudential Bank Limited","Société Générale Social Security Bank (SG-SSB)","Stanbic Bank","Standard Chartered Bank","Trust Bank","UniBank","United Bank for Africa","UT Bank","Zenith Bank"],
      Momo:["MTN","AirtelTigo","Vodafone"],
        Others:["E-zwitch","G-Money","PayPal"]
       
   }

   function makeSubmenu(value) {
        if (value.length == 0) document.getElementById("categorySelect").innerHTML = "<option></option>";
        else {
            var accountOptions = "";
            for (categoryId in account[value]) {
                accountOptions += "<option>" + account[value][categoryId] + "</option>";
            }
            document.getElementById("categorySelect").innerHTML = accountOptions;
        }
    }

    function displaySelected() {
        var country = document.getElementById("category").value;
        var city = document.getElementById("categorySelect").value;
        alert(country + "\n" + city);
    }

    function resetSelection() {
        document.getElementById("category").selectedIndex = 0;
        document.getElementById("categorySelect").selectedIndex = 0;
    }

</script>


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
     <div class="card-header" style="background-color:red ;">
      <h5 style="color:white ;">Add Payment Details </h5>
     </div>
       <div class="card-body">
       <form action="codes/payment_code.php" method="POST">

         <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="hidden" name="region"  value="<?=$data['region'];  ?> " class="form-control"  />
        </div>
        
        
        <div class="col-sm-6 mb-3 mb-sm-0">          
        <input type="hidden" name="cicName" value="<?=$data['cicName'];  ?> "  class="form-control" />
        </div>
        
       </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" name="email" placeholder="Enter Your Email" class="form-control"/>
         
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" name="fName" placeholder=" Enter Your Full Name"  class="form-control" />
        </div>
        </div>
        
     
        <div class="form-group row">
           <div class="col-sm-6 mb-3 mb-sm-0">
                                    
            <select id="category" class="form-control" name="account" size="1" onchange="makeSubmenu(this.value)" required>
                                                <option value="" disabled selected>Select Payment Account</option>
                                                <option>Bank</option>
                                                <option>Momo</option>
                                                <option>Others</option>
                                                

                                            </select>
                                    </div>
                                    <div class="col-sm-6">                            
                                        <select id="categorySelect" class="form-control" name="subDivision" size="1" required>
                                            <option value="" disabled selected>Bank Account / Momo Account/ Other Accounts</option>
                                            <option></option>
                                        </select>
                                        <!-- <button onclick="displaySelected()">show selected</button>-->
                                    </div>
                                </div>

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
             <input type="number" name="accountNumber" placeholder="Enter Account Number / MoMo Number"  class="form-control" required />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">      
          <input type="text" name="accountName" placeholder="Enter Account Name" class="form-control" required/>
        </div>
        </div>

        
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
             <input type="text" name="bankBranch" placeholder="Enter Bank Branch / Optional For Momo Users"  class="form-control" />
        </div>
       
        <div class="col-sm-6 mb-3 mb-sm-0">      
          <input type="number" name="number" placeholder="Enter Phone Number " class="form-control" required/>
        </div>
        </div>
       
       

      
        <div class="mb-3">          
          <button type="submit" name="save_account" class="btn btn-danger">Add Payment Account </button>
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