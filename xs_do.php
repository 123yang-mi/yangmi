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
  $xsxh = $_POST['xsxh'];
  $xsxm = $_POST['xsxm'];
  $xsxb = $_POST['xsxb'];
  $xscsrq = $_POST['xscsrq'];
  $xszzmm = $_POST['xszzmm'];
  $xssheng = $_POST['xssheng'];
  $xsshi= $_POST['xsshi'];
  $xsxian = $_POST['xsxian'];
  $xsdzyx = $_POST['xsdzyx'];
  $xslxdh = $_POST['xslxdh'];
  $xsjtzz = $_POST['xsjtzz'];
  $xsrxnf = $_POST['xsrxnf'];
  $xsxybm= $_POST['xsxybm'];
  $xsxbbm = $_POST['xsxbbm'];
  $xszybm = $_POST['xszybm'];
  $xsbjbm = $_POST['xsbjbm'];
  $xsxjzt = $_POST['xsxjzt'];
  
  $sql = "insert into xsxxb (xh, xm, xb, csrq,zzmm,sheng,shi,xian,dzyx,lxdh,jtzz,rxnf,xybm,xbbm,zybm,bjbm,xjzt) values ($xsxh, '$xsxm','$xsxb','$xscsrq','$xszzmm','$xssheng','$xsshi','$xsxian','$xsdzyx','$xslxdh','$xsjtzz','$xsrxnf','$xsxybm','$xsxbbm','$xszybm','$xsbjbm','$xsxjzt')";
  $info = mysql_query($sql,$conn);
  
 if ($info){?>
      
      <script type="text/javascript">
      alert("写入成功");
      window.location.href="xs_add.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("写入失败");
					window.location.href="xs_add.php";
				</script>
      <?php
      
  }
  
//   header('Location: xs_add.php');
  
  break;

  ?>

</body>
</html>