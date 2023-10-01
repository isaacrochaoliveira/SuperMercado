<?php

include('../database.php');

$email = trim($_POST['email']);
$pass = trim($_POST['pass']);

if (!(is_string($email))) {
    echo "INVALID ACESS!";
    exit();
}

if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
	echo "Give me a email validate!";
	exit();
}

$query = $pdo->prepare("SELECT * FROM users WHERE (email = :email or names = :email) AND password = :pass");
$query->bindValue(':email', $email, PDO::PARAM_STR);
$query->bindValue(':pass', $pass, PDO::PARAM_STR);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    if (!(isset($_SESSION))) {
        session_start();
    }
    $_SESSION['id'] = $res[0]['id_users'];
    $_SESSION['name'] = $res[0]['names'];
    $_SESSION['emali'] = $res[0]['email'];
    echo "LOGIN";
} else {
    echo "I'm really sorry! Your informations are wrong";
}
