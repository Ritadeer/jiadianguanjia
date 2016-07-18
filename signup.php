<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf8">
        <title>用户注册页面</title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>用户名:<input type="text" name="name"></p>
            <p>密  码: <input type="text" name="password"></p>
            <p><input type="submit" name="submit" value="注册"></p>
        </form>
<?php 
//    header("Content-Type: text/html; charset=utf8");

    if (isset($_POST['submit'])) {
    $name=$_POST['name'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password
 require_once "connect.php";
    $q="insert into users(id,username,password) values (null,'$name','$password')";//向数据库插入表单传来的值的sql
    $reslut=mysql_query($q,$con);//执行sql
    
    if (!$reslut){
        die('Error: ' . mysql_error());//如果sql执行失败输出错误
    }else{
        echo "注册成功";//成功输出注册成功
    }

    mysql_close($con);//关闭数据库
    }



?>
    </body>
</html>