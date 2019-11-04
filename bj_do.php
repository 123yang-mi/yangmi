<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="UTF-8">

 <title>ѧ����Ϣ����</title>
 <script>

 </script>
</head>
<body>



  <?php

//  1. �������ݿ�
//ʹ��define�����������ݿ��������ַ���û��������볣��
  define("HOST","localhost");
  define("USER","root");
  define("PASSWD","123456");
  //ʹ��mysql_connect()�������������ݷ�����
  $conn=mysql_connect(HOST,USER,PASSWD);
  //ѡ����Ҫ���������ݿ�
  $dbselect=mysql_select_db("stusys",$conn);
  mysql_query("set names 'utf8'");

  //2.ִ��sql
  $bjbjbm = $_POST['bjbjbm'];
  $bjbjmc = $_POST['bjbjmc'];
  $bjzybm = $_POST['bjzybm'];
  
  
  $sql = "insert into bjxxb (bjbm, bjmc, zybm) values ($bjbjbm, '$bjbjmc','$bjzybm')";
  $info = mysql_query($sql,$conn);
  
  if ($info){?>
      
      <script type="text/javascript">
      alert("成功");
      window.location.href="bj_add.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("失败");
					window.location.href="bj_add.php";
				</script>
      <?php
      
  }
  
//   header('Location: bj_add.php');
  
  break;

  ?>

</body>
</html>