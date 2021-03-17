<?php
if(!isset($_POST['prenom']) || $_POST['prenom'] == ''){
	header('Location: index.php');
}
$bdd = new PDO('mysql:host=db;dbname=noob;charset=utf8', 'user', 'password');
$bdd->query('UPDATE users SET password="3be66d2f17f2f0d9510e62c925d1d2cb" WHERE prenom="'.$_POST['prenom'].'"');
header('Location: changepassword?success=1');
?>