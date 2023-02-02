<?php
require_once "method-kader.php";
$kader = new Kader();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
   case 'GET':
         if(!empty($_GET["id"]))
         {
            $id=intval($_GET["id"]);
            $kader->get_kader($id);
         }
         else
         {
            $kader->get_kaders();
         }
         break;
   case 'POST':
         if(!empty($_GET["id"]))
         {
            $id=intval($_GET["id"]);
            $kader->update_kader($id);
         }
         else
         {
            $kader->insert_kader();
         }     
         break; 
   case 'DELETE':
          $id=intval($_GET["id"]);
            $kader->delete_kader($id);
            break;
   default:
      // Invalid Request Method
         header("HTTP/1.0 405 Method Not Allowed");
         break;
      break;
}
 
 
 
 
?>