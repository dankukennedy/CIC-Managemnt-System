<?php 
include('../config/application.php');
include_once('../controllers/ActivityController.php');

if(isset($_POST['deleteActivity'])) 
{
   $id=validateInput($db->conn,$_POST['deleteActivity'] );
   $activity=new ActivityController;
   $result=$activity->delete( $id);
   if($result)
   {
      redirect("Activity Deleted Successfully","viewActivity.php");
   }
   else
   {
      redirect("Something Went Wrong","viewActivity.php");
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
   redirect("Activity Updated Successfully","viewActivity.php");
}
  else
  {
   redirect("Something Went Wrong, Activity Cannot Be Updated","editActivity.php");
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
    redirect(" <h4 style='color:green; font:200'>Activity Added Successfully</h4>","activity.php");
 } else
 {
    redirect("Something Went Wrong, Activity Cannot Be Added","addActivity.php");
 }

}

?>