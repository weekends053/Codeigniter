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
    <th>รหัสนักศึกษา</th>
    
  </tr>
  <?php
  foreach($MA->result_array() as $row){
  ?>
  <tr>
    <td><center><?=$row['Std_ID']?></center></td>
    

  </tr>
  <?php
  }
  ?>
</table>

</body>
</html>