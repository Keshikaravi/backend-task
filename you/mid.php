<?php

    $cname = $_REQUEST['cname'];

    if($cname != NULL)
    {
    // Open a webpage
    $homepage = file_get_contents("https://www.youtube.com/c/$cname/about");
    // echo the homepage to see the content.

    // Set the filename
    $file = "$cname.html";
    // Write the contents back to the file
    file_put_contents($file, $homepage);

    header("Location:output.php?cname=". $cname);
}
?>