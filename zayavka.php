<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/navklient.php';
session_start();

$id_user=$_SESSION['id_user'];


if(!empty($_POST)){
$id_product=$_POST['id_product'];
$adres=$_POST['adres'];
$date=$_POST['date'];
$time=$_POST['time'];
$oplata=$_POST['oplata'];
$posh=$_POST['posh'];
$status=$_POST['status'];

$sql="INSERT INTO zayavka(id_user, id_product, adres, date, time,  oplata, posh, status) VALUES ('$id_user','$id_product','$adres','$date', '$time',  '$oplata', '$posh', 'Новая')";
$result=$mysqli->query($sql);
if($result){
    header('location:person.php');
    exit;
}




}



?>


<div class="container"style="margin-left:540px;">
<h1>Заявка</h1>
<form action=""method="POST">

<div class="form-element">

<label for="fio">Выберите еду</label>

<select class="product" id="id_product" name="id_product"required>

<?php
$product=$mysqli->query("SELECT id_product, name_product FROM product");
foreach($product as $list){
    echo '<option value="'.$list['id_product'].'">'.$list['name_product']."</option>";
}
?>




</select>

<div class="form-element">

<label for="adres">Адрес</label>

<input type="text" name="adres" required></br></br>

</div>

<div class="form-element">

<label for="date">Дата</label>

<input type="date" name="date" required></br></br>
</div>


<div class="form-element">
<label for="time">Время</label>
<input type="time" name="time" required></br></br>
</div>


<div class="form-element">
<label for="oplate">Оплата</label>
<input type="text" name="oplata" required></br></br>
</div>

<div class="form-element">
<label for="posh">Пожелания</label>
<input type="text" name="posh" required></br></br>
</div>
</div>
<input type="submit"value="Отправить">





</form>
