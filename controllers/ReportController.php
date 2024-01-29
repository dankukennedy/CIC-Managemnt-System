<?php 
class ReportController
{
    public function __construct()
    {
        $db=new DatabaseConnection;
        $this->conn=$db->conn;
    }



 public function edit($id)
   {  
    $report_id=validateInput($this->conn,$id);
     $reportQry="SELECT * FROM reports WHERE id='$report_id' LIMIT 1";
     $result=$this->conn->query($reportQry);
     if($result->num_rows == 1)
       {
        $data=$result->fetch_assoc();
        return $data;
       } else
       {
         return false;
       }
   }

    public function index()
    {
        $reportQry="SELECT * FROM reports ";
        $result=$this->conn->query($reportQry);
        if($result->num_rows > 0)
        {
         return $result;   
        } else
          {
            return false;
          }
    }

    public function createReport($inputData)
    {
        $data="'".implode("','",$inputData)."'";
        //echo $data;

        $reportgQry="INSERT INTO reports(email,reportType,cicName,region,gps,managersName,totalFemale,totalMale,totalFemaleArt,totalMaleArt,totalStudent,overallAttend,internetType,internetSpeed,challenges,recommendation) VALUES($data)";
        $result=$this->conn->query($reportgQry);
       if($result)
       {
        return true;
       } else
       {
        return false;
       }
    }


    public function update($inputData,$id)
    {
      $report_id=validateInput($this->conn,$id); 
      $email=$inputData['email'];
      $reportType=$inputData['reportType'];
      $cicName=$inputData['cicName'];
      $region=$inputData['region'];
      $gps=$inputData['gps'];
      $managersName=$inputData['managersName'];
      $totalFemale=$inputData['totalFemale'];
      $totalMale=$inputData['totalMale'];
      $totalFemaleArt=$inputData['totalFemaleArt'];
      $totalMaleArt=$inputData['totalMaleArt'];
      $totalStudent=$inputData['totalStudent'];
      $overallAttend=$inputData['overallAttend'];
      $internetType=$inputData['internetType'];
      $internetSpeed=$inputData['internetSpeed'];
      $challenges=$inputData['challenges'];
      $recommendation=$inputData['recommendation'];
     
      
      $reportUpdateQry=" UPDATE reports SET email='$email',reportType='$reportType',cicName='$cicName',region='$region',gps='$gps',
      managersName='$managersName',totalFemale='$totalFemale',totalMale='$totalMale',totalFemaleArt='$totalFemaleArt',
      totalMaleArt='$totalMaleArt',totalStudent='$totalStudent',overallAttend='$overallAttend',internetType='$internetType',internetSpeed='$internetSpeed',
      challenges='$challenges',recommendation='$recommendation' WHERE id='$report_id' LIMIT 1 ";
      $result =$this->conn->query($reportUpdateQry);
      if($result)
       {
        return true;
       }  else
         {
          return  false;
         }



    }

    public function delete( $id)
     {
      $report_id=validateInput($this->conn,$id); 
      $reportDeleteQuery="DELETE FROM reports WHERE id='$report_id' LIMIT 1";
      $result=$this->conn->query($reportDeleteQuery);
      if($result)
        {
          return true;
        } 
        else
         {
           return false;
         }

     }
   

}

?>