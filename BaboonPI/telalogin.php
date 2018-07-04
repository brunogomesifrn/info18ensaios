<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$usuario = $_POST['email'];
$sen = $_POST['senha'];


if (($usuario=="admin@gmail.com") && ($sen==123)) {
	header('Location: tela_principal.html');
} else {
	echo "<script>alert('Email e/ou senha incorreto(s)');window.location='teladelogin.html'</script>";
        
    }
?>

</body>
</html>