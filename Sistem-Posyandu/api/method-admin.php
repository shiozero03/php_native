<?php
require_once "../config/config.php";
class Admin 
{
 
   public  function get_admins()
   {
      global $conn;
      $query="SELECT * FROM user WHERE role = 0";
      $data=array();
      $result=$conn->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get List Admin Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }
 
   public function get_admin($id=0)
   {
      global $conn;
      $query="SELECT * FROM user WHERE role = 0";
      if($id != 0)
      {
         $query="SELECT * FROM user WHERE role = 0 AND id=".$id." LIMIT 1";
      }
      $data=array();
      $result=$conn->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get Admin Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);      
   }
 
   public function insert_admin()
      {
         global $conn;
         $arrcheckpost = array('nama' => '', 'username' => '', 'password' => '', 'role' => '', 'created_at' => '');

         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
               $result = mysqli_query($conn, "INSERT INTO user SET
               nama = '$_POST[nama]',
               username = '$_POST[username]',
               pass = 'md5($_POST[password])',
               role = '0',
               created_at = 'date(Y-m-d H:i:s)'");
                
               if($result)
               {
                  $response=array(
                     'status' => 1,
                     'message' =>'Admin Added Successfully.'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Admin Addition Failed.'
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
 
   function update_admin($id)
      {
         global $conn;
         $arrcheckpost = array('nama' => '', 'username' => '', 'password' => '');
         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
               $result = mysqli_query($conn, "UPDATE user SET
               nama = '$_POST[nama]',
               username = '$_POST[username]',
               pass = 'md5($_POST[password])',
               WHERE id='$id'");
          
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'Admin Updated Successfully.'
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'Admin Updation Failed.'
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
 
   function delete_admin($id)
   {
      global $conn;
      $query="DELETE FROM user WHERE id=".$id;
      if(mysqli_query($conn, $query))
      {
         $response=array(
            'status' => 1,
            'message' =>'Admin Deleted Successfully.'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Admin Deletion Failed.'
         );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }
}
 
 ?>