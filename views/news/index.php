<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Effloresce  by FCT</title>
</head>
<body>
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li><a href="http://mvc2/login">Log in</a></li>
				<li><a href="http://mvc2/registration">registration</a></li>
				<li><a href="http://mvc2/product">product</a></li>

			</ul>
		</div>
	</div>

<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">Moto blog</a></h1>
				<p>Тест mvc от Макса</p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<?php foreach ($newsList as $newsItem):?>
					<div class="post">
						<h2 class="title"><a href='/news/<?php echo $newsItem['id'] ;?>'>
								<?php echo ' # '.$newsItem['id'].' '.$newsItem['title'];?></a></h2>
						<div class="entry">
							<p><img src="/template/images/pic01.jpg" width="700" height="500" alt="" /></p>
						</div>
					</div>
				<?php endforeach;?>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>Сайд бар</h2>
							<p>Спорт байки это космос проста</p>
						</li>
						<li>
							<h2>Категории сайта</h2>
							<ul>
								<li><a href="/news">Новости</a></li>
								<li><a href="#">Продажа</a></li>
								<li><a href="#">Форум</a></li>
						</li>
						<li>
							<h2>Cамое популярное</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>


<div id="footer">
	<p>Copyright (c) 2016  All rights reserved. </p>
</div>
</body>
</html>
