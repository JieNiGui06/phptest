<?php
// 定义变量并默认设置为空值
//$nameErr = $emailErr = $genderErr = $websiteErr = "";
//$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
} else {
    //echo $_GET["a"];
    if ($_GET["t"] == "w") {
        $myfile = fopen("test.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $_GET["content"]);
        fclose($myfile);
        echo "ok.";
    } else {
        $myfile = fopen("test.txt", "r") or die("Unable to open file!");
        echo fread($myfile, filesize("test.txt"));
        fclose($myfile);
    }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
