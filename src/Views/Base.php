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
		
			<a href="http://biq.com.ua/"><img src="/img/logo.png?v=2" width="100px" /></a>
			
		</div>

    </header>
    
    <main id="main">
		
		<div id="main-menu">	
			<ul class="main-menu-items">
				<li><a href="/">Главная</a></li>
				<li><a href="/blog">Блоги</a></li>
				<li><a href="/my">О нас</a></li>
			</ul>
		</div>
		<div class="clear"></div>
		
		<div class="content">
			<?=$content;?>
		</div>
	</main>
	
	<footer id="footer">
			
		<div id="copyright">Powered and created by AVL © 2018</div>
		
	</footer>

</div><!-- #wrap -->
</div><!-- #page -->

</body>
</html>