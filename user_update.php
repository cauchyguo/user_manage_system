<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="EditPlus®">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Cauchy
 * Date: 2018/12/25
 * Time: 12:59
 */
$intNo = $_POST["no"];
$strName = $_POST["name"];
$intAge = $_POST["age"];
$strIntro = $_POST["intro"];
$link = new mysqli("localhost", "root", "", "myclass");
if ($link->connect_errno) {
    die("connect Error:" . $link->connect_error);
} else {
    $sql = "update `user` set user_name='{$strName}',user_age='{$intAge}',user_intro='{$strIntro}' where user_no='{$intNo}'";
    $result = $link->query($sql);
    if ($result)
        echo "更新成功";
    else
        echo "更新失败";
}
//关闭数据库
//	$result->close();
$link->close();
?>
<br><a href=user_show.php>返回</a>
</body>
</html>

