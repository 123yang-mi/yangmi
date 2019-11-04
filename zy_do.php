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

//  1. 閾炬帴鏁版嵁搴�
//浣跨敤define鍑芥暟瀹氫箟鏁版嵁搴撴湇鍔″櫒鍦板潃銆佺敤鎴峰悕鍜屽瘑鐮佸父閲�
  define("HOST","localhost");
  define("USER","root");
  define("PASSWD","123456");
  //浣跨敤mysql_connect()鍑芥暟锛岃繛鎺ユ暟鎹湇鍔″櫒
  $conn=mysql_connect(HOST,USER,PASSWD);
  //閫夋嫨鎵�瑕佹搷浣滅殑鏁版嵁搴�
  $dbselect=mysql_select_db("stusys",$conn);
  mysql_query("set names 'utf8'");

  //2.鎵цsql
  $zyzybm = $_POST['zyzybm'];
  $zyzymc = $_POST['zyzymc'];
  $zyxbbm = $_POST['zyxbbm'];
  
  $sql = "insert into zyxxb (zybm, zymc, xbbm) values ($zyzybm, '$zyzymc','$zyxbbm')";
  $info = mysql_query($sql,$conn);
  
if ($info){?>
      
      <script type="text/javascript">
      alert("写入成功");
      window.location.href="zy_add.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("写入失败");
					window.location.href="zy_add.php";
				</script>
      <?php
      
  }
  
//   header('Location: zy_add.php');
  
  break;

  ?>

</body>
</html>