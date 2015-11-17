<? 
session_start(); 
 
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width">
	<script src="js/jquery-1.11.1.min.js"></script>
	
	<link rel="stylesheet" href="css/jquery.fancybox.css" />
	<link rel="stylesheet" href="css/style.css">
	<title>isfr</title>

</head>
<body>
	<div id="header">
		<div class="wrapper header">
			<div class="logo"></div>
			<div class="headright">
				<div class="headinfo">
					<div class="headname">Международная школа скорочтения</div>
					<div class="headtel"><span>+7 (727)</span> 259 80 96</div>
				</div>
				
			</div>
		</div>
	</div>
	<div id="block1">
		<div class="wrapper block1">
			<div class="thank">
				<h1>СПАСИБО ЗА ЗАЯВКУ!</h1>
				<p>НАШ МЕНЕДЖЕР СВЯЖЕТСЯ С ВАМИ В БЛИЖАЙШЕЕ ВРЕМЯ</p>
				<a href="/">
				            <button style="margin-left:70%; margin-top:20px; height:50px; width:200px; background: linear-gradient(to top, #D29A21, #F7ED7C); font-weight: 700; font-size: 15px;"><strong>ВЕРНУТЬСЯ НА САЙТ</strong></button>
				</a>
			</div>
		</div>
	</div>
	
	<div id="block11">
		<div class="wrapper block11">
			<div class="bl11">
				Б/Ц "Казжол", ул. Гоголя 86, (уг. ул.<br />Наурызбай батыра), 2 этаж, офис 207
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="wrapper footer">
			<div class="logo1"></div>
			<div class="footname">Международная школа скорочтения</div>
			<div class="foottel"><span>+7 (727)</span> 259 80 96</div>
		</div>
	</div>							

<script type="text/javascript">
	$().ready(function() {
		var top = $(window).scrollTop();
	$(document).ready(function() {
		$("a.menu_scroll").click(function () {
		    var elementClick = $(this).attr("href");
		    var destination = $(elementClick).offset().top;
		    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination - 0}, 600);

		    $('.nav ul li').removeClass('active');
		    $(this).parent().addClass('active');
		    
		    return false;
		});
	});
	});
</script>
</body>
</html>