<?php
require_once "../config/config.php";
class Kader 
{
 
   public  function get_kaders()
   {
      global $conn;
      $query="SELECT * FROM user WHERE role = 1";
      $data=array();
      $result=$conn->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get List Kader Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }
 
   public function get_kader($id=0)
   {
      global $conn;
      $query="SELECT * FROM user WHERE role = 1";
      if($id != 0)
      {
         $query="SELECT * FROM user WHERE role = 1 AND id=".$id." LIMIT 1";
      }
      $data=array();
      $result=$conn->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get Kader Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);      
   }
 
   public function insert_kader()
      {
         global $conn;
         $arrcheckpost = array('nama' => '', 'username' => '', 'password' => '', 'alamat' => '', 'umur' => '', 'telp' => '', 'role' => '', 'created_at' => '');

         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
               $result = mysqli_query($conn, "INSERT INTO user SET
               nama = '$_POST[nama]',
               username = '$_POST[username]',
               pass = 'md5($_POST[password])',
               alamat = '$_POST[alamat]',
               umur = '$_POST[umur]',
               telp = '$_POST[telp]',
               role = '1',
               created_at = 'date(Y-m-d H:i:s)'");
                
               if($result)
               {
                  $response=array(
                     'status' => 1,
                     'message' =>'Kader Added Successfully.'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Kader Addition Failed.'
                  );
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Do Not Match'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function update_kader($id)
      {
         global $conn;
         $arrcheckpost = array('nama' => '', 'username' => '', 'password' => '', 'alamat' => '', 'umur' => '', 'telp' => '');
         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
               $result = mysqli_query($conn, "UPDATE user SET
               nama = '$_POST[nama]',
               username = '$_POST[username]',
               pass = 'md5($_POST[password])',
               alamat = '$_POST[alamat]',
               umur = '$_POST[umur]',
               telp = '$_POST[telp]',
               WHERE id='$id'");
          
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'Kader Updated Successfully.'
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'Kader Updation Failed.'
               );
            }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Do Not Match'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function delete_kader($id)
   {
      global $conn;
      $query="DELETE FROM user WHERE id=".$id;
      if(mysqli_query($conn, $query))
      {
         $response=array(
            'status' => 1,
            'message' =>'Kader Deleted Successfully.'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Kader Deletion Failed.'
         );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }
}
 
 ?>