
<?php
require_once('conn.php');
header('Content-type:text/html;charset=utf-8');
  //选择所要操作的数据库
  $dbselect=mysql_select_db("stusys",$conn);
  mysql_query("set names 'utf-8'");

  //2.执行sql
  $xh = $_POST['xh'];
 echo $xh;

  $sql_del = "delete from xsxxb where xh ='$xh'";
  $info = mysql_query($sql_del,$conn);
  if ($info){?>
      
      <script type="text/javascript">
      alert("删除成功");
      window.location.href="xs_list.php";
      </script>
      <?php
      
  }else{
      
      
      ?>
        <script type="text/javascript">
          alert("删除失败");
          window.location.href="xs_list.php";
        </script>
      <?php
      
  }
  
//关闭数据库连接
  mysql_close($conn);
  //break;

  ?>

 


