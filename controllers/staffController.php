<?php
//include('config/app.php');

class staffController
{
    public function __construct()
    {

        $db=new DatabaseConnection;
        $this->conn=$db->conn;

    }



    public function staff()
    {
       //$cicName=validateInput($this->conn,$cicName);
        $cicInfoQry="SELECT * FROM managers ";
        $result=$this->conn->query($cicInfoQry);
        if($result->num_rows > 0)
        {
            return $result;
        } else
        {
            return false;
        }
    }







}


?>