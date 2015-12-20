<? 
session_start(); 
$_SESSION['sitename']='Laminal JKT';
if(isset($_REQUEST['utm_source']))$_SESSION['utm_source']=$_REQUEST['utm_source']; 
if(isset($_REQUEST['utm_medium']) )$_SESSION['utm_medium']=$_REQUEST['utm_medium']; 
if(isset($_REQUEST['utm_campaign']) )$_SESSION['utm_campaign']=$_REQUEST['utm_campaign']; 
if(isset($_REQUEST['utm_term']) )$_SESSION['utm_term']=$_REQUEST['utm_term'];
if(isset($_REQUEST['utm_content']) )$_SESSION['utm_content']=$_REQUEST['utm_content'];
if(isset($_SERVER['HTTP_REFERER']))$referer=$_SERVER['HTTP_REFERER']; 

if (isset($crawler)) { 
    $phrase=urldecode($referer); 
    eregi($search. '([^&]*)', $phrase. '&', $phrase2);
    $phrase=$phrase2[1];
 }else{
    $crawler='нет';
 } 
if(!isset($phrase) || $phrase=='' ){
    $phrase='нет' ;
}
$_SESSION['seo_path']='Сайт-источник:' . $crawler. ' <br/>Ключевая фраза:'.$phrase; 
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content=""  />
	<meta name="keywords" content=""  />
	<meta name="viewport" content="width=device-width" />
	
	<link rel="stylesheet" href="css/jquery.fancybox.css" />
	<link rel="stylesheet" href="css/animate.min.css" />
	<link rel="stylesheet" href="css/style.css" />

	<title>new landind</title>

</head>
<body>
<!--                                    Телефон для ios

<div class="phone"><a href="tel:+77777777">+77777777</a></div> -->

<!--                                         Top menu

<div id="nav">
 	<div class="top_menu wrapper">
 		<ul>
 			<li><a href="#" class="subNavBtn">Главная</a></li>
 			<li><a href="#" class="subNavBtn">Главная</a></li>
 			<li><a href="#" class="subNavBtn">Главная</a></li>
 			<li><a href="#" class="subNavBtn">Главная</a></li>
 			<li><a href="#" class="subNavBtn">Главная</a></li>
 			<li><a href="#" class="subNavBtn">Главная</a></li>
 			<li><a href="#" class="subNavBtn">Главная</a></li>
 			<li class="helper"></li>
 		</ul>
 	</div>
 </div> -->
	<div id="header">
		<div class="wrapper header"></div>
	</div>
	<div id="block1">
		<div class="wrapper block1"></div>
	</div>
	<div id="block2">
		<div class="wrapper block2"></div>
	</div>
	<div id="block3">
		<div class="wrapper block3"></div>
	</div>
	<div id="block4">
		<div class="wrapper block4"></div>
	</div>
	<div id="block5">
		<div class="wrapper block5"></div>
	</div>
	<div id="block6">
		<div class="wrapper block6"></div>
	</div>
	<div id="block7">
		<div class="wrapper block7"></div>
	</div>
	<div id="footer">
		<div class="wrapper footer"></div>
	</div>

	<!-- Всплывающее окно с формой -->
	<div class="popup__overlay" style="">
		<div class="popup">
			<div class="popup__close">x</div>
			<div id="popup_form">
				<form action="contact.php" method="get" autocomplete="off">
					<h2>Оставить заявку</h2>
					<p>и мы свяжемся с вами через 15 минут</p>
					<input name="name" minlength="2" type="text" placeholder="Введите имя" /><br />
					<input name="email" minlength="2" type="text" placeholder="Введите E-mail" /><br />
					<input type="tel" name="phone" placeholder="Введите телефон" required /><br />
					<!-- hidden -->
					<input type="hidden" name="referer" value="<?=@$_SERVER['HTTP_REFERER'];?>">
					<input type="hidden" name="phrase" value="<?=@$_GET['phrase'];?>">
					<input type="hidden" name="home" value="<?=@$_SERVER['REQUEST_URI'];?>">
					<!-- end hidden -->
					<input type="submit" value="" />
				</form>
			</div>
		</div>
	</div>

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/jquery.fancybox.js" type="text/javascript"></script>
<script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
</body>
</html>