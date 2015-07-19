<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test3</title>
</head>

<body>
<?php
	$name = "wakaka";
	$address = "999 Street";
	$city = "BeiJing";
	
	@ $db = new MySQLi('localhost','root','ilovemyself','dbname');
	if($db->connect_errno)
	{
		echo 'Failed to connect the database.<br/>';
		exit;
	}
	
	$query = "insert into customers values (null,'".$name."','".$address."','".$city."')";
	$result = $db->query($query);
	if($result)
	{
		echo $db->affected_rows." rows affected.<br/>";
	}
	//$result->free();
	$db->close();
?>
</body>
</html>