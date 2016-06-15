<?php
$dir=__DIR__."/"."php_downs"."/"."img.jpg";
$myfile = fopen($dir, "w");
echo $dir;
$source = "https://i.ytimg.com/vi/-S-LAFsEz2U/hqdefault.jpg";
#$ch = curl_init();
#curl_setopt($ch, CURLOPT_URL, $source);
#curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
#curl_setopt($ch, CURLOPT_SSLVERSION,3);
#$data = curl_exec ($ch);
//echo $data;
$error = curl_error($ch); 
$file = fopen($dir, "w");
fputs($file, $data);
curl_close ($ch);
echo"xxxxxxxxxxxx" ;
echo "cccccccccccc";
echo "cccccccccccc";
echo "cccccccccccc";
echo "cccccccccccc";
echo "cccccccccccc";
?>
