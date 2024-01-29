<?php class updateController
{
   public function __construct()
   {
    $db=new DatabaseConnection;
    $this->conn=$db->conn;
   }

   public function edit($id)
   {
    $manager_id=validateInput($this->conn,$id);
    $managerQuery="SELECT * FROM zonal_managers WHERE id='$manager_id' LIMIT 1";
    $result=$this->conn->query( $managerQuery);
    if( $result->num_rows==1)
    {  $data=$result->fetch_assoc();
        return $data;

    }else{
         return false;
    }

   }

   public function update($fName,$lastName,$otherName,$contact,$field,$qualification,$working,$cicName,$cicGps,$region,$subDivision,$id)
   {
   $manager_id=validateInput($this->conn,$id);
    
  $fName=validateInput($this->conn, $_POST['fName']);
  $fName=ucwords($fName);
  $lastName=validateInput($this->conn, $_POST['lastName']);
  $lastName=ucwords($lastName);
  $otherName=validateInput($this->conn, $_POST['otherName']);
  $otherName=ucwords($otherName);
  $contact= validateInput($this->conn,$_POST['contact']);
  $contact= strtoupper($contact);
 // $nia= validateInput($this->conn,$_POST['nia']);
 // $nia=strtoupper($nia);
  $field= validateInput($this->conn,$_POST['field']);
  $field= ucwords($field );
  $qualification= validateInput($this->conn,$_POST['qualification']);
  $qualification= ucwords($qualification);
 // $email= validateInput($this->conn,$_POST['email']);
  //$gender= validateInput($this->conn,$_POST['gender']);
  //$gender= ucfirst($gender);
  $working= validateInput($this->conn,$_POST['working']);
  $working= ucwords($working);
  $cicName= validateInput($this->conn,$_POST['cicName']);
  $cicName=ucwords($cicName);
  $cicGps= validateInput($this->conn,$_POST['cicGps']);
  $cicGps= ucwords($cicGps );
  $region= validateInput($this->conn,$_POST['region']);
  $region=  ucwords( $region );
  $subDivision= validateInput($this->conn,$_POST['SubDivision']);
  $subDivision=ucwords($subDivision );

    $managerUpdateQuery=" UPDATE Zonal_managers SET fName='$fName',lastName='$lastName',otherName='$otherName',contact='$contact',field='$field',qualification='$qualification',working='$working',
    cicName='$cicName',cicGps='$cicGps',region='$region',subDivision='$subDivision'  WHERE id='$manager_id' LIMIT 1";
   $result=$this->conn->query($managerUpdateQuery);
   if($result)
   { 
     return true;
   }else 
   { 
    return false;
   }

   }


}
 
?>