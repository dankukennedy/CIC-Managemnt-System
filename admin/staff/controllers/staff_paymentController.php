<?php 
class PaymentController
{
    public function __construct()
    {
        $db=new DatabaseConnection;
        $this->conn=$db->conn;
    }


 public function edit($id)
   {  
    $payment_id=validateInput($this->conn,$id);
     $paymentQry="SELECT * FROM payments WHERE id='$payment_id' LIMIT 1";
     $result=$this->conn->query($paymentQry);
     if($result->num_rows == 1)
       {
        $data=$result->fetch_assoc();
        return $data;
       } else
       {
         return false;
       }
   }

    public function index()
    {
        $paymentQry="SELECT * FROM payments ";
        $result=$this->conn->query($paymentQry);
        if($result->num_rows > 0)
        {
         return $result;   
        } else
          {
            return false;
          }
    }

    public function createPayment($inputData)
    {
        $data="'".implode("','",$inputData)."'";
        //echo $data;

        $paymentQry="INSERT INTO payments(region,cicName,email,fName,account,subDivision,accountNumber,accountName,bankBranch,number) VALUES($data)";
        $result=$this->conn->query($paymentQry);
       if($result)
       {
        return true;
       } else
       {
        return false;
       }
    }


    public function update($inputData,$id)
    {
      $payment_id=validateInput($this->conn,$id); 
      $region=$inputData['region'];
      $cicName=$inputData['cicName'];
      $email=$inputData['email'];
      $fName=$inputData['fName'];
      $account=$inputData['account'];
      $subDivision=$inputData['subDivision'];
      $accountNumber=$inputData['accountNumber'];
      $accountName=$inputData['accountName'];
      $bankBranch=$inputData['bankBranch'];
      $number=$inputData['number'];      
      
      $paymentUpdateQry=" UPDATE payments SET region='$region',cicName='$cicName',email='$email',account='$account',subDivision='$subDivision',
      accountNumber='$accountNumber',fName=' $fName',accountName='$accountName',bankBranch='$bankBranch',number='$number' WHERE id='$payment_id' LIMIT 1 ";
      $result =$this->conn->query($paymentUpdateQry);
      if($result)
       {
        return true;
       }  else
         {
          return  false;
         }

    }

    public function delete( $id)
     {
      $payment_id=validateInput($this->conn,$id); 
      $paymentDeleteQuery="DELETE FROM payments WHERE id='$payment_id' LIMIT 1";
      $result=$this->conn->query($paymentDeleteQuery);
      if($result)
        {
          return true;
        } 
        else
         {
           return false;
         }

     }
   

}

?>