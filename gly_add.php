<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理员操作信息</title>
<link href=".\css\bootstrap.min.css" rel="stylesheet">
<script src=".\js\bootstrap.min.js"></script>
</head>
<body>
<div align="left"><lable>插入管理员信息</lable><br></div>
<div align="center">
<form class="form-horizontal" action="gly_do.php" method="post">
  <div class="form-group">
    <div class="col-sm-10">
      <input  class="form-control" name="glyid" placeholder="ID">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input  class="form-control" name="glyzh" placeholder="账号">
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-10">
      <input  class="form-control" name="glymm" placeholder="密码">
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-10">
      <input  class="form-control" name="glyjs" placeholder="角色">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">插入</button>
    </div>
  </div>
</form></div>



</body>
</html>