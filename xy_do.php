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
  $xyxybm = $_POST['xyxybm'];
  $xyxymc = $_POST['xyxymc'];
 
  
  $sql = "insert into xyxxb (xybm, xymc) values ($xyxybm, '$xyxymc')";
  $info = mysql_query($sql,$conn);
  
  if ($info){?>
      
      <script type="text/javascript">
      alert("д��ɹ�");
      window.location.href="xy_add.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("д��ʧ��");
					window.location.href="xy_add.php";
				</script>
      <?php
      
  }
  
//   header('Location: xy_add.php');
  
  break;

  ?>

</body>
</html>
