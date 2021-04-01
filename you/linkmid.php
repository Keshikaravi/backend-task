<?php


 
    // Open a webpage
    $homepage = file_get_contents("https://www.linkedin.com/company/microsoft/");
    // echo the homepage to see the content.

    // Set the filename
    $file = "link.html";
    // Write the contents back to the file
    file_put_contents($file, $homepage);

?>