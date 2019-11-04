<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0">  
<tr>
<td>系部编码</td>
<td>系部名称</td>
<td>学院编码</td>
</tr>

<?php
$conn = @mysql_connect("localhost","root","123456");   //localhost为本机服务器地址，root为用户名，123为数据库密码
//选择操作的数据库
mysql_select_db("stusys",$conn);
//写SQL语句
$sql = "select * from xbxxb";

//执行
$result = mysql_query($sql);

//读取数据
while($attr = mysql_fetch_row($result))
{
echo "<tr>
<td>{$attr[0]}</td>       
<td>{$attr[1]}</td>       
<td><a onclick=\"return confirm('确定删除么')\" href='xb_delete.php?code={$attr[0]}'>删除</a></td>  
</tr>";
}
?>
</table>

</body>

</html>