<?php 
include('../config/ad_application.php');
include_once('../controllers/staff_InventoryController.php');


if(isset($_POST['deleteInventory'])) 
{
   $id=validateInput($db->conn,$_POST['deleteInventory'] );
   $inventory=new InventoryController;
   $result=$inventory->delete( $id);
   if($result)
   {
      redirect("Report Deleted Successfully","staff_viewInventory.php");
   }
   else
   {
      redirect("Something Went Wrong","staff_viewInventory.php");
    }


} 


if(isset($_POST['update_inventory']))
  {
    $id=validateInput($db->conn,$_POST['inventory_id']);

    $inputData=[
        'region'=>validateInput($db->conn,$_POST['region']),
         'cicName'=>validateInput($db->conn,$_POST['cicName']),
        'computers'=>validateInput($db->conn,$_POST['computers']),
        'ups'=>validateInput($db->conn,$_POST['ups']),
        'airConditioner'=>validateInput($db->conn,$_POST['airConditioner']),
        'scanner'=>validateInput($db->conn,$_POST['scanner']),
        'fan'=>validateInput($db->conn,$_POST['fan']),
        'desk'=>validateInput($db->conn,$_POST['desk']),
        'chair'=>validateInput($db->conn,$_POST['chair']),
        'projector'=>validateInput($db->conn,$_POST['projector']),
        'printer'=>validateInput($db->conn,$_POST['printer']),
        'router'=>validateInput($db->conn,$_POST['router']),
        'photocoppier'=>validateInput($db->conn,$_POST['photocoppier']),       
        'extensionBoard'=>validateInput($db->conn,$_POST['extensionBoard']),  
        'others'=>validateInput($db->conn,$_POST['others'])    
        
    ];
  $inventory=new InventoryController;
  $result=$inventory->update($inputData,$id);
if($result)
{
   redirect("Report Updated Successfully","staff_viewInventory.php");
}
  else
  {
   redirect("Something Went Wrong, Report Cannot Be Updated","staff_editInventory.php");
  }


  }


if(isset($_POST['save_inventory'])){

    $inputData=[
        'region'=>validateInput($db->conn,$_POST['region']),
         'cicName'=>validateInput($db->conn,$_POST['cicName']),
        'computers'=>validateInput($db->conn,$_POST['computers']),
        'ups'=>validateInput($db->conn,$_POST['ups']),
        'airConditoiner'=>validateInput($db->conn,$_POST['airConditioner']),
        'scanner'=>validateInput($db->conn,$_POST['scanner']),
        'fan'=>validateInput($db->conn,$_POST['fan']),
        'desk'=>validateInput($db->conn,$_POST['desk']),
        'chair'=>validateInput($db->conn,$_POST['chair']),
        'projector'=>validateInput($db->conn,$_POST['projector']),
        'printer'=>validateInput($db->conn,$_POST['printer']),
        'router'=>validateInput($db->conn,$_POST['router']),
        'photocoppier'=>validateInput($db->conn,$_POST['photocoppier']),
        'extensionBoard'=>validateInput($db->conn,$_POST['extensionBoard']),
        'others'=>validateInput($db->conn,$_POST['others']) 
          
    ];
    
$inventory=new InventoryController;
$result=$inventory->createInventory($inputData);
 if($result)
 {
    redirect(" <h4 style='color:green; font:200'>Inventory Added Successfully</h4>","staff_inventory.php");
 } else
 {
    redirect("Something Went Wrong, Inventory Cannot Be Added","staff_addInventory.php");
 }

}

?>