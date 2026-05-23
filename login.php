<?php
include 'temp/head.php';
session_start();
include 'temp/database.php';
include 'temp/nav.php';

$message="";
if(!empty($_POST)&& isset ($_POST['login'])&& isset($_POST['password'])){

$login=trim($_POST['login']);
$password=trim($_POST['password']);

$login=$mysqli->real_escape_string($login);
$password=$mysqli->real_escape_string($password);

$sql="SELECT * FROM users where login='$login' and password='$password'";
$result=$mysqli->query($sql);
if($result->num_rows===0){
$message="Неверный логин или пароль";
echo $message;

}
else{
    $user=$result->fetch_assoc();
    $_SESSION['id_user']=$user['id_user'];
    $_SESSION['login']=$user['login'];
    $_SESSION['password']=$user['password'];

    if($user['login']='admin'&& $user['password']=='admin1234'){
header('location:admin.php');
exit;

    }
else{
    header('location:zayavka.php');
    exit;
}


}

}

?>


<div class="container" style="margin-left:540px;">
<h1>АВТОРИЗАЦИЯ</h1>
<form action=""method="POST">

<div class="form-element">
<label for="login">логин</label>
<input type="text" name="login" required></br></br>

<div class="form-element">
<label for="password">пароль</label>
<input type="password" name="password" required></br></br>

<input type="submit"value="Войти"style="margin-left:60px;">


</div>













</form>










</div>















