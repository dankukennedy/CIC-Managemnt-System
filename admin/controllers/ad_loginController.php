<?php 
class loginController
{
    public function __construct(){
        $db=new DatabaseConnection;
        $this->conn=$db->conn;

    }
        public function managerAccount($email)
    { 
         $checkLogin="SELECT * FROM managers WHERE email='$email' LIMIT 1";
         $result=$this->conn->query($checkLogin);
         if($result->num_rows < 1)
         {
            return false;
         }
             
    } 
       
    public function managerLogin($email,$password){
      $managersLogin="SELECT * FROM managers WHERE email='$email' LIMIT 1";
      $result=$this->conn->query($managersLogin);
      if($result->num_rows >0){
        if($data=$result->fetch_assoc()){
          $hash_pass=password_verify($password,$data['password']);
          if($hash_pass==false){
            return false;
          }elseif($hash_pass){
            $this->managerAuthentication($data);
            return true; 
          }
        }

      } 
      else {
        return false;
      }
    }
  
  

     
      private function managerAuthentication($data)
      {
        $_SESSION['authenticated']=true;
        //$_SESSION['auth_role']= $data['role_as'];
        $_SESSION['auth_manager']=[
         'manager_id'=>$data['id'],
         'manager_fname'=>$data['fName'],
         'manager_email'=>$data['email'],
         'manager_contact'=>$data['contact'],
         'manager_field'=>$data['field'],
         'manager_qualification'=>$data['qualification'],
         'manager_gender'=>$data['gender'],
         'manager_nia'=>$data['nia'],
         'manager_cicName'=>$data['cicName'],
         'manager_cicps'=>$data['cicGps'],
         'manager_working'=>$data['working'],
         'manager_region'=>$data['region'],
         'manager_subDivision'=>$data['subDivision'],
         'manager_profile'=>$data['profile_img']

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
        unset($_SESSION['auth_manager']);
         return true;
 
        } 
        else{
          return false;
        }
      }

}





?>