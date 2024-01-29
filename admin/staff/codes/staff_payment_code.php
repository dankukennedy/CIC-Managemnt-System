<?php 
include('../config/ad_application.php');
include_once('../controllers/staff_paymentController.php');

if(isset($_POST['deletePayment'])) 
{
   $id=validateInput($db->conn,$_POST['deletePayment'] );
   $payment=new PaymentController;
   $result=$payment->delete( $id);
   if($result)
   {
      redirect("payment Deleted Successfully","staff_payment.php");
   }
   else
   {
      redirect("Something Went Wrong","staff_payment.php");
    }


} 


if(isset($_POST['save_editAccount']))
  {
    $id=validateInput($db->conn,$_POST['payment_id']);

    $inputData=[
        'region'=>validateInput($db->conn,$_POST['region']),
         'cicName'=>validateInput($db->conn,$_POST['cicName']),
        'email'=>validateInput($db->conn,$_POST['email']),
        'fName'=>validateInput($db->conn,$_POST['fName']),
        'account'=>validateInput($db->conn,$_POST['account']),
        'subDivision'=>validateInput($db->conn,$_POST['subDivision']),
        'accountNumber'=>validateInput($db->conn,$_POST['accountNumber']),
        'accountName'=>validateInput($db->conn,$_POST['accountName']),
        'bankBranch'=>validateInput($db->conn,$_POST['bankBranch']),
        'number'=>validateInput($db->conn,$_POST['number'])
        
        
    ];
  $payment=new PaymentController;
  $result=$payment->update($inputData,$id);
if($result)
{
   redirect("Payment Updated Successfully","staff_payment.php");
}
  else
  {
   redirect("Something Went Wrong, Payment Cannot Be Updated","staff_editPayment.php");
  }


  }


if(isset($_POST['save_account'])){

    $inputData=[
        'region'=>validateInput($db->conn,$_POST['region']),
         'cicName'=>validateInput($db->conn,$_POST['cicName']),
        'email'=>validateInput($db->conn,$_POST['email']),
        'fName'=>validateInput($db->conn,$_POST['fName']),
        'account'=>validateInput($db->conn,$_POST['account']),
        'SubDivision'=>validateInput($db->conn,$_POST['subDivision']),
        'accountNumber'=>validateInput($db->conn,$_POST['accountNumber']),
        'accountName'=>validateInput($db->conn,$_POST['accountName']),
        'bankBranch'=>validateInput($db->conn,$_POST['bankBranch']),
        'number'=>validateInput($db->conn,$_POST['number'])
        
        
    ];

$payment=new PaymentController;
$result=$payment->createPayment($inputData);
 if($result)
 {
    redirect(" <h4 style='color:green; font:200'>Your Payment Details Added Successfully</h4>","staff_payment.php");
 } else
 {
    redirect("Something Went Wrong, Your Payment Details Not Added Successfully","staff_addPayment.php");
 }

}

?>