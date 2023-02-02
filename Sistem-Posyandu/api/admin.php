<?php
require_once "method-admin.php";
$admin = new Admin();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
   case 'GET':
         if(!empty($_GET["id"]))
         {
            $id=intval($_GET["id"]);
            $admin->get_admin($id);
         }
         else
         {
            $admin->get_admins();
         }
         break;
   case 'POST':
         if(!empty($_GET["id"]))
         {
            $id=intval($_GET["id"]);
            $admin->update_admin($id);
         }
         else
         {
            $admin->insert_admin();
         }     
         break; 
   case 'DELETE':
          $id=intval($_GET["id"]);
            $admin->delete_admin($id);
            break;
   default:
      // Invalid Request Method
         header("HTTP/1.0 405 Method Not Allowed");
         break;
      break;
}
 
 
 
 
?>