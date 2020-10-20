<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <title>view News</title>
</head>
<body>
<center><h1>ข่าว</h1></center>
<table border="1" style="width:100%">
  <tr>
    <th>ชื่อ</th>
    <th>บัตรประชาชน</th>
    <th>วันเดือนปีเกิด</th>
    <th>เพศ</th>
    <th>ที่อยู่</th>
    <th>เบอร์โทร</th>
    <th>E-mail</th>
    <th>Facebook</th>
    <th>Instagram</th>
  </tr>
  <?php
  foreach($MA->result_array() as $row){
  ?>
  <tr>
    <td><center><?=$row['Name_LastName']?></center></td>
    <td><center><?=$row['ID_Card']?></center></td>
    <td><center><?=$row['Date_Of_Birth']?></center></td>
    <td><center><?=$row['Sex']?></center></td>
    <td><center><?=$row['Address']?></center></td>
    <td><center><?=$row['Tel']?></center></td>
    <td><center><?=$row['E_mail']?></center></td>
    <td><center><?=$row['Facebook']?></center></td>
    <td><center><?=$row['Instagram']?></center></td>
  </tr>
  <?php
  }
  ?>
</table>

</body>
</html>