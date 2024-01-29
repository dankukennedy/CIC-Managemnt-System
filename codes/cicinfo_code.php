<?php
include('../config/application.php');
include_once('../controllers/cicInfoController.php');

if(isset($_POST['deleteCicInfo']))
{
  $id=validateInput($db->conn,$_POST['deleteCicInfo'] );
  $cicInfo=new cicInfoController();
  $result=$cicInfo->delete( $id);
  if($result)
  {
    redirect("<h4 style='color:red;' > CIC Picture Deleted Successfully  !!!</h4>","viewCicInformation.php");

  }
  else
  {
    redirect("<h4 style='color: orange;' >Something Went Wrong</h4>","viewCicInformation.php");
  }


}


if(isset($_POST['save_cicInfo']))
  { $region= validateInput($db->conn,$_POST['region']);
    $cicName= validateInput($db->conn,$_POST['cicName']);
    $description= validateInput($db->conn,$_POST['description']);
    //$file= validateInput($db->conn,$_POST['file']);


    $file=$_FILES['file'];
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','png','jpeg','jfif','gif','avif','apng');

    if(in_array( $fileActualExt,$allowed))
    {
      if($fileError===0)
      {
        if($fileSize < 1000000)
        {
          $fileNameNew=uniqid('',true).".".$fileActualExt;

          $cicInfo=new cicInfoController;
          $result_cicInfo=$cicInfo->description($description);
          if( $result_cicInfo)
          {
            $fileNotEmpty=$cicInfo->fileNotEmpty( $file);
            if($fileNotEmpty)
           {
             $uploadFile=$cicInfo->uploadDetails($cicName,$region,$description,$fileNameNew);
             $fileDestination="../uploaded/images/cicImages/".$fileNameNew;
             //move_uploaded_file($fileTmpName,$fileDestination);
           //  move_uploaded_file($fileTmpName,'uploaded/images/profiles/'.$fileNameNew);
             if($uploadFile)
             {
               move_uploaded_file($fileTmpName,$fileDestination);
               redirect("<h4 style='color: green;' > File Uploaded Successfully  !!!</h4>","viewCicInformation.php");
             }
               else
               {
                 redirect("<h4 style='color: orange;' > Something Went Wrong cannot upload image file!!!</h4>","addCicInfo.php");

               }

               }else
                  {
                    redirect("<h4 style='color: orange;' > The  Image  cannot be left empty !!!</h4>","addCicInfo.php");
                  }

          }else
            {
              redirect("<h4 style='color: orange;' > The  Image description cannot be left empty !!!</h4>","addCicInfo.php");
            }
        }
        else
        {
            redirect("<h4 style='color: orange;' > The  file size is too big !!!</h4>","addCicInfo.php");
        }
      }
      else
      {
        redirect("<h4 style='color: orange;' > The is Error Uploading the file of this type  !!!</h4>","addCicInfo.php");
      }
    }else
    {

          redirect("<h4 style='color: orange;' >  print_r($file);You cannot upload file of this type  !!!</h4>","addCicInfo.php");
    }


  }



?>
