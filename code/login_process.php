<?php
include '../conn.php';

$username = $_POST['usernameLogin'];
$password = $_POST['passwordLogin'];

$sql = "SELECT * FROM user_data WHERE username_user = '$username' AND password_user = '$password'";
$result = mysqli_query($Open, $sql);

while ($data = mysqli_fetch_array($result)) {
	$idUser = $data['id_user'];
	$nameUser = $data['name_user'];
	$usernameUser = $data['username_user'];
	$classUser = $data['class_user'];
}

$count = mysqli_num_rows($result);

if ($count > 0 ) {
	session_start();
	$_SESSION['id_user'] = $idUser;
	$_SESSION['username'] = $usernameUser;
	$_SESSION['name'] = $nameUser;
	$_SESSION['class'] = $classUser;
	$_SESSION['status'] = 'login';

	if ($_SESSION['class'] != "Admin") {
	?>
	<script language="JavaScript">
		window.history.go(-2);
	</script>
	<?php
	}else{
		?>
		<script language="JavaScript">
		document.location='../view/adminSide/homeAdmin.php';
	</script>
	<?php
	}
}else{
	?>
	<script language="JavaScript">
		alert('Username atau password anda salah. Silahkan coba lagi!');
		window.history.go(-2);
	</script>
	<?php
}
?>