<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<title>浏览活动</title>
</head>

<body>
    <div data-role="page">
        <div data-role="header" data-position="fixed">
        <a href="index.php" data-role="button" data-icon="home" data-transition="flow" data-direction="reverse">首页</a>
        	<h1>浏览活动</h1>
        </div>
		<div data-role="content">
        <?php
			@ $db = new MySQLi('localhost','root','ilovemyself','yueba');
			if($db->connect_errno)
			{
				echo 'Failed to connect the database.<br/>';
				exit;
			}
	
			$query = "select * from activities";
			$result = $db->query($query);
			$num = $result->num_rows;
			echo '<h1>现有'.$num.'个活动 </h1><br/>';
			for($i=0;$i<$num;$i++)
			{
				$row = $result->fetch_assoc();
				$aid = $row['aid'];
				$title = $row['title'];
				$detail = $row['detail'];
				$people = $row['people'];
				$boss = $row['boss'];
				$phone = $row['phone'];
				
				echo '<div>';
				echo '<h2>活动编号： '.$aid.'</h2>';
				echo '<ul data-role="listview" data-inset="true">';
				echo '<li>活动名称： '.$title.'</li>';
				echo '<li>活动介绍： '.$detail.'</li>';
				echo '<li>预计参与人数： '.$people.'</li>';
				echo '<li>活动负责人： '.$boss.'</li>';
				echo '<li>联系方式： '.$phone.'</li>';			
				echo '</ul>';
				echo '</div>';
			}
			
			$result->free();			
			$db->close();
			

		?>
        </div>
        <div data-role="footer" data-position="fixed">
        	<h3>Mwzz</h3>
        </div>
      </div>
</body>
</html>