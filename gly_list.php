<?php
require_once 'session.php';
require_once 'conn.php';
mysql_query("set names 'utf8'");

$gly_num=mysql_num_rows(mysql_query("select * from glyxxb "));
$sql = "SELECT id,zh,mm,js FROM glyxxb";
$result=mysql_query($sql);


if ($gly_num > 0) {
    // 输出数据
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>管理员列表</title>
<style>
#customers
{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	width:80%;
	border-collapse:collapse;
}
#customers td, #customers th 
{
	font-size:1em;
	font-family:STKaiti;
	border:2px solid #98bf21;
	padding:3px 7px 2px 7px;
}
#customers th 
{
	font-size:1.1em;
	font-family:STKaiti;
	text-align:left;
	padding-top:5px;
	padding-bottom:4px;
	background-color:#bd6758;
	color:#ffffff;
}
#customers tr.alt td 
{
	color:#000000;
	background-color:#EAF2D3;
}
</style>
</head>

<body>
<table id="customers">
<tr>
  <th>ID</th>
  <th>账号</th>
  <th>密码</th>
  <th>角色</th>
</tr>
<?php    while($row = mysql_fetch_array($result)) {?>
		<tr>
		    <td><?php echo  $row["id"] ?></td>
			<td><?php echo  $row["zh"] ?></td>
			<td><?php echo  $row["mm"] ?></td>
			<td><?php echo  $row["js"] ?></td>
		</tr>
 											<?php }       
    
} else {
    echo "0 结果";
}

mysql_close($conn);
?>

</table>
</body>
</html>