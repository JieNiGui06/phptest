<?php
// 定义变量并默认设置为空值
//$nameErr = $emailErr = $genderErr = $websiteErr = "";
//$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
}
else{
    //echo $_GET["a"];
   $url='https://www.php.cn/php-weizijiaocheng-391093.html';
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
