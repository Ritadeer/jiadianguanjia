<!DOCTYPE html>
<html lang="zh-cn"> <!--<![endif]-->
<head>
<meta charset="utf8">
<title>登录</title>
<link rel="stylesheet"  href="css/login-style.css" />
</head>
<body>
<div class="container">

	<section id="content">

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<h1>登录</h1>
			<div>
				<input type="text" placeholder="用户名:website" required="" id="name" name="name"/>
			</div>
			<div>
				<input type="password" placeholder="密码:123456" required="" id="password" name="password"/>
			</div>
			<div>
				<input type="submit"  name="submit" value="确认" />
				
				<a href="signup.php">注册</a>
			</div>
		</form><!-- form -->
	

<?PHP
     if (isset($_POST['submit'])) {
 require_once "connect.php";//链接数据库
    $name = $_POST['name'];//post获得用户名表单值
    $passowrd = $_POST['password'];//post获得用户密码单值

    if ($name && $passowrd){//如果用户名和密码都不为空
             $sql = "select * from users where username = '$name' and password='$passowrd'";//检测数据库是否有对应的username和password的sql
             $result = mysql_query($sql);//执行sql
             $rows=mysql_num_rows($result);//返回一个数值
             if($rows){//0 false 1 true
                //   header("refresh:0;url=manage.php");//如果成功跳转至welcome.html页面
                   echo "<script>

                   window.top.location.href='manage.php';
                   </script>";
                   exit;
             }else{
                echo "用户名或密码错误";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='login.php';},1000);
                    </script>

                ";//如果错误使用js 1秒后跳转到登录页面重试;
             }
             

    }else{//如果用户名或密码有空
                echo "表单填写不完整";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='login.php';},1000);
                      </script>";

                        //如果错误使用js 1秒后跳转到登录页面重试;
    }

    mysql_close();//关闭数据库
}
?>



	</section><!-- content -->
</div><!-- container -->
<p>【tips:点击黑色区域退出弹窗】</p>
</body>
</html>