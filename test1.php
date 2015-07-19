<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test1</title>
</head>

<body>
<h1>BOB</h1>
<?php
	echo '<p>Order Processed. </p>';
	$tire = $_POST['tire'];
	$apple = $_POST['apple'];
	$shoe = $_POST['shoe'];
	echo 'You have ordered: <br/>';
	echo $tire.' tires '.$apple.' apples '.$shoe.' shoes. <br/>';
?>
</body>
</html>