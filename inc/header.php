<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Arrowhead Dentists - <?php echo $page_title ?></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div id="outer-wrapper">
<header>
	<h1><a href="index.php" title="Arrowhead Dentist's Directory">Arrowhead Dentists</a></h1>
</header>

<nav id="main-nav">
<span id="flg-l"></span>
<ul>
	<li><a <?php if($page_title == 'Arrowhead Dentists - Home page') : echo 'class="selected" '; endif; ?> href="index.php">home</a></li>
    <li><a <?php if($page_title == 'About Us') : echo 'class="selected" '; endif; ?> href="about-us.php">about us</a></li>
    <li><a <?php if($page_title == 'Arrowhead Dentists Blog') : echo 'class="selected" '; endif; ?> href="dentists-blog.php">arrowhead dentists blog</a></li>
    <li><a <?php if($page_title == 'Advertise with Us') : echo 'class="selected" '; endif; ?> href="advertise-with-us.php">advertise</a></li>
    <li><a <?php if($page_title == 'Contact Us') : echo 'class="selected" '; endif; ?> href="contact-us.php">contact us</a></li>
</ul>
<span id="flg-r"></span>
</nav>

<div id="main">