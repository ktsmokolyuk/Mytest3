<?php

$mysecretkey = "7NrcydcId16B05b3n4iA";
$path = "/";
$filename = "movie1.m3u8";
$expiry = strtotime("+1 hour");
$b64 = base64_encode(md5($mysecretkey.$path.$expiry,true));
$b64u = rtrim(str_replace(array('+','/'),array('-','_'),$b64),'=');
$url = "https://retloko.com/hls/".$filename."?e=$expiry&st=$b64u";

echo "$url\n";

?>
