
<?php 
 //header("Content-Type: text/html; charset=utf8");
    if (isset($_POST['submit'])) {
    $title=$_POST['title'];//post获取表单里的name
    $content=$_POST['content'];//post获取表单里的content
    require_once "connect.php";
    $q="insert into passage(pid,title,content) values (null,'$title','$content')";//向数据库插入表单传来的值的sql
    $result=mysql_query($q,$con);//执行sql
    
    if (!$result){
        die('Error: ' . mysql_error());//如果sql执行失败输出错误
    }else{
        echo "上传成功";//成功输出注册成功
         
    }

    mysql_close($con);//关闭数据库
    }
?>