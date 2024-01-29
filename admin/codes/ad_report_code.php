<?php 
include('../config/ad_application.php');
include_once('../controllers/ad_ReportController.php');

if(isset($_POST['deleteReport'])) 
{
   $id=validateInput($db->conn,$_POST['deleteReport'] );
   $report=new ReportController;
   $result=$report->delete( $id);
   if($result)
   {
      redirect("Report Deleted Successfully","ad_viewReport.php");
   }
   else
   {
      redirect("Something Went Wrong","ad_viewReport.php");
    }


} 


if(isset($_POST['update_report']))
  {
    $id=validateInput($db->conn,$_POST['report_id']);

    $inputData=[
        'email'=>validateInput($db->conn,$_POST['email']),
         'reportType'=>validateInput($db->conn,$_POST['reportType']),
        'cicName'=>validateInput($db->conn,$_POST['cicName']),
        'region'=>validateInput($db->conn,$_POST['region']),
        'gps'=>validateInput($db->conn,$_POST['gps']),
        'managersName'=>validateInput($db->conn,$_POST['managersName']),
        'totalFemale'=>validateInput($db->conn,$_POST['totalFemale']),
        'totalMale'=>validateInput($db->conn,$_POST['totalMale']),
        'totalFemaleArt'=>validateInput($db->conn,$_POST['totalFemaleArt']),
        'totalMaleArt'=>validateInput($db->conn,$_POST['totalMaleArt']),
        'totalStudent'=>validateInput($db->conn,$_POST['totalStudent']),
        'overallAttend'=>validateInput($db->conn,$_POST['overallAttend']),
        'internetType'=>validateInput($db->conn,$_POST['internetType']),
        'internetSpeed'=>validateInput($db->conn,$_POST['internetSpeed']),
        'challenges'=>validateInput($db->conn,$_POST['challenges']),
        'recommendation'=>validateInput($db->conn,$_POST['recommendation'])
        
        
    ];
  $report=new ReportController;
  $result=$report->update($inputData,$id);
if($result)
{
   redirect("Report Updated Successfully","ad_viewReport.php");
}
  else
  {
   redirect("Something Went Wrong, Report Cannot Be Updated","ad_editReport.php");
  }


  }


if(isset($_POST['save_report'])){

    $inputData=[
        'email'=>validateInput($db->conn,$_POST['email']),
         'reportType'=>validateInput($db->conn,$_POST['reportType']),
        'cicName'=>validateInput($db->conn,$_POST['cicName']),
        'region'=>validateInput($db->conn,$_POST['region']),
        'gps'=>validateInput($db->conn,$_POST['gps']),
        'managersName'=>validateInput($db->conn,$_POST['managersName']),
        'totalFemale'=>validateInput($db->conn,$_POST['totalFemale']),
        'totalMale'=>validateInput($db->conn,$_POST['totalMale']),
        'totalFemaleArt'=>validateInput($db->conn,$_POST['totalFemaleArt']),
        'totalMaleArt'=>validateInput($db->conn,$_POST['totalMaleArt']),
        'totalStudent'=>validateInput($db->conn,$_POST['totalStudent']),
        'overallAttend'=>validateInput($db->conn,$_POST['overallAttend']),
        'internetType'=>validateInput($db->conn,$_POST['internetType']),
        'internetSpeed'=>validateInput($db->conn,$_POST['internetSpeed']),
        'challenges'=>validateInput($db->conn,$_POST['challenges']),
        'recommendation'=>validateInput($db->conn,$_POST['recommendation'])
        
        
    ];

$report=new ReportController;
$result=$report->createReport($inputData);
 if($result)
 {
    redirect(" <h4 style='color:green; font:200'>Report Added Successfully</h4>","ad_reports.php");
 } else
 {
    redirect("Something Went Wrong, Report Cannot Be Added","ad_addReport.php");
 }

}

?>