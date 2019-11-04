<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>绠＄悊鍛樻搷浣滀俊鎭�</title>
<link href=".\css\bootstrap.min.css" rel="stylesheet">
<script src=".\js\bootstrap.min.js"></script>
</head>
<body>
<div align="left"><lable>插入系部信息</lable><br></div>
<div align="center">
<form class="form-horizontal" action="xb_do.php" method="post">
  <div class="form-group">
    <div class="col-sm-20">
      <input  class="form-control" name="xbxbbm" placeholder="系部编码">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-20">
      <input  class="form-control" name="xbxbmc" placeholder="系部名称">
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-20">
      <input  class="form-control" name="xbxybm" placeholder="学院编码">
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-20">
      <button type="submit" class="btn btn-default">插入</button>
    </div>
  </div>
    
</form></div>



</body>
</html>
