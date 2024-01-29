<?php
include('../config/ad_application.php');
include_once('../controllers/ad_eventController.php');


if(isset($_POST['deleteEvent']))
{
    $id=validateInput($db->conn,$_POST['deleteEvent'] );
    $event=new EventController;
    $result=$event->delete( $id);
    if($result)
    {
        redirect("Event Deleted Successfully","ad_viewEvent.php");
    }
    else
    {
        redirect("Something Went Wrong","ad_viewEvent.php");
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
        redirect("<h4 style='color:green '>Event Updated Successfully</h4>","ad_viewEvent.php");
    }
    else
    {
        redirect("<h4 style='color: #DB0630'>Something Went Wrong, Event Cannot Be Updated</h4>","ad_editEvent.php");
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
        redirect(" <h4 style='color:green; font:200'>Event Added Successfully</h4>","ad_event.php");
    } else
    {
        redirect("Something Went Wrong, Event Cannot Be Added","ad_addEvent.php");
    }

}

?>