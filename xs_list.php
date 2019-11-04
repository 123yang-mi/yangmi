<?php
require_once 'session.php';
require_once 'conn.php';
mysql_query("set names 'utf8'");

$gly_num=mysql_num_rows(mysql_query("select * from xsxxb "));
$sql = "SELECT xh,xm,xb,csrq,zzmm,sheng,shi,xian,dzyx,lxdh,jtzz,rxnf,xybm,xbbm,zybm,bjbm,xjzt FROM xsxxb";
$result=mysql_query($sql);


if ($gly_num > 0) {
    // �������
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>学生列表</title>
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
  <th>学号</th>
  <th>姓名</th>
  <th>性别</th>
  <th>出生日期</th>
  <th>政治面貌</th>
  <th>省</th>
  <th>市</th>
  <th>县</th>
  <th>电子邮箱</th>
  <th>联系电话</th>
  <th>家庭住址</th>
  <th>入学年份</th>
  <th>所属学院</th>
  <th>所属系部</th>
  <th>所属专业</th>
  <th>所属班级</th>
  <th>学籍状态</th>
</tr>
<?php    while($row = mysql_fetch_array($result)) {?>
		<tr>
			<td><?php echo  $row["xh"] ?></td>
			<td><?php echo  $row["xm"] ?></td>
			<td><?php echo  $row["xb"] ?></td>
			<td><?php echo  $row["csrq"] ?></td>
			<td><?php echo  $row["zzmm"] ?></td>
			<td><?php echo  $row["sheng"] ?></td>
			<td><?php echo  $row["shi"] ?></td>
			<td><?php echo  $row["xian"] ?></td>
			<td><?php echo  $row["dzyx"] ?></td>
			<td><?php echo  $row["lxdh"] ?></td>
			<td><?php echo  $row["jtzz"] ?></td>
			<td><?php echo  $row["rxnf"] ?></td>
			<td><?php echo  $row["xybm"] ?></td>
			<td><?php echo  $row["xbbm"] ?></td>
			<td><?php echo  $row["zybm"] ?></td>
			<td><?php echo  $row["bjbm"] ?></td>
			<td><?php echo  $row["xjzt"] ?></td>
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

