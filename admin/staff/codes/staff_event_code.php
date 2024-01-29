<?php
include('../config/staff_application.php');
include_once('../controllers/staff_eventController.php');


if(isset($_POST['deleteEvent']))
{
    $id=validateInput($db->conn,$_POST['deleteEvent'] );
    $event=new EventController;
    $result=$event->delete( $id);
    if($result)
    {
        redirect("Event Deleted Successfully","staff_viewEvent.php");
    }
    else
    {
        redirect("Something Went Wrong","staff_viewEvent.php");
    }


}


if(isset($_POST['update_Event']))
{
    $id=validateInput($db->conn,$_POST['event_id']);

    $inputData=[
        'title'=>validateInput($db->conn,$_POST['title']),
        'description'=>validateInput($db->conn,$_POST['description']),
        'startDate'=>validateInput($db->conn,$_POST['startDate']),
        'endDate'=>validateInput($db->conn,$_POST['endDate'])

    ];
    $event=new EventController;
    $result=$event->update($inputData,$id);
    if($result)
    {
        redirect("<h4 style='color:green '>Event Updated Successfully</h4>","staff_viewEvent.php");
    }
    else
    {
        redirect("<h4 style='color: #DB0630'>Something Went Wrong, Event Cannot Be Updated</h4>","staff_editEvent.php");
    }


}


if(isset($_POST['save_Event'])){

    $inputData=[
        'region'=>validateInput($db->conn,$_POST['region']),
        'cicName'=>validateInput($db->conn,$_POST['cicName']),
        'title'=>validateInput($db->conn,$_POST['title']),
        'description'=>validateInput($db->conn,$_POST['description']),
        'startDate'=>validateInput($db->conn,$_POST['startDate']),
        'endDate'=>validateInput($db->conn,$_POST['endDate'])

    ];

    $event=new EventController;
    $result=$event->createEvent($inputData);
    if($result)
    {
        redirect(" <h4 style='color:green; font:200'>Event Added Successfully</h4>","staff_event.php");
    } else
    {
        redirect("Something Went Wrong, Event Cannot Be Added","staff_addEvent.php");
    }

}

?>