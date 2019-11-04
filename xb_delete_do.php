<?php
$code = $_GET["code"];

//造连接
$conn = @mysql_connect("localhost","root","123456");  //localhost为本机服务器地址，root为用户名，123为数据库密码
//选择操作的数据库
mysql_select_db("stusys",$conn);
//写SQL语句
$sql = "delete from xbxxb  where Code = '$code'";

//执行
$result = mysql_query($sql);

if($result)
{
    //跳转页面
    header("location:xb_delete.php");  //删除成功，则跳转回显示页面
}
else
{
    echo "删除失败！";
}
?>