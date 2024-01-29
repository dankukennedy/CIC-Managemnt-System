<?php 
include('../config/ad_application.php');
include_once('../controllers/ad_TrainingController.php');

if(isset($_POST['deleteTraining'])) 
{
   $id=validateInput($db->conn,$_POST['deleteTraining'] );
   $training=new TrainingController;
   $result=$training->delete( $id);
   if($result)
   {
      redirect("Training Deleted Successfully","ad_viewTraining.php");
   }
   else
   {
      redirect("Something Went Wrong","ad_viewTraining.php");
    }


} 


if(isset($_POST['update_training']))
  {
    $id=validateInput($db->conn,$_POST['training_id']);

   $inputData=[
      'trainingName'=>validateInput($db->conn,$_POST['trainingName']),
       'trainingType'=>validateInput($db->conn,$_POST['trainingType']),
      'trainingPlace'=>validateInput($db->conn,$_POST['trainingPlace']),
      'trainingRegion'=>validateInput($db->conn,$_POST['trainingRegion']),
      'femaleTotalNo'=>validateInput($db->conn,$_POST['femaleTotalNo']),
      'maleTotalNo'=>validateInput($db->conn,$_POST['maleTotalNo']),
      'womenTotalNo'=>validateInput($db->conn,$_POST['womenTotalNo']),
      'studentTotalNo'=>validateInput($db->conn,$_POST['studentTotalNo']),
      'dropoutTotalNo'=>validateInput($db->conn,$_POST['dropoutTotalNo']),
      'poterTotalNo'=>validateInput($db->conn,$_POST['poterTotalNo']),
      'youthTotalNo'=>validateInput($db->conn,$_POST['youthTotalNo']),
      'pwdTotalNo'=>validateInput($db->conn,$_POST['pwdTotalNo']),
      'startDate'=>validateInput($db->conn,$_POST['startDate']),
      'endDate'=>validateInput($db->conn,$_POST['endDate']),
      'badges'=>validateInput($db->conn,$_POST['badges']),
      'paticipantTotalNo'=>validateInput($db->conn,$_POST['paticipantTotalNo'])
      
  ];
  $training=new TrainingController;
  $result=$training->update($inputData,$id);
if($result)
{
   redirect("Training Updated Successfully","ad_viewTraining.php");
}
  else
  {
   redirect("Something Went Wrong, Training Cannot Be Updated","ad_editTraining.php");
  }


  }


if(isset($_POST['save_training'])){
$inputData=[
    'trainingName'=>validateInput($db->conn,$_POST['trainingName']),
     'trainingType'=>validateInput($db->conn,$_POST['trainingType']),
    'trainingPlace'=>validateInput($db->conn,$_POST['trainingPlace']),
    'trainingRegion'=>validateInput($db->conn,$_POST['trainingRegion']),
    'femaleTotalNo'=>validateInput($db->conn,$_POST['femaleTotalNo']),
    'maleTotalNo'=>validateInput($db->conn,$_POST['maleTotalNo']),
    'womenTotalNo'=>validateInput($db->conn,$_POST['womenTotalNo']),
    'studentTotalNo'=>validateInput($db->conn,$_POST['studentTotalNo']),
    'dropoutTotalNo'=>validateInput($db->conn,$_POST['dropoutTotalNo']),
    'poterTotalNo'=>validateInput($db->conn,$_POST['poterTotalNo']),
    'youthTotalNo'=>validateInput($db->conn,$_POST['youthTotalNo']),
    'pwdTotalNo'=>validateInput($db->conn,$_POST['pwdTotalNo']),
    'startDate'=>validateInput($db->conn,$_POST['startDate']),
    'endDate'=>validateInput($db->conn,$_POST['endDate']),
    'badges'=>validateInput($db->conn,$_POST['badges']),
    'paticipantTotalNo'=>validateInput($db->conn,$_POST['paticipantTotalNo'])
    
];

$training=new TrainingController;
$result=$training->createTraining($inputData);
 if($result)
 {
    redirect(" <h4 style='color:green; font:200'>Training Added Successfully</h4>","ad_train.php");
 } else
 {
    redirect("Something Went Wrong, Training Cannot Be Added","ad_addTraining.php");
 }

}

?>