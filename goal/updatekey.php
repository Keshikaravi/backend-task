<?php 
// Include the database configuration file  
require_once 'dbconfig.php'; 



$user = $_REQUEST['user'];
$key= $_REQUEST['key'];



echo $user;
echo $key;

 
if(isset($_POST["submit"])){ 

            // Insert image content into database 
            $insert = $db->query("UPDATE apikey SET statuss='active' WHERE id=$key"); 
             
 
} 
 
// Display status message 
header("Location:index.php")
?>