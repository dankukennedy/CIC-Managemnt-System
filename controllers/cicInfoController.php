<?php
//include('config/app.php');

class cicInfoController
{
      public function __construct()
    {

      $db=new DatabaseConnection;
      $this->conn=$db->conn;

    }

    public function delete( $id)
    {
        $cicInfo_id=validateInput($this->conn,$id);
        $cicInfo_idDeleteQuery="DELETE FROM cicinfo WHERE id='$cicInfo_id' LIMIT 1";
        $result=$this->conn->query($cicInfo_idDeleteQuery);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }

    }


    public function index()
    {
        $cicInfoQry="SELECT * FROM cicinfo ";
        $result=$this->conn->query($cicInfoQry);
        if($result->num_rows > 0)
        {
            return $result;
        } else
        {
            return false;
        }
    }


    public function uploadDetails($cicName,$region,$description,$fileNameNew)
    {
      $upload_query="INSERT INTO cicinfo(cicName,region,description,img_url) VALUES ('$cicName','$region','$description','$fileNameNew')";
      $result=$this->conn->query($upload_query);


      return $result;
    }

// Checcking whether Description is not Empty.
      public function description( $description){
        if(!empty( $description))
        {
           return true;
        }
        else{
          return false;
        }
    }


//Checcking whether image is not Empty.
    public function fileNotEmpty( $file){
        if(!empty( $file))
        {
            return true;
        }
        else{
            return false;
        }
    }



}


?>