<?php require_once('session.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生信息管理系统</title>
<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="js/logout.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".bclass").click(function(){
		$(this).next().slideToggle("fast");
	});
});
</script>
<style type="text/css">
* {
	margin: 0px;
	padding: 0px;
}
a {
	text-decoration: none;
	color: BLACK;
}
body {
	background:  #2F2F4F;
}

.main .cattitle {
	height: 40px;
	text-align: center;
	line-height: 40px;
	color: #FFF;
	font-weight: bold;
	margin: 0 auto;
	background: #2F2F4F;
}
.main .menu {
	width: 95%;
	margin: 0 auto;
}
.main .menu .bclass {
	height: 28px;
	line-height: 28px;
	color: BLACK;
	font-weight: 500;
	padding-left: 40px;
	font-size: 14px;
	background: url(images/row-r.png) 20px center no-repeat;
	cursor: default;
}
.main .menu .sclass {
	display: none;
}
.main .menu .sclass a {
	display: block;
	height: 26px;
	COLOR: #FFF;
	line-height: 26px;
	padding-left: 40px;
	font-size: 14px;
	background:url(images/row-d.png) 30px center no-repeat;
}
.main .menu .sclass a:hover {
	background: #7c769d url(images/row-dh.png) 30px center no-repeat;
}
</style>
</head>
<body>
<div class="main">
	<div class="cattitle">系统菜单</div>
	<div class="menu">
		<div class="bclass">
        	<a href="right.php" target="right">首页</a>
        </div>
	</div>
  
	<div class="menu">
		<div class="bclass">管理员信息</div>
		<div class="sclass"> 
        	<a href="gly_add.php" target="right">添加管理员</a>
        	<a href="gly_list.php" target="right">管理员列表</a> 
        	<a href="gly_search.php" target="right">管理员查询</a> 
            <a href="gly_delete.php" target="right">删除管理员</a> 
        </div>
	</div>
 
	<div class="menu">
    	<div class="bclass">学院信息</div>
    	<div class="sclass">
        	<a href="xy_add.php" target="right">添加学院</a> 
        	<a href="xy_list.php" target="right">学院列表</a> 
            <a href="xy_delete.php" target="right">删除学院</a> 
        </div>
  	</div>
  	<div class="menu">
		<div class="bclass">系部信息</div>
    	<div class="sclass"> 
        	<a href="xb_add.php" target="right">添加系部</a>
        	<a href="xb_list.php" target="right">系部列表</a>  
            <a href="xb_delete.php" target="right">删除系部</a>
         </div>
  	</div>
  	<div class="menu">
    	<div class="bclass">专业信息</div>
    	<div class="sclass"> 
        	<a href="zy_add.php" target="right">添加专业</a>
        	<a href="zy_list.php" target="right">专业列表</a>  
            <a href="zy_delete.php" target="right">删除专业</a>
        </div>
  	</div>
  	<div class="menu">
    	<div class="bclass">班级信息</div>
    	<div class="sclass"> 
        	<a href="bj_add.php" target="right">添加班级</a>
        	<a href="bj_list.php" target="right">班级列表</a>  
            <a href="bj_delete.php" target="right">删除班级</a>
        </div>
  	</div>
  	<div class="menu">
    	<div class="bclass">学生信息</div>
    	<div class="sclass"> 
        	<a href="xs_add.php" target="right">添加学生</a>
        	<a href="xs_list.php" target="right">学生列表</a> 
            <a href="xs_delete.php" target="right">删除学生</a> 
        </div>
  	</div>
	
  	<div class="menu">
    	<div class="bclass">
        	<a href="#" id="logout">退出</a>
        </div>
  	</div>
</div>
</body>
</html>
