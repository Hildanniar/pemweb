<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if (isset($_POST['send'])) {
			$user_name = $_POST['user_name'];
			$user_email = $_POST['user_email'];
			$user_message = $_POST['user_message'];

			echo "Terima kasih atas kritik dan sarannya";	
		}
	?>
</body>
