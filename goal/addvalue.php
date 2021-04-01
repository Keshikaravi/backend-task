<?php 
// Include the database configuration file  
require_once 'dbconfig.php'; 



$keyword = $_REQUEST['keyword'];






 
// If file upload form is submitted 
if(isset($_POST["submit"])){ 

            // Insert image content into database 
            $insert = $db->query("UPDATE continous SET search='$keyword' WHERE id=1"); 
             
 
} 
 
// Display status message 
header("Location:continious.php")
?>