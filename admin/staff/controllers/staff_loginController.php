<?php 
class loginController
{
    public function __construct(){
        $db=new DatabaseConnection;
        $this->conn=$db->conn;
    }
        public function adminAccount($email)
    { 
         $checkLogin="SELECT * FROM admin WHERE email='$email' LIMIT 1";
         $result=$this->conn->query($checkLogin);
         if($result->num_rows < 1)
         {
            return false;
         }
             
    } 
       
    public function adminLogin($email,$password){
      $adminLogin="SELECT * FROM admin WHERE email='$email' LIMIT 1";
      $result=$this->conn->query($adminLogin);
      if($result->num_rows >0){
        if($data=$result->fetch_assoc()){
          $hash_pass=password_verify($password,$data['password']);
          if($hash_pass==false){
            return false;
          }elseif($hash_pass){
            $this->adminAuthentication($data);
            return true; 
          }
        }

      } 
      else {
        return false;
      }
    }
  
     
      private function adminAuthentication($data)
      {
        $_SESSION['authenticated']=true;
        //$_SESSION['auth_role']= $data['role_as'];
        $_SESSION['auth_admin']=[
         'admin_id'=>$data['id'],
         'admin_fname'=>$data['fName'],
         'admin_email'=>$data['email'],
         'admin_contact'=>$data['contact'],
         'admin_field'=>$data['field'],
         'admin_qualification'=>$data['qualification'],
         'admin_gender'=>$data['gender'],
         'admin_nia'=>$data['nia'],
         'admin_cicName'=>$data['cicName'],
         'admin_cicps'=>$data['cicGps'],
         'admin_working'=>$data['working'],
         'admin_region'=>$data['region'],
         'admin_subDivision'=>$data['subDivision'],
         'admin_profile'=>$data['profile_img']

        ];
      }
      public function isLoggedIn(){
        if(isset($_SESSION['authenticated'])===TRUE){
         redirect("<h4 style='color:red;' >You are Already LoggedIn</h4>","index.php");
        }
        else{
            return false;
        }
      }

      public function logout(){
        if(isset($_SESSION['authenticated'])===TRUE){
        unset($_SESSION['authenticated']);
        unset($_SESSION['auth_admin']);
         return true;
 
        } 
        else{
          return false;
        }
      }

}





?>