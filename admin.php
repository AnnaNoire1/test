<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/navadmin.php';

?>

<h1 style="margin-left: 500px;">Личный кабинет администратора</h1>
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
$sql="SELECT * FROM zayavka, users where zayavka.id_user=users.id_user";
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
 <td>'.$row['status'].'</td>
 <td> <form action="change.php" method="POST">
 <input type="hidden" name="id_zayavka" value="'.$row['id_zayavka'].'">
 <input type="submit" value="Одобрить">
 </form></td></tr>';
}

}

?>


</table>
