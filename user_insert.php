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
	$intNo = $_POST["no"];
	$strName = $_POST["name"];
	$intAge = $_POST["age"];
	$strIntro = $_POST["intro"];
//	echo "the user no is " . $intNo . "<br>";
//	echo "the user name is " . $strName . "<br>";
//	echo "the user age is " . $intAge . "<br>";
//	echo "the user introduction is " . $strIntro . "<br>";

//数据库连接
	$link = new mysqli("localhost", "root", "", "myclass");
	if($link->connect_errno)
	{
		die("connect Error:" . $link->connect_error);
	}
	else
	{

//设置数据操作
	$sql = "insert into user(user_no, user_name, user_age, user_intro, status) values(" . $intNo . ",'" . $strName . "'," . $intAge . ", '" . $strIntro . "', 1)";


//执行数据操作
    $result = $link->query($sql);
    if ($result)
        echo "添加成功";
    else
        echo "添加失败";
//关闭数据库
//	$result->close();
	$link->close();
	}
  ?>
 <br><a href=user_show.php>返回</a>
 </body>
</html>
