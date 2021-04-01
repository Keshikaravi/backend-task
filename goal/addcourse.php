<?php 
// Include the database configuration file  
require_once 'dbconfig.php'; 



$name = $_REQUEST['keyname'];
$key= $_REQUEST['key'];
$status= $_REQUEST['stat'];
$usrid= $_REQUEST['usrid'];





 
// If file upload form is submitted 
if(isset($_POST["submit"])){ 

            // Insert image content into database 
            $insert = $db->query("INSERT into apikey (name, akey, statuss, userr) VALUES ('$name','$key', '$status', '$usrid')"); 
             
 
} 
 
// Display status message 
header("Location:index.php")
?>