<?php 
class ActivityController
{
    public function __construct()
    {
        $db=new DatabaseConnection;
        $this->conn=$db->conn;
    }



 public function edit($id)
   {  
    $activity_id=validateInput($this->conn,$id);
     $activityQry="SELECT * FROM activity WHERE id='$activity_id' LIMIT 1";
     $result=$this->conn->query($activityQry);
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
        $activityQry="SELECT * FROM activity ";
        $result=$this->conn->query($activityQry);
        if($result->num_rows > 0)
        {
         return $result;   
        } else
          {
            return false;
          }
    }

    public function createActivity($inputData)
    {
        $data="'".implode("','",$inputData)."'";
        //echo $data;

        $activityQry="INSERT INTO activity(region,cicName,description) VALUES($data)";
        $result=$this->conn->query($activityQry);
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
      $activity_id=validateInput($this->conn,$id);     
      $cicName=$inputData['cicName'];
      $region=$inputData['region'];
      //$gps=$inputData['gps'];
      $description=$inputData['description'];      
      
      $activityUpdateQry=" UPDATE activity SET cicName='$cicName',region='$region',description='$description' WHERE id='$activity_id' LIMIT 1 ";
      $result =$this->conn->query($activityUpdateQry);

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
      $activity_id=validateInput($this->conn,$id); 
      $activityDeleteQuery="DELETE FROM activity WHERE id='$activity_id' LIMIT 1";
      $result=$this->conn->query($activityDeleteQuery);
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