<?php
//include('config/app.php');

class RegisterController
{
      public function __construct()
    {

      $db=new DatabaseConnection;
      $this->conn=$db->conn;

    }
    public function registration($fName,$lastName,$otherName,$contact,$nia,$field,$qualification,$email,$gender,$working,$cicName,$cicGps,$region,$subDivision,$securityQsn,$answer,$dateOfBirth,$password,$profile_img)
    {
      $register_query="INSERT INTO zonal_managers(fName,lastName,otherName,contact,nia,field,qualification,email,gender,working,cicName,cicGps,region,subDivision,securityQsn,answer,dateOfBirth,password,profile_img	) VALUES ('$fName','$lastName','$otherName','$contact','$nia','$field','$qualification','$email','$gender','$working','$cicName','$cicGps','$region','$subDivision','$securityQsn','$answer','$dateOfBirth','$password','$profile_img	' )";
      $result=$this->conn->query($register_query);
   
      return $result;
    }

    //checking Whether contact entered existed    
     public function isContactExist($contact)
     {
         $checkManager="SELECT contact FROM zonal_managers WHERE contact='$contact' LIMIT 1";
         $result=$this->conn->query($checkManager);
         if($result->num_rows > 0){
           return true;
         } else{
          return false;
         }

     }

//Checking whether National ID entered existed
     public function isNiaExist($nia)
     { $checkManager="SELECT nia FROM zonal_managers WHERE nia ='$nia' LIMIT 1";
      $result=$this->conn->query($checkManager);
      if ($result->num_rows > 0 ) {
        return true;
      }else{
        return false;
      }
      
     }

//Checking whether the email entered existed
    public function isUserExist($email)
    {
        $checkManager="SELECT email FROM zonal_managers WHERE email='$email' LIMIT 1";
        $result=$this->conn->query($checkManager);
        if ($result->num_rows > 0) {            
        return true;
        }else {
            return false;
        }
    }

//Checking a valid Email
    public function isValidEmail($email){
      if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
      } 
       else{
        return false;
       }
    }

//Setting contact format.
     public function phoneNumberFormat($contact)
     {
      //Allow only Digits,Remove all other characters.
      $contact=preg_replace("/[^\d]/","",$contact);
      //get the lenght
      $lenght_of_number=strlen($contact);
      //if contact;
        if($lenght_of_number==10)
        {
          return true;
        } 
          else {
            return false;
           }
     }   

     // Checking whether Email is Empty
     public function checkEmailEmpty($email){
      if(!empty($email)){
          return true;
      }
      else{
        return false;
      }
     
     } 

// Checcking whether CIC Name is not Empty.
    public function IsCicNameEmpty( $cicName){
        if(!empty( $cicName))
        {
           return true;
        }
        else{
          return false;
        }
    }

/** *Checking whether Security Question field is not empty.
public function isSecurityQnsAsrEmpty($securityQns,$answere)
{
  if(!empty($securityQns)||!empty($answere))
  {
  return true;
  }else 
  {
    return false;
  }
}

//Check whethere Date Of Birth is Not Empty
public  function IsDateOfBirthEmpty($dateOfBirth)
{
  if(!empty($dateOfBirth))
  {
  return  true;
  } else 
     {return false;
    }
}
***/
    
// Checcking whether yourName is not Empty.
public function IsNameEmpty($fName,$lastName){
  if(!empty($fName)||!empty($lastName))
  {
     return true;
  }
  else{
    return false;
  }
}

// Checcking whether GPS is not Empty.
    public function IsGpsEmpty($cicGps){
      if(!empty($cicGps))
      {
         return true;
      }
      else{
        return false;
      }
  }

// Checcking whether Field is not Empty.
public function IsFielEmpty($field){
  if(!empty($field))
  {
     return true;
  }
  else{
    return false;
  }
}

// Checcking whether Region is not Empty.
public function IsRegionEmpty($region){
  if(!empty($region))
  {
     return true;
  }
  else{
    return false;
  }
}

// Checcking whether Sub-Division is not Empty.
public function IsSubDivisionEmpty($subDivision){
  if(!empty($subDivision))
  {
     return true;
  }
  else{
    return false;
  }
}

 
// Checcking whether Sub-Division is not Empty.
public function IsPasswordEmpty($password){
  if(!empty($password))
  {
     return true;
  }
  else{
    return false;
  }
}

//Checking where both password matches.
    public function confirmPassword($password,$c_password)
    {
      if($password == $c_password){ 
        return true;
       
      }else {
        return false;
       
      }
    }

}


?>