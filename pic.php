<?php
    //header("Content-Type: text/html; charset=utf8");

       require_once "connect.php";
 if (isset($_POST['submit'])) {
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 200000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    $s = new SaeStorage();
    $result = $s->upload('upload', $new_file_name, $tmp_name);
  

$file_url = $result;
      $picpath=$file_url;
     echo "上传成功";
    $q="insert into picture(id,picpath) values (null,'$picpath')";//向数据库插入表单传来的值的picpath
    $result=mysql_query($q,$con);//执行sql
  
        
    }
  }
else
  {
  echo "Invalid file";

  }
}
?>
