<?php
error_reporting(0);
    echo "#################################\n";
    echo "#         Code Nuklir           #\n";
    echo "#      Create By MarsHall       #\n";
    echo "#################################\n";
    echo "Pilih Nomor 1 - 30 : ";
    $is = trim(fgets(STDIN));
function http_request($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 5.0.2; Redmi Note 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.96 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);      
    return $output;
}
$sh = http_request("http://nuklir.nauliani.com/api.php");
$sh = json_decode($sh, TRUE);



$id = $sh[$is]['id'];
$title = $sh[$is]['title'];
$code = $sh[$is]['code'];
$description = $sh[$is]['description'];

echo "No          : $id\n";
echo "Title       : $title\n";
echo "Code        : $code\n";
echo "Description : $description\n";
 

?>
