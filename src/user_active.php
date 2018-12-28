<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="EditPlus®">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<title>用户激活中</title>
</head>
<body>
<?php
//读取编号
$intNo = $_GET["no"];

//数据库连接
$link = new mysqli("localhost", "root", "", "myclass");
if ($link->connect_errno) {
    die("connect Error:" . $link->connect_error);
} else {

//设置数据操作
    $sql = "update user set status=2 where user_no=" . $intNo;

//执行数据操作
    $result = $link->query($sql);
    if ($result)
        echo "激活成功";
    else
        echo "激活失败";

//关闭数据库
//	$result->close();
    $link->close();
}
?>
<br><a href=user_show.php>返回</a>
</body>
</html>
