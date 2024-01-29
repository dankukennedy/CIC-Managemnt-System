<?php 
include('../config/ad_application.php');
include_once('../controllers/ad_ActivityController.php');

if(isset($_POST['deleteActivity'])) 
{
   $id=validateInput($db->conn,$_POST['deleteActivity'] );
   $activity=new ActivityController;
   $result=$activity->delete( $id);
   if($result)
   {
      redirect("Activity Deleted Successfully","ad_viewActivity.php");
   }
   else
   {
      redirect("Something Went Wrong","ad_viewActivity.php");
    }


} 


if(isset($_POST['update_activity']))
  {
    $id=validateInput($db->conn,$_POST['$activity_id']);

    $inputData=[
     
        'cicName'=>validateInput($db->conn,$_POST['cicName']),
        'region'=>validateInput($db->conn,$_POST['region']),
        'description'=>validateInput($db->conn,$_POST['description'])
        
    ];
  $activity=new ActivityController;
  $result=$activity->update($inputData,$id);
if($result)
{
   redirect("Activity Updated Successfully","ad_viewActivity.php");
}
  else
  {
   redirect("Something Went Wrong, Activity Cannot Be Updated","ad_editActivity.php");
  }


  }


if(isset($_POST['save_activity'])){

    $inputData=[
     
        'cicName'=>validateInput($db->conn,$_POST['cicName']),
        'region'=>validateInput($db->conn,$_POST['region']),
        'description'=>validateInput($db->conn,$_POST['description'])       
        
    ];
$activity=new ActivityController;
$result=$activity->createActivity($inputData);
 if($result)
 {
    redirect(" <h4 style='color:green; font:200'>Activity Added Successfully</h4>","ad_activity.php");
 } else
 {
    redirect("Something Went Wrong, Activity Cannot Be Added","ad_ddActivity.php");
 }

}

?>