
<?php 
include_once('controllers/RegisterController.php');
include_once('controllers/loginController.php');
include_once('controllers/updateController.php');
include_once('controllers/changePasswordController.php');

$auth =new loginController;




if(isset($_POST['resetPassword']))
{
  $id = validateInput($db->conn, $_POST['manager_id']);
  $newPassword= validateInput($db->conn,$_POST['newPassword']);   
  $rePassword= validateInput($db->conn,$_POST['rePassword']);
  $managerChangePass=new changePasswordcontroller;
  $result_checkPassword= $managerChangePass->checkPassword($id,$newPassword);
  if($result_checkPassword)
  { $result_passwordLenght=$managerChangePass->passwordLenght($newPassword);
     if( $result_passwordLenght)
     {
          $result_newPassSecurity=$managerChangePass->newPasswordSecurity($newPassword);
        if( $result_newPassSecurity)
          {  
             $result_comparePass=$managerChangePass->confirmPassword($newPassword,$rePassword);
            if($result_comparePass)
            {
              $password_hash=password_hash($newPassword,PASSWORD_DEFAULT);
              if( $password_hash)
                {
                  $password=$password_hash;
                  $changePasswordqry=$managerChangePass->changePassword($password,$id);
                  if( $changePasswordqry)
                     {
                       {
                        echo "  <script>
                        alert('Password change successfully  !!! ');
                        document.location.href='settings.php';
                        </script>";
                        redirect(" <h5 style='color: green';> Password change successfully !!! </h5>","settings.php");
                               
                       }
                     }
                        else
                        {
                          echo "  <script>
                          alert('attempt to change New Password fails !!!  !!! ');
                          document.location.href='changePassword.php';
                          </script>";
                          redirect(" <h5 style='color: orange';> attempt to change New Password fails !!!  </h5>","changePassword.php");
                 
                        }
                } 
                 else
                 {
                  
                  echo "  <script>
                  alert('New Password security fails !!!  !!! ');
                  document.location.href='changePassword.php';
                  </script>";
                   redirect(" <h5 style='color: orange';> New Password security fails !!!  </h5>","changePassword.php");
                 }
            } 
            else{
              
              echo "  <script>
              alert('New Password and Repeat password does not Match up !!!  !!! ');
              document.location.href='ad_changePassword.php';
              </script>";
              redirect(" <h5 style='color:  orange';> New Password and Repeat password does not Match up !!!  </h5>","changePassword.php");
                }
            
          }  
          else{
            echo "  <script>
            alert('Enter password up to 8 characters or more !!! !! !!! ');
            document.location.href='changePassword.php';
            </script>";
            redirect(" <h5 style='color:  orange';> Enter password  mix with numbers,special characters,uppercases,lowercases !!  </h5>","changePassword.php");
          }

     } else     
        {
          
      echo "  <script>
      alert('Password entered does not match with Current Password  !!! ');
      document.location.href='changePassword.php';
      </script>";
          redirect(" <h5 style='color: orange';> Enter password up to 8 characters or more !!! </h5>","changePassword.php");
   }

  }
     else
     {
      echo "  <script>
      alert('Password entered does not match with Current Password  !!! ');
      document.location.href='changePassword.php';
      </script>";
 redirect(" <h5 style='color: orange';> Password entered does not match with Current Password !!!  </h5>","changePassword.php");
     }



}

if(isset($_POST['update']))
{
  $id = validateInput($db->conn, $_POST['manager_id']);

  $fName=validateInput($db->conn, $_POST['fName']);
  $fName=ucwords($fName);
  $lastName=validateInput($db->conn, $_POST['lastName']);
  $lastName=ucwords($lastName);
  $otherName=validateInput($db->conn, $_POST['otherName']);
  $otherName=ucwords($otherName);
  $contact= validateInput($db->conn,$_POST['contact']);
  $contact= strtoupper($contact);
  //$nia= validateInput($db->conn,$_POST['nia']);
  //$nia=strtoupper($nia);
  $field= validateInput($db->conn,$_POST['field']);
  $field= ucwords($field );
  $qualification= validateInput($db->conn,$_POST['qualification']);
  $qualification= ucwords($qualification);
  //$email= validateInput($db->conn,$_POST['email']);
  $gender= validateInput($db->conn,$_POST['gender']);
  $gender= ucfirst($gender);
  $working= validateInput($db->conn,$_POST['working']);
  $working= ucwords($working);
  $cicName= validateInput($db->conn,$_POST['cicName']);
  $cicName=ucwords($cicName);
  $cicGps= validateInput($db->conn,$_POST['cicGps']);
  $cicGps= ucwords($cicGps );
  $region= validateInput($db->conn,$_POST['region']);
  $region=  ucwords( $region );
  $subDivision= validateInput($db->conn,$_POST['SubDivision']);
  $subDivision=ucwords($subDivision );

  $manager=new updateController;
  $result=$manager->update($fName,$lastName,$otherName,$contact,$field,$qualification,$gender,$working,$cicName,$cicGps,$region,$subDivision,$id);
 
  if( $result)
  {
    echo "  <script>
    alert(' Profile Updated  Successfully  !!! ');
    document.location.href='profile.php';
    </script>";
    redirect(" <h5 style='color: green';> Profile Updated  Successfully </h5>","profile.php");
  }else 
  { 
    echo "  <script>
    alert(' Profile Update  fails   !!! ');
    document.location.href='editProfile.php';
    </script>";
    redirect(" <h5 style='color: red';> Profile Update  fails </h5>","editProfile.php");

  }

}


if(isset($_POST['logout'])){
  $checkLoggedOut=$auth->logout();
  if($checkLoggedOut){
    echo "  <script>
    alert(' Loggedout Successfully  !!! ');
    document.location.href='login.php';
    </script>";
    redirect(" <h5 style='color: green';> Loggedout Successfully !!! </h5>","login.php");
  }

}


if(isset($_POST['login']))
{
  $email=validateInput($db->conn, $_POST['email']);
  $password=validateInput($db->conn, $_POST['password']); 
  $checkLogin=$auth->managerLogin($email,$password);
    if($checkLogin)
   { echo "  <script>
    alert(' Logged in Successfully !!! ');
    document.location.href='home.php';
    </script>";
      redirect(" <h5 style='color: green';> Logged in Successfully !!!</h5>","home.php");
   }    else 
     {
      $checkAccount=$auth->managerAccount($email);
      if ($checkAccount){
        echo "  <script>
        alert('Please You dont Have an Account Create one ');
        document.location.href='login.php';
        </script>";
             redirect("<h5 style='color: orange';>Please You dont Have an Account Create one !!!</h5>","login.php");
         } 
        else{ 
          echo "  <script>
        alert(' Invalid Email or Password !!! ');
        document.location.href='login.php';
        </script>";
           redirect("<h5 style='color: orange';> Invalid Email or Password !!!</h5>","login.php");

        }
      }

}



if(isset($_POST['register']))
{
    $fName=validateInput($db->conn, $_POST['fName']);
    $fName=ucwords($fName);
    $lastName=validateInput($db->conn, $_POST['lastName']);
    $lastName=ucwords($lastName);
    $otherName=validateInput($db->conn, $_POST['otherName']);
    $otherName=ucwords($otherName);
    $contact= validateInput($db->conn,$_POST['contact']);
    $contact= strtoupper($contact);
    $nia= validateInput($db->conn,$_POST['nia']);
    $nia=strtoupper($nia);
    $field= validateInput($db->conn,$_POST['field']);
    $field= ucwords($field );
    $qualification= validateInput($db->conn,$_POST['qualification']);
    $qualification= ucwords($qualification);
    $email= validateInput($db->conn,$_POST['email']);
    $gender= validateInput($db->conn,$_POST['gender']);
    $gender= ucfirst($gender);
    $working= validateInput($db->conn,$_POST['working']);
    $working= ucwords($working);
    $cicName= validateInput($db->conn,$_POST['cicName']);
    $cicName=ucwords($cicName);
    $cicGps= validateInput($db->conn,$_POST['cicGps']);
    $cicGps= ucwords($cicGps );
    $region= validateInput($db->conn,$_POST['region']);
    $region=  ucwords( $region );
    $subDivision= validateInput($db->conn,$_POST['SubDivision']);
    $subDivision=ucwords($subDivision );
    $securityQsn=validateInput($db->conn,$_POST['securityQsn']);
    $answer=validateInput($db->conn,$_POST['answer']);
    $answer=ucwords($answer);
    $dob=validateInput($db->conn,$_POST['dateOfBirth']);
    $year=(date('Y')-date('Y',strtotime($dob)));
    $dateOfBirth=$year;
    $profile_img= "undraw_profile.svg";
    $password= validateInput($db->conn,$_POST['password']);   
    $repassword= validateInput($db->conn,$_POST['repassword']);
   

    $register=new RegisterController;
    $result_names=$register-> IsNameEmpty($fName,$lastName);
  if( $result_names){
    $result_password=$register->confirmPassword($password,$repassword);
    if($result_password)
    {
      $result_email=$register->isUserExist($email);
      if(!$result_email)
      { 
        $result_contact=$register-> isContactExist($contact);
        if(!$result_contact)
        {
        
           $result_nia=$register->isNiaExist($nia);
           if(!$result_nia)
            {   $result_phoneNumber=$register->phoneNumberFormat($contact);
             if($result_phoneNumber)
             {
               $result_checkEmailempty=$register->checkEmailEmpty($email);
               if($result_checkEmailempty)
              {
                $result_isCicnameEmpty=$register->IsCicNameEmpty( $cicName);
                if( $result_isCicnameEmpty)
                {
                  $result_isGpsNameEmpty=$register-> IsGpsEmpty($cicGps);
                  if( $result_isGpsNameEmpty)
                  {
                      $result_fieldEmpty=$register->IsFielEmpty($field);
                      if( $result_fieldEmpty)
                      {
                        $result_isRegionEmpty=$register->IsRegionEmpty($region);
                        if( $result_isRegionEmpty)
                          {
                            $result_isSubDivitionEmpty=$register->IsSubDivisionEmpty($subDivision);
                            if( $result_isSubDivitionEmpty)
                            { $result_isPasswordEmpty=$register->IsPasswordEmpty($password);
                                    
                              if($result_isPasswordEmpty){
                                /** */  $password_hash=password_hash($password,PASSWORD_DEFAULT);
                                if( $password_hash)
                                {
                                   $password=$password_hash;
                                    $register_query=$register->registration($fName,$lastName,$otherName,$contact,$nia,$field,$qualification,$email,$gender,$working,$cicName,$cicGps,$region,$subDivision,$securityQsn,$answer,$dateOfBirth,$password,$profile_img	);
                                   if($register_query)
                                      {
                                        echo "  <script>
                                        alert(' Registered Successfully  ');
                                        document.location.href='login.php';
                                        </script>";
                                          redirect("<h4 style='color:green;'>Registered Successfully !!!</h4>","login.php");
                                       }
                                     else
                                      {
                                        echo "  <script>
                                        alert(' Something Went Wrong !  ');
                                        document.location.href='register.php';
                                        </script>";
                                         redirect("<h4 style='color: orange;'>Something Went Wrong !!!</h4>","register.php");
                                      }
                                }  
                               else
                                {
                                  echo "  <script>
                                  alert(' Something Went Wrong with password seurity  ');
                                  document.location.href='register.php';
                                  </script>";
                                redirect("<h4 style='color: orange;' >Something Went Wrong with password seurity  !!!</h4>","register.php");
                               }
                        
                            }     
                                   else
                                    {
                                      echo "  <script>
                                  alert(' Password  field cannot be  empty !!  ');
                                  document.location.href='register.php';
                                  </script>";
                                      redirect("<h4 style='color: orange;' >Password  field cannot be  empty !!!</h4>","register.php");
                                     }
                                   
                          }
                                      else
                                      {
                                        echo "  <script>
                                        alert('Enter your Sub Division please Field cannot be empty !!  ');
                                        document.location.href='register.php';
                                        </script>";
                                      redirect("<h4 style='color: orange;'>Enter your Sub Division please Field cannot be empty !!!</h4>","register.php");
                                     }
                               }
                  
                                 else
                                 {
                                  echo "  <script>
                                        alert('Enter your Region please Field cannot be empty !!!  ');
                                        document.location.href='register.php';
                                        </script>";
                                  redirect("<h4 style='color: orange;'>Enter your Region please Field cannot be empty !!! </h4>","register.php");
                                 }
                      }
                             else 
                            {
                              echo "  <script>
                              alert('Enter your Field please Field cannot be empty !!!  ');
                              document.location.href='register.php';
                              </script>";
                              redirect("<h4 style='color: orange;'>Enter your Field please Field cannot be empty !!!</h4>","register.php");
                            }
                  } 
                       else
                       {
                        echo "  <script>
                        alert('Enter GPS please GPS cannot be empty !!!!  ');
                        document.location.href='ad_register.php';
                        </script>";
                        redirect("<h4 style='color: orange;'>Enter GPS please GPS cannot be empty !!!</h4>","register.php");
                      }
                } 
                    else
                     {
                      echo "  <script>
                      alert('Enter CIC Name please CIC Name cannot be empty !!  ');
                      document.location.href='ad_register.php';
                      </script>";
                      redirect("<h4 style='color: orange;'>Enter CIC Name please CIC Name cannot be empty !!!</h4>","register.php");
                    }                  
              } 
                    else
                    {
                      echo "  <script>
                      alert('Enter Email please Email cannot be empty !!!!  ');
                      document.location.href='register.php';
                      </script>";
                     redirect("<h4 style='color: orange;'>Enter Email please Email cannot be empty !!!</h4>","register.php");
                   }

               }
                    else
                    {
                      echo "  <script>
                      alert('Contact enetered must up to 10 digits  !!!!!!  ');
                      document.location.href='register.php';
                      </script>";
                     redirect("<h4 style='color: orange;'>Contact enetered must up to 10 digits  !!!</h4>","register.php");
                     }
            
             }      else{
              echo "  <script>
              alert('ID NIA Existed Already   !!!!!!!  ');
              document.location.href='register.php';
              </script>";
                      redirect("<h4 style='color: orange;' > ID NIA Existed Already   !!!</h4>","register.php");
                     }
            
           }
                else{
                  echo "  <script>
                  alert('Contact Existed Already  !! !!!!!!!  ');
                  document.location.href='register.php';
                  </script>";
                 redirect("<h4 style='color: orange;' > Contact Existed Already  !!!</h4>","register.php");
                }
        } 
          else
            { 
              echo "  <script>
                  alert('Email Existed Already  !!! !! !!!!!!!  ');
                  document.location.href='register.php';
                  </script>";
            redirect("<h4 style='color: orange;' >Email Existed Already  !!!</h4>","register.php");
            }
  }
           else
            {     
              echo "  <script>
              alert('Password and Confirm Password does not match  !!!!!!!  ');
              document.location.href='register.php';
              </script>";     
             redirect("<h4 style='color: orange;' > Password and Confirm Password does not match  !!!</h4>","register.php");
          }
    
}
  else{
    echo "  <script>
    alert('first Name and Last Name cannot be left Empty  !!!!!!  ');
    document.location.href='register.php';
    </script>";  
    redirect("<h4 style='color: orange;' > first Name and Last Name cannot be left Empty  !!!</h4>","register.php");
  }

}

?>
