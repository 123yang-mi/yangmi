<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="UTF-8">

 <title>学生信息管理</title>
 <script>

 </script>
</head>
<body>



  <?php

//  1. 链接数据库
//使用define函数定义数据库服务器地址、用户名和密码常量
  define("HOST","localhost");
  define("USER","root");
  define("PASSWD","123456");
  //使用mysql_connect()函数，连接数据服务器
  $conn=mysql_connect(HOST,USER,PASSWD);
  //选择所要操作的数据库
  $dbselect=mysql_select_db("stusys",$conn);
  mysql_query("set names 'utf8'");

  //2.执行sql
  $glyid = $_POST['glyid'];
  $glyzh = $_POST['glyzh'];
  $glymm = $_POST['glymm'];
  $glyjs = $_POST['glyjs'];
  
  $sql = "insert into glyxxb (id, zh, mm, js) values ($glyid, '$glyzh','$glymm','$glyjs')";
  $info = mysql_query($sql,$conn);
  
  if ($info){?>
      
      <script type="text/javascript">
      alert("写入成功");
      window.location.href="gly_add.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("写入失败");
					window.location.href="gly_add.php";
				</script>
      <?php
      
  }
  
//   header('Location: gly_add.php');
  
  break;

  ?>

</body>
</html>