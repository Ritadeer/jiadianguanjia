<?php 
    header("Content-Type: text/html; charset=utf8");

    if (isset($_POST['submit3'])) {
    $name=$_POST['name1'];//post获取表单里的name
    $email=$_POST['email1'];//post获取表单里的password
    $phone=$_POST['phone1'];//post获取表单里的name
    $message=$_POST['message1'];//post获取表单里的password
 require_once "connect.php";

    $q1="insert into usermassage(id,name,email,phone,massage) values (null,'$name','$email','$phone','$message')";//向数据库插入表单传来的值的sql
    $result=mysql_query($q1);//执行sql
    
    if (!$result){
        die('Error: ' . mysql_error());//如果sql执行失败输出错误
    }
    else{
        echo "提交成功";//成功输出注册成功
        echo "
                      <script>
                            setTimeout(function(){window.location.href='index.php';},1000);
                      </script>";
    }

    mysql_close($con);//关闭数据库
    }
    else{
      echo "wrong";
    }

?>
