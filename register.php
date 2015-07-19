<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<title>注册结果</title>
</head>

<body>
<div data-role="page">
	 <div data-role="header" data-position="fixed">
     	<a href="register.html" data-transition="flow" data-direction="reverse" data-icon="arrow-l">返回</a>
     	<h1>注册结果</h1>
     </div>
     <div data-role="content">
     <?php
	 	$username = $_POST['username'];
		$password = $_POST['password'];
		if(!$password || !$username)
		{
			echo '<h1>注册失败，信息不全！</h1>';
		}
		else
		{
			@ $db = new MySQLi('localhost','root','ilovemyself','yueba');
			if($db->connect_errno)
			{
				echo 'Failed to connect the database.<br/>';
				exit;
			}
	
			$query = "insert into users values ('".$username."','".$password."')";
			$result = $db->query($query);
			if($result)
			{
				echo '<li>您已注册成功！</li>';
				echo '<a href="login.html" data-role="button" data-icon="arrow-l" data-transition="flow">去登陆</a>';
			}
						
			$db->close();
		}
	 ?>
     	
     </div>
     <div data-role="footer" data-position="fixed" >
     	<h3>Mwzz</h3>
     </div>
</div>
</body>
</html>