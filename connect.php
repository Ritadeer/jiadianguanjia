<?php
    $server="w.rdc.sae.sina.com.cn";//主机
    $port=3307;
   // $db_username="zj3ljxzmyo";//你的数据库用户名
   //$db_password="zlw4j223x51jyw11lzml24i40j1k1klz4h1yij4l";//你的数据库密码

 $db_username="jiadianguanjia";//你的数据库用户名
   $db_password="123456";//你的数据库密码
  $con = mysql_connect("uszyduhgblad.rds.sae.sina.com.cn:10333",$db_username,$db_password);//链接数据库
 //   $con = mysql_connect("yxaacegermkd.rds.sae.sina.com.cn:10618",$db_username,$db_password);//链接数据库
    if(!$con){
        die("can't connect".mysql_error());//如果链接失败输出错误
    }
    
    mysql_select_db('website',$con);//选择数据库（website）
?>

