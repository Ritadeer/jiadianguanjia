<?php 
 //   header("Content-Type: text/html; charset=utf8");

    if (isset($_POST['submit2'])) {
    $pid=$_POST['deltitle'];//post获取表单里的name

 require_once "connect.php";
    $q="DELETE FROM passage WHERE title= '$pid';";//向数据库插入表单传来的值的sql
    $reslut=mysql_query($q,$con);//执行sql
    
    if (!$reslut){
        die('Error: ' . mysql_error());//如果sql执行失败输出错误
    }else{
        echo "删除成功";//成功输出注册成功
    }

    mysql_close($con);//关闭数据库
    }



?>