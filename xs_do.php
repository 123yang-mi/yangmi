<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="UTF-8">

 <title>瀛︾敓淇℃伅绠＄悊</title>
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
      alert("鍐欏叆鎴愬姛");
      window.location.href="xs_add.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
				<script type="text/javascript">
					alert("鍐欏叆澶辫触");
					window.location.href="xs_add.php";
				</script>
      <?php
      
  }
  
//   header('Location: xs_add.php');
  
  break;

  ?>

</body>
</html>