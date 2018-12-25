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
//读取编号
$intNo = $_GET["no"];
//数据库连接
$link = new mysqli("localhost", "root", "", "myclass");
if ($link->connect_errno) {
    die("connect Error:" . $link->connect_error);
} else {

//设置数据操作
    $sql = "select * from user where user_no=" . $intNo;

//执行数据操作
    $result = $link->query($sql);
    $user = $result->fetch_assoc();


//关闭数据库
//	$result->close();
    $link->close();
}
?>
<section>
	<form action="user_update.php" method="post">
		<table>
			<tr>
				<td style="position:absolute; left:90px; top:90px; ">编号:</td>
				<input type="number" id="user_no" name="no" value=<?php echo $user["user_no"]?> readonly="true" style="position:absolute; left:150px; top:90px; "/><br>
			</tr>
			<tr>
				<td style="position:absolute; left:90px; top:120px; ">姓名:</td>
				<input type="text" id="user_name" name="name" value="<?php echo $user["user_name"]?>" style="position:absolute; left:150px; top:120px; "/><br>
			</tr>
			<tr>
				<td style="position:absolute; left:90px; top:150px; ">年龄:</td>
				<input type="number" id="user_age" name="age" value=<?php echo $user["user_age"]?> style="position:absolute; left:150px; top:150px; "/><br>
			</tr>
			<tr>
				<td style="position:absolute; left:90px; top:180px; ">介绍:</td>
				<input type="text" id="user_intro" name="intro" value="<?php echo $user["user_intro"]?>" style="position:absolute; left:150px; top:180px; "/><br>
			</tr>
			<tr>
				<td style="position:absolute; left:90px; top:210px; ">提交:</td>
				<input type="submit" value="确定" style="position:absolute; left:200px; top:210px; "/>
			</tr>
		</table>
	</form>
</section>
</body>
</html>
