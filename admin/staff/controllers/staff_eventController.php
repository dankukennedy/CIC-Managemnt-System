<?php

class EventController
{
    public function __construct()
    {
        $db=new DatabaseConnection;
        $this->conn=$db->conn;
    }


    public function delete( $id)
    {
        $event_id=validateInput($this->conn,$id);
        $eventDeleteQuery="DELETE FROM staff_event WHERE id='$event_id' LIMIT 1";
        $result=$this->conn->query($eventDeleteQuery);
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
        $eventQry="SELECT * FROM staff_event ORDER BY created_at DESC LIMIT 5";
        $result=$this->conn->query($eventQry);
        if($result->num_rows > 0)
        {
            return $result;
        } else
        {
            return false;
        }
    }

    public function createEvent($inputData)
    {
        $data="'".implode("','",$inputData)."'";
        //echo $data;

        $eventQry="INSERT INTO staff_event(region,cicName,title,description,startDate,endDate) VALUES($data)";
        $result=$this->conn->query($eventQry);
        if($result)
        {
            return true;
        } else
        {
            return false;
        }
    }

    public function edit($id)
    {
        $event_id=validateInput($this->conn,$id);
        $eventQry="SELECT * FROM staff_event WHERE id='$event_id' LIMIT 1";
        $result=$this->conn->query($eventQry);
        if($result->num_rows == 1)
        {
            $data=$result->fetch_assoc();
            return $data;
        } else
        {
            return false;
        }
    }



    public function update($inputData,$id)
    {
        $event_id=validateInput($this->conn,$id);
        // $cicName=$inputData['cicName'];
        // $region=$inputData['region'];
        $description=$inputData['description'];
        $endDate=$inputData['endDate'];
        $startDate=$inputData['startDate'];
        $title=$inputData['title'];

        $eventUpdateQry=" UPDATE staff_event  SET startDate='$startDate',endDate='$endDate', title='$title', description='$description' WHERE id='$event_id' LIMIT 1 ";
        $result =$this->conn->query($eventUpdateQry);
        if($result)
        {
            return true;
        }  else
        {
            return  false;
        }



    }

}
?>