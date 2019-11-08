<?php
require_once 'session.php';
$glyid = $_POST['id'];
$glyzh = $_POST['zh'];
$glymm = $_POST['mm'];
$glyjs = $_POST['js'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>更新管理员信息</title>

</head>

<body>
<div align="center">
                <form action='gly_up.php' method="post">
                <label for="inputPassword3" class="col-sm-2 control-label">ID</label>&nbsp;&nbsp;&nbsp;&nbsp
                <input  name='id' value=<?php echo $glyid?>><br>
                <label for="inputPassword3" class="col-sm-2 control-label">账号</label>&nbsp;&nbsp;&nbsp;
                <input  name='zh' value=<?php echo $glyzh?>><br>
                <label for="inputPassword3" class="col-sm-2 control-label">密码</label>&nbsp;&nbsp;&nbsp;
                <input  name='mm' value=<?php echo $glymm?>><br>
                <label for="inputPassword3" class="col-sm-2 control-label">角色</label>&nbsp;&nbsp;&nbsp;
                <input  name='js' value=<?php echo $glyjs?>><br>
                <input type='submit' value='更新'>
                </form>

</div>
</table>
</body>
</html>     

</table>
</body>
</html>