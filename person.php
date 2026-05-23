<?php
include 'temp/head.php';
include 'temp/database.php';
session_start();
include 'temp/navklient.php';

?>

<h1>Личный кабинет</h1>
<table class="table">
<tr>
<td>Заявка</td>
<td>Клиент</td>
<td>Адрес</td>
<td>Дата</td>
<td>Время</td>
<td>Оплата</td>
<td>Пожелания</td>
<td>Статус</td>

</tr>

<?php
$sql="SELECT * FROM zayavka  where id_user='$id_user'";
$result=$mysqli->query($sql);
if(!empty($result)){
    foreach($result as $row){
 echo '<tr><td>'.$row['id_zayavka'].'</td>
 <td>'.$row['fio'].'</td>
 <td>'.$row['adres'].'</td>
 <td>'.$row['date'].'</td>
 <td>'.$row['time'].'</td>
 <td>'.$row['oplata'].'</td>
 <td>'.$row['posh'].'</td>
 <td>'.$row['status'].'</td></tr>';
}

}

?>


</table>
