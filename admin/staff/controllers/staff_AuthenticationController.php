<?php 

class staffAuthenticationController
{
    public function __construct()
    {
        $db=new DatabaseConnection;
        $this->conn=$db->conn;
        $this->checkIsLoggedIn();
    }
    
    public function admin()
    {
       $admin_id=$_SESSION['auth_admin']['admin_id'];
       $checkAdmin="SELECT id, role_as FROM admin WHERE id='$admin_id' AND role_as='1' LIMIT 1";
       $result=$this->conn->query($checkAdmin);
       if($result->num_rows == 1)
       {
           return true;
       } else
       { 
        echo "  <script>
        alert('You are not Authorized as Admin');
        document.location.href='index.php';
        </script>";
        redirect("<h4 style='color:red;'>You are not Authorized as Admin</h4>","index.php");
     return false;
       }
    }
    
 
  private function checkIsLoggedIn()
  {  
    if(!isset($_SESSION['authenticated'])){
      echo "  <script>
      alert('You Need To Login to Access the page');
      document.location.href='staff_login.php';
      </script>";
  redirect("<h4 style='color:red;' >Login to Access the page</h4>","staff_login.php");
     return false;
    } else{ 
  return true;
    }


  }
 
  public function authAdminDetail()  
  {
    $checkAuth=$this->checkIsLoggedIn();
    if($checkAuth){
    $admin_id= $_SESSION['auth_admin']['admin_id'];
    $getUserData=" SELECT * FROM admin WHERE id='$admin_id' LIMIT 1";
    $result=$this->conn->query($getUserData);
     if($result->num_rows > 0){
       $data=$result->fetch_assoc();
       return $data;
     } else{
      echo "  <script>
      alert('Something Went wong');
      document.location.href='staff_login.php';
      </script>";
        redirect("<h4>Something Went wong </h4>","staff_login.php");
     }
    }else{
        return false;
    }
  }
 
}

 $authenticated=new staffAuthenticationController;

?>