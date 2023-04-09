<?php
// 定义变量并默认设置为空值
//$nameErr = $emailErr = $genderErr = $websiteErr = "";
//$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
}
else{
    //echo $_GET["a"];
    //br = 3 is most.
   $url='https://ovooa.caonm.net/API/QQ_Music/?mid='.$_GET["mid"].'&br='.$_GET["br"];
$html = file_get_contents($url);
$jobj = json_encode($html);

$songname =  $jobj["data"]["song"];
$singer = $jobj["data"]["singer"];
$purl = $jobj["data"]["music"];
echo '<html><head><meta name="viewport" content="width=device-width"></head><body>
<p style="text-align: center;color:white;font-size:25px"><a>'.$songname.' - '.$singer.'</a></p>

<video controls="" autoplay="" name="media" __idm_id__="4808705"><source src="'.$purl.'" type="audio/mpeg"></video></body></html>';
}

?>
