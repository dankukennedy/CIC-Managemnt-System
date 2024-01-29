<?php 
class TrainingController
{
    public function __construct()
    {
        $db=new DatabaseConnection;
        $this->conn=$db->conn;
    }



 public function edit($id)
   {  
    $training_id=validateInput($this->conn,$id);
     $trainingQry="SELECT * FROM training WHERE id='$training_id' LIMIT 1";
     $result=$this->conn->query($trainingQry);
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
        $trainingQry="SELECT * FROM training ";
        $result=$this->conn->query($trainingQry);
        if($result->num_rows > 0)
        {
         return $result;   
        } else
          {
            return false;
          }
    }

    public function createTraining($inputData)
    {
        $data="'".implode("','",$inputData)."'";
        //echo $data;

        $trainingQry="INSERT INTO training(trainingName,trainingType,trainingPlace,trainingRegion,femaleTotalNo,maleTotalNo,womenTotalNo,studentTotalNo,dropoutTotalNo,poterTotalNo,youthTotalNo,pwdTotalNo,startDate,endDate,badges,paticipantTotalNo) VALUES($data)";
        $result=$this->conn->query($trainingQry);
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
      $training_id=validateInput($this->conn,$id); 
      $trainingName=$inputData['trainingName'];
      $trainingType=$inputData['trainingType'];
      $trainingPlace=$inputData['trainingPlace'];
      $trainingRegion=$inputData['trainingRegion'];
      $femaleTotalNo=$inputData['femaleTotalNo'];
      $maleTotalNo=$inputData['maleTotalNo'];
      $womenTotalNo=$inputData['womenTotalNo'];
      $studentTotalNo=$inputData['studentTotalNo'];
      $dropoutTotalNo=$inputData['dropoutTotalNo'];
      $poterTotalNo=$inputData['poterTotalNo'];
      $youthTotalNo=$inputData['youthTotalNo'];
      $pwdTotalNo=$inputData['pwdTotalNo'];
      $startDate=$inputData['startDate'];
      $endtDate=$inputData['endDate'];
      $endtDate=$inputData['endDate'];
      $paticipantTotalNo=$inputData['paticipantTotalNo'];
      $badges=$inputData['badges'];
      
      $trainingUpdateQry="UPDATE training SET trainingName='$trainingName',
      trainingType='$trainingType',trainingPlace='$trainingPlace',trainingRegion='$trainingRegion',femaleTotalNo=$femaleTotalNo,
      maleTotalNo='$maleTotalNo',womenTotalNo='$womenTotalNo',studentTotalNo='$studentTotalNo',dropoutTotalNo='$dropoutTotalNo',
      poterTotalNo='$poterTotalNo',youthTotalNo='$youthTotalNo',pwdTotalNo='$pwdTotalNo',startDate='$startDate',endDate='$endtDate',
      badges='$badges',paticipantTotalNo='$paticipantTotalNo' WHERE id='$training_id' LIMIT 1 ";
      $result =$this->conn->query($trainingUpdateQry);
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
      $training_id=validateInput($this->conn,$id); 
      $trainingDeleteQuery="DELETE FROM training WHERE id='$training_id' LIMIT 1";
      $result=$this->conn->query($trainingDeleteQuery);
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