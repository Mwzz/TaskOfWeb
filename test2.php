<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<h1>Show results</h1>
<?php
	@ $db = new MySQLi('localhost','root','ilovemyself','dbname');
	if($db->connect_errno)
	{
		echo 'Error: failed to connect the database.<br/>'; 
		exit;
	}
	$query = "select * from customers";
	$result = $db->query($query);
	$num = $result->num_rows;
	echo 'There are '.$num.' results<br/>';
	for($i=0;$i<$num;$i++)
	{
		$row = $result->fetch_assoc();
		echo ($i+1).'.<br/>';
		echo 'customerid: '.$row['customerid'].',name: '.$row['name'].',address: '.$row['address'].',city: '.$row['city'].'.<br/>';
	}
	$result->free();
	$db->close();
?>
</body>
</html>