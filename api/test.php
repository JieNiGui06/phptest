<?php
// 定义变量并默认设置为空值
//$nameErr = $emailErr = $genderErr = $websiteErr = "";
//$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
}
else{
    //echo $_GET["a"];
   $url='https://ovooa.caonm.net/API/QQ_Music/?msg=%E5%91%A8%E6%9D%B0%E4%BC%A6&n=1&br=4';
$html = file_get_contents($url);
echo $html;
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
