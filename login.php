<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script> 
<title>登陆结果</title>
</head>

<body>
<div data-role="page" id="pagezero">
    	<div data-role="header" data-position="fixed">
        	<a href="login.html" data-role="button" data-icon="home" data-transition="flow" data-direction="reverse">返回</a>
        	<h1>登陆结果</h1>
        </div>
        <div data-role="content">
        	<?php
				$username = $_POST['username'];
				$password = $_POST['password'];
				@ $db = new MySQLi('localhost','root','ilovemyself','yueba');
				if($db->connect_errno)
				{
					echo 'Failed to connect the database.<br/>';
					exit;
				}
				$query = "select * from users where username ='".$username."'";
				$result = $db->query($query);
				$num = $result->num_rows;
				
				if(!$num)
				{
					echo '<h1>不存在此用户！</h1>';
				}
				else
				{
					$row = $result->fetch_assoc();
					$thePassword = $row['password'];
					if($thePassword != $password)
					{
						echo '<h1>密码错误！</h1>';
					}
					else
					{
						echo '<h1>欢迎 '.$username.' ！</h1>';
						echo '<a href="index.php" data-transition="flow" data-role="button" data-icon="arrow-r" data-inline="true">访问约吧！</a>';
					}
				}
				
			?>
        </div>
         <div data-role="footer" data-position="fixed" >
        	<h3>Web 15 组</h3>
        </div>
    </div>
</body>
</html>