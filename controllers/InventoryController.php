<?php 
class InventoryController  
{
    public function __construct()
    {
        $db=new DatabaseConnection;
        $this->conn=$db->conn;
    }



 public function edit($id)
   {  
    $inventory_id=validateInput($this->conn,$id);
     $inventoryQry="SELECT * FROM inventory WHERE id='$inventory_id' LIMIT 1";
     $result=$this->conn->query($inventoryQry);
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
        $inventoryQry="SELECT * FROM inventory ";
        $result=$this->conn->query($inventoryQry);
        if($result->num_rows > 0)
        {
         return $result;   
        } else
          {
            return false;
          }
    }

    public function createInventory($inputData)
    {
        $data="'".implode("','",$inputData)."'";
        //echo $data;

        $inventoryQry="INSERT INTO inventory(region,cicName,computers,ups,airConditioner,scanner,fan,desk,chair,projector,printer,router,photocoppier,extensionBoard,others) VALUES($data)";
        $result=$this->conn->query($inventoryQry);
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
      $inventory_id=validateInput($this->conn,$id); 
      $cicName=$inputData['cicName'];
      $computers=$inputData['computers'];
      $region=$inputData['region'];
      $ups=$inputData['ups'];
      $airConditioner=$inputData['airConditioner'];
      $scanner=$inputData['scanner'];
      $fan=$inputData['fan'];
      $desk=$inputData['desk'];
      $chair=$inputData['chair'];
      $projector=$inputData['projector'];
      $printer=$inputData['printer'];
      $router=$inputData['router'];
      $photocoppier=$inputData['photocoppier'];
      $extensionBoard=$inputData['extensionBoard'];
      $others=$inputData['others'];
      
$inventoryUpdateQry="UPDATE inventory SET region='$region',
cicName='$cicName',computers='$computers',ups='$ups',airConditioner='$airConditioner',
scanner='$scanner',fan='$fan',desk='$desk',chair='$chair',
projector='$projector',printer='$printer',router='$router',photocoppier='$photocoppier',
extensionBoard='$extensionBoard',
others='$others' WHERE id='$inventory_id' LIMIT 1 ";
      $result =$this->conn->query($inventoryUpdateQry);
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
      $inventory_id=validateInput($this->conn,$id); 
      $inventoryDeleteQuery="DELETE FROM inventory WHERE id='$inventory_id' LIMIT 1";
      $result=$this->conn->query($inventoryDeleteQuery);
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