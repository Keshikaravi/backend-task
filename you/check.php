<?php

$cname = $_REQUEST['cname'];


$input = file_get_contents("$cname.html");
$url=preg_match('/"canonical"[^"]+"\K[^"]+/',$input,$out)?$out[0]:null;
$tit=preg_match('/"title"[^"]+"\K[^"]+/',$input,$out)?$out[0]:null;
$img=preg_match('/"image_src"[^"]+"\K[^"]+/',$input,$out)?$out[0]:null;
$des=preg_match('/"keywords"[^"]+"\K[^"]+/',$input,$out)?$out[0]:null;
$desc=preg_match('/"channelId"[^"]+"\K[^"]+/',$input,$out)?$out[0]:null;





echo $tit;
echo "<br>";
echo $url;
echo "<br>";
echo $img;
echo "<br>";
echo $des;
echo "<br>";
echo $desc;


?>