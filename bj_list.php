<?php
require_once 'session.php';
require_once 'conn.php';
mysql_query("set names 'utf8'");

$gly_num=mysql_num_rows(mysql_query("select * from bjxxb "));
$sql = "SELECT bjbm,bjmc,zybm FROM bjxxb";
$result=mysql_query($sql);


if ($gly_num > 0) {
    // �������
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>班级列表</title>
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
  <th>班级编码</th>
  <th>班级名称</th>
  <th>专业编码</th>
</tr>
<?php    while($row = mysql_fetch_array($result)) {?>
		<tr>
			<td><?php echo  $row["bjbm"] ?></td>
			<td><?php echo  $row["bjmc"] ?></td>
			<td><?php echo  $row["zybm"] ?></td>
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
