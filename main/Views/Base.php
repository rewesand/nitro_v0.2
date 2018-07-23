<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!-- start: index -->
<html xml:lang="ru" lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>

<title><?=$page_title_prefix?$page_title_prefix:'';?></title>

<?=$meta_description?'<meta name="Description" content="'.$meta_description.'" />':'';?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="/favicon.ico">

<meta http-equiv="Content-Script-Type" content="text/javascript">

<?php if (SITE_MODE === 'DEV') {?>
<script async src='/js/jquery.js?rev=<?=rand();?>' charset='utf-8' type='text/javascript'></script>
<link href="/css/style.css?rev=<?=rand();?>" rel="stylesheet" type="text/css" media="all">
<?php } else { ?>
<script src='/js/jquery.js' charset='utf-8' type='text/javascript'></script>
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all">
<?php } ?>

</head>

<body>

<div id="page">
<div id="wrap">

    <header id="header">
        
        <div class="logo">
		
			<a href="http://biq.com.ua/"><img src="/img/logo.png" width="100px" /></a>
			
		</div>
		
		<div class="slogan">
			<span>best in quality</span>
		</div>
		
		<div class="header-contacts-block">
			<a href="tel:067 302 90 45" class="phone">(067) 302-90-45</a><br />
		</div>

    </header>
    
    <main id="main">
		
		<div id="main-menu">	
			<ul class="main-menu-items">
				<li><a href="/" title="Главная">Главная</a></li>
				<!-- li><a href="/reklama" title="Оборудование">Оборудование</a></li>
				<li><a href="/frezer" title="Фрезерная порезка">Фрезерная порезка</a></li>
				<li><a href="/contact" title="Контакты">Контакты</a></li -->
			</ul>
		</div>
		<div class="clear"></div>
		
		<div class="content">
			<?=$content;?>
		</div>
	</main>
	
	<footer id="footer">
			
		<div id="copyright">Powered and created by <a href="http://biq.com.ua/" target="_blank">BIQ</a> © 2018</div>
		
	</footer>

</div><!-- #wrap -->
</div><!-- #page -->

</body>
</html>