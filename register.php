<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/nav.php';

if(!empty($_POST)){
$fio=$_POST['fio'];
$login=$_POST['login'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$email=$_POST['email'];


if($password!==$password1){
    $message="Пароль не совпадают";
    $fio=$mysqli->real_escape_string($fio);
    $login=$mysqli->real_escape_string($login);
    $password=$mysqli->real_escape_string($password);
    $email=$mysqli->real_escape_string($email);

$sql="INSERT INTO users(fio, login, password, email) VALUES ('$fio','$login','$password','$email')";
$result=$mysqli->query($sql);
if($result){
    header('location:login.php');
    exit;
}




}


}

?>


<div class="container"style="margin-left:540px;">
<h1>РЕГИСТРАЦИЯ</h1>
<form action=""method="POST">

<div class="form-element">

<label for="fio">Введити имя</label>

<input type="text" name="fio" placeholder="Символы кириллицы" pattern="^[А-Яа-яЁё-s]+$"required></br></br>

</div>

<div class="form-element">

<label for="login">Введите логин</label>

<input type="text" name="login" required></br></br>
</div>


<div class="form-element">
<label for="password">Введите пароль</label>
<input type="password" name="password" required></br></br>
</div>
<div class="form-element">
<label for="password2">Подвердите пароль</label>
<input type="password" name="password2" required></br></br>
</div>
<div class="form-element">
<label for="email">Введите почту</label>
<input type="text" name="email" required></br></br>

</div>
<input type="submit"value="Зарегистрироваться">





</form>



