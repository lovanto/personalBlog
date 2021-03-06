<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ina">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lovanto Blog</title>

	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/modal.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<link rel="icon" href="icon.ico" type="image/x-icon" />
</head>
<body>

	<?php 
	// CLOUDINARY
	require 'vendor/autoload.php';
	require 'config.php';

	// WEBSITE
	include 'conn.php';
	include 'view/header.php';
	include 'view/body.php';
	include 'view/footer.php';
	?>
</body>
</html>