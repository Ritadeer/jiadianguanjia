<!DOCTYPE html>
	<html lang="zh-cn">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
<!---	<meta charset="utf8">-->
<link rel="stylesheet" href="css/mastyle.css">
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 $("#mapas").show();
  $("#newpas").hide();
  //$("#newpic").hide();
  $("#massagelist").hide();

  $("#paslist").click(function(){
  $("#mapas").show();
  $("#newpas").hide();
 // $("#newpic").hide();
  $("#massagelist").hide();
  });

  $("#newpass").click(function(){
  $("#mapas").hide();
  $("#newpas").show();
 // $("#newpic").hide();
  $("#massagelist").hide();
  });
  //$("#piclist").click(function(){
 // $("#mapas").hide();
 // $("#newpas").hide();
 // $("#newpic").show();
  //$("#massagelist").hide();
  //});
  $("#maslist").click(function(){
  $("#mapas").hide();
  $("#newpas").hide();
//  $("#newpic").hide();
  $("#massagelist").show();
  });
});
</script>
</head>
<body style="background-image:url(img/bg-pattern.png);background-position:center; " >

<div class="main1">
	<div class="decoration">
		<p>
			后台管理
		</p>
	</div>
	<div class="sidebar">
	<table class="t1">
	<tr>
	<th><a id="paslist" style="cursor:pointer" >文章列表</a></th>
	</tr>
	<tr>
	<th><a id="newpass" style="cursor:pointer" >写新文章</a></th>
	</tr>
	<tr>
	<!--<th><a id="piclist" style="cursor:pointer" >管理图片</a></th>
	</tr>
	<tr>-->
	<th><a id="maslist" style="cursor:pointer">收到的信息</a></th>
	</tr>
	<tr>
	<th><a href="index.php"  style='text-decoration:none;'>返回信息页</a></th>
	</tr>
	
	</table>
	</div>
	<div class="rightpart">
	<div id="mapas">
		<p>【提示：此处显示你所有上传过的文章，下拉至页底进行删除操作，删除后刷新此页面更新文章列表】</p>
		<img src='img/bod2.jpg' vertical-align='center'; >
		<?php
			require_once "connect.php";
    		$result = mysql_query("SELECT * FROM  passage ");
 		if (!$result)
 		{
        	die('Error: ' . mysql_error());//如果sql执行失败输出错误
   				 
   		}else
   		{

   		while($row = mysql_fetch_array($result))
  			{
  		
		echo "[".$row['title']."] ";	
		echo "</br>";
		 echo $row['content'];
		echo "</br>";
		echo "<img src='img/bod2.jpg' vertical-align='center'; >";
 		echo "</br>";
 			}

		}
		?>
		<p>统一管理</p>
		<form method="post" form action="delpas.php" target="id_iframe1">
			<p>请输入要删除的文章题目：<input type= "text" name="deltitle"></p>
			    <p><input type="submit" name="submit2" value="提交"></p>
        </form>
<iframe id="id_iframe1" name="id_iframe1" style="border:none;"></iframe>
	</div>

	<div id="newpas">
		<p>tips:此处编写文章将显示在首页项目介绍处，首页将只显示最新提交的三篇文章</p>
        <form method="post" form action="newpas.php"  target="id_iframe2">
            <p>标题:</p><input type="text" name="title" class="newti">
            <p>内容:</p><textarea type="text" name="content" ></textarea>
            <p><input type="submit" name="submit" value="提交"></p>
        </form>
<iframe id="id_iframe2" name="id_iframe2" style="border:none;"></iframe>
	</div>


<!---	<div id="newpic">
	
	本机测试时，可以往文件夹中传图，部署到新浪云后无法上传&&尚未学会sae storage的使用，故此功能删除


		<p>tips:此处存入图片将展示在首页相关图片处，首页将只展示最新提交的六张图片</p><br/>
		<form method="post" form action="pic.php" enctype="multipart/form-data" target="id_iframe">
		<label for="file">Filename:</label>
		<input type="file" name="file" id="file" /> 
		<br/>
		<input type="submit" name="submit" value="Submit" />
		</form>
<iframe id="id_iframe" name="id_iframe" style="border:none;"></iframe>
	</div>	-->

	<div id="massagelist">
		<?php
    		$masresult = mysql_query("SELECT * FROM  usermassage ");
 			if (!$masresult){
        	die('Error: ' . mysql_error());//如果sql执行失败输出错误
   				 }else{
   		while($masrow = mysql_fetch_array($masresult))
  {
			 echo "姓名".$masrow['name'] . " 邮箱". " " . $masrow['email']. " 电话". " " . $masrow['phone']. " 留言". " " . $masrow['massage'];
			 echo "</br>";
		echo "<img src='img/bod2.jpg' vertical-align='center'; >";
				 echo "</br>";
  }
			}
		?>
	</div>
	</div>
</div>
</body>
</html>