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
//数据库连接
$link = new mysqli("localhost", "root", "", "myclass");
if ($link->connect_errno) {
    die("connect Error:" . $link->connect_error);
} else {

//设置数据操作
    $sql = "select * from user";

//执行数据操作
    $result = $link->query($sql);

//读取记录
    echo "<table border=1 width=80%>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["user_no"] . "</td>";
        echo "<td>" . $row["user_name"] . "</td>";
        echo "<td>" . $row["user_age"] . "</td>";
        echo "<td>" . $row["user_intro"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td><a href=user_active.php?no=" . $row["user_no"] . ">激活</a></td>";
        echo "<td><a href=user_delete.php?no=" . $row["user_no"] . ">删除</a></td>";
        echo "<td><a href=user_updateinfo_collect.php?no=" . $row["user_no"] . ">更新</a></td>";
        echo "</tr>";
    }
    echo "</table>";

//关闭数据库
//	$result->close();
    $link->close();
}
?>
</body>
</html>
