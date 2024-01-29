<?php
include('../config/staff_application.php');
include_once('../controllers/staff_MessageController.php');

if(isset($_POST['deleteMessage']))
{
    $id=validateInput($db->conn,$_POST['deleteMessage'] );
    $message=new MessagesController;
    $result=$message->delete( $id);
    if($result)
    {
        redirect("Message Deleted Successfully","staff_viewMessage.php");
    }
    else
    {
        redirect("Something Went Wrong","staff_viewMessage.php");
    }


}


if(isset($_POST['update_Message']))
{
    $id=validateInput($db->conn,$_POST['message_id']);

    $inputData=[
        'subject'=>validateInput($db->conn,$_POST['subject']),
        'message'=>validateInput($db->conn,$_POST['message'])

    ];
    $message=new MessageController;
    $result=$message->update($inputData,$id);
    if($result)
    {
        redirect("Message Updated Successfully","staff_viewMessage.php");
    }
    else
    {
        redirect("Something Went Wrong, Message Cannot Be Updated","staff_editMessage.php");
    }


}


if(isset($_POST['save_Message'])){

    $inputData=[
        'region'=>validateInput($db->conn,$_POST['region']),
        'cicName'=>validateInput($db->conn,$_POST['cicName']),
        'subject'=>validateInput($db->conn,$_POST['subject']),
        'message'=>validateInput($db->conn,$_POST['message'])

    ];

    $message=new MessageController;
    $result=$message->createMessage($inputData);
    if($result)
    {
        redirect(" <h4 style='color:green; font:200'>Message Added Successfully</h4>","staff_messages.php");
    } else
    {
        redirect("Something Went Wrong, Message Cannot Be Added","staff_addMessage.php");
    }

}

?>