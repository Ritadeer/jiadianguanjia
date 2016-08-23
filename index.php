<!DOCTYPE html>
<html lang="zh-cn">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<meta charset="utf8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
	<title>家电管家门户网站</title>
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- 	<link rel="stylesheet" type="text/css" media="all" href="css/style.css"> -->
	<link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/login-style.css">

	<!-- jQuery -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="css/colorbox5.css" />
		<script src="jquery.color-min.js"></script>
		<script src="jquery.colorbox.js"></script>
		<script>
		$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$("#login1").colorbox({iframe:true, width:"80%", height:"75%"});
			});
		</script>

</head>
<body>
		
	<!-- HEADER -->
	<div class="fluid-container">
		<header class="site-header">
			<div class="navbar-default navbar-fixed-top">
				<div class="fluid-container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="#">家电管家</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="link-home" href="#home">首页</a></li>
                        <li><a class="link-clients" href="#clients">项目介绍</a></li>
                        <!-- <li><a class="link-service" href="#services">项目介绍</a></li> -->
						<!-- <li><a class="link-facts" href="#facts">Facts</a></li> -->
						<li><a class="link-portfolio" href="#portfolio">相关图片</a></li>
						
						<li><a class="link-contact" href="#contact">联系我们</a></li>
          
                          <li><a class="link-login" id="login1" href="login.php" target="_blank">登录</a></li>
						<!-- <div class="link-login"><a style="text-decoration:none; color:#FFFFFF"; href="login.html" target="_blank" >登录</a>
					</ul> -->
				</div>
				</div>
			</div>
		</header> <!-- .site-header -->
	 <!-- .fluid-container -->
	</div>


<!-- login -->








	<!-- WELCOME TEXT -->
	<div class="main-content">
 

		<div class="fluid-container" id="home">
	                <div class="space"></div>
				    <div class="space1"></div>
				    <div class="space1"></div>
			<div class="row">
            <!-- <div class="col-md-4 text-center">
					<img src="img/portfolio/5.jpg" class="img-responsive animated fadeInLeft" alt="Time is happiness">
				</div> -->
              <div class="col-md-4 text-center">
					<img src="img/portfolio/9.jpg" class="img-responsive animated fadeInLeft" alt="Time is happiness">
				</div>
				<div class="col-md-8  welcome-section">
                	 <div class="space1"></div>
					<h2 class="title"><strong>家电管家</strong></h2>
					
					    <div class="space1"></div>
				 <p class="intro">随着人们对家电安全性、便利性、舒适性、艺术性等居住环境要求的提高，及物联网技术的发展，智能家电是必然趋势。而随着智能终端越来越普及，它给带来的人机交互感也彻底颠覆了传统的概念。人们对于智能和人机交互的控制感觉有了更深的体验，对于智能的追求又到了一个新的纪元。</p>
				<div class="space1"></div>
				<div class="space1"></div>
				 <p class="intro1">因此，为了适应现代人快节奏的生活方式，对家电随时随地进行远程管理成为了诉求，“家电管家”正是在此基础上，针对人们可能遇到的问题设计了相应的功能，用户可以对家里电器进行集中、遥控、定时、远程控制，解决了一些生活中因疏忽出现的家居问题。
   </p>
                    
					
				</div>

				</div>	
                   <div class="space1"></div>

	</div>
<!-- </div> -->
	
	

	<div class="fluid-container" id="clients">
		<div class="row">
			<div class="col-md-12 text-right">
				<div class="section-header clients-header">
					<h3>项目介绍</h3>
				</div>
			</div>
		</div>
		<div class="section-clients">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="client-icon">
						<i class="i fa fa-quote-left"></i>
					</div>
					<ul class="client-slide">
						<li>
							<h4><strong><?php
 require_once "connect.php";
    $result = mysql_query("SELECT * FROM  passage  order by pid desc limit 3");
 $row = mysql_fetch_array($result);
   echo $row['title'];
	?></strong></h4>
<div class="space"></div>

<p><?php
   echo  $row['content'];

	?></p>
							
						</li>
						<li>
							<h4><strong><?php

$row = mysql_fetch_array($result);
   echo $row['title'];

?></strong></h4>
<div class="space"></div>
							<p><?php
   echo  $row['content'];

	?></p>
							
						</li>
						<li>
							<h4><strong><?php
$row = mysql_fetch_array($result);
   echo $row['title'];
?></strong></h4>
<div class="space"></div>
							<p><?php
   echo  $row['content'];

	?></p>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	
	
	<!-- PORTFOLIO -->
	<div class="fluid-container" id="portfolio">
		<div class="row">
			<div class="col-md-12 text-left">
				<div class="section-header portfolio-header">
					<h3>相关图片</h3>
				</div>
			</div>
		</div>
		<div class="section-portfolio" >
			<div class="row portfolio-holder">
				<article class="portfolio col-md-4 col-sm-6 col-xs-12">
					<div class="entry-thumbnail">
					<img src="img/portfolio/4.jpg" alt="">
					</div>
					<div class="portfolio-overlay first">
						<a href="#"><h4 class="entry-title">DIGITAL PHOTO</h4></a>
					</div>
				</article>
				<article class="portfolio col-md-4 col-sm-6 col-xs-12">
					<div class="entry-thumbnail">
						<img src="img/portfolio/22.jpg" alt="">
					</div>
					<div class="portfolio-overlay second">
						<a href="#"><h4 class="entry-title">QUALITY IMAGING</h4></a>
					</div>
				</article>
				<article class="portfolio col-md-4 col-sm-6 col-xs-12">
					<div class="entry-thumbnail">
						<img src="img/portfolio/1.jpg" alt="">
					</div>
					<div class="portfolio-overlay third">
						<a href="#"><h4 class="entry-title">ANIMATIONS</h4></a>
					</div>
				</article>
				<article class="portfolio col-md-4 col-sm-6 col-xs-12">
					<div class="entry-thumbnail">
					<img src="img/portfolio/3.jpg" alt="">
					</div>
					<div class="portfolio-overlay fourth">
						<a href="#"><h4 class="entry-title">HI FI SOUND</h4></a>
					</div>
				</article>
				<article class="portfolio col-md-4 col-sm-6 col-xs-12">
					<div class="entry-thumbnail">
					<img src="img/portfolio/7.jpg" alt="">
					</div>
					<div class="portfolio-overlay fifth">
						<a href="#"><h4 class="entry-title">BEST IN TIME</h4></a>
					</div>
				</article>
				<article class="portfolio col-md-4 col-sm-6 col-xs-12">
					<div class="entry-thumbnail">
					<img src="img/portfolio/6.jpg" alt="">
					</div>
					<div class="portfolio-overlay sixth">
						<a href="#"><h4 class="entry-title">DELICIOUS ONE</h4></a>
					</div>
				</article>
			</div>
		</div>
	</div>

	<!-- CLIENTS -->
	

	<!-- CONTACT US -->
	<div class="fluid-container" id="contact">
		<div class="row">
			<div class="col-md-12 text-left">
				<div class="section-header contact-header">
					<h3>联系我们</h3>					
				</div>
			</div>
		</div>
		<div class="section-contact">
			<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<form action="maspost.php" form method="post" id="contact-form">
						<fieldset>
							<label for="name">姓名:</label>
							<input type="text" name="name1" id="name1">
						</fieldset>
						<fieldset>
							<label for="email">邮箱:</label>
							<input type="email" name="email1" id="email1">
						</fieldset>
						<fieldset>
							<label for="phone">手机号码:</label>
							<input type="tel" name="phone1" id="phone1">
						</fieldset>
						<fieldset>
							<label for="message">描述相关情况:</label>
							<textarea name="message1" id="message1" rows="4"></textarea>
						</fieldset>
						<fieldset>
							<input type="submit" class="button-dark" name="submit3" value="发送">

						</fieldset>
					</form>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
					
					<div class="contact-infos">
						<div class="row">
							<div class="col-md-6">
								<p><strong>邮箱:</strong> <a href="#">527365360@qq.com</a></p>
								<p><strong>致电:</strong> 080-070-0120</p>
							</div>
							<div class="col-md-6">
								<p>家电管理，您的生活好帮手</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	

	<!-- Plugins -->
	<script src="js/bootstrap.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/custom.js"></script>

	<!-- Google Map -->



</body>
</html>