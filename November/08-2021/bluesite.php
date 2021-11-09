<?php
if (! isset($_GET['page']))
{ $_GET['page']=1;}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!-- This template was created by Mantis-a [http://www.mantisa.cz/]. For more templates visit Free website templates [http://www.mantisatemplates.com/]. -->

<meta name="Description" content="..." />
<meta name="Keywords" content="..." />
<meta name="robots" content="all,follow" />
<meta name="author" content="..." />
<meta name="copyright" content="Mantis-a [http://www.mantisa.cz/]" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<title>My personal website | Homepage</title>
</head>
<body>
<div id="wrapper">
	<!-- Title -->
	<div class="title">
		<div class="title-top">
		<div class="title-left">
		<div class="title-right">
		<div class="title-bottom">
		<div class="title-top-left">
		<div class="title-bottom-left">
		<div class="title-top-right">
		<div class="title-bottom-right">
			<h1><a href="/" title="Go to homepage">MY <span>PERSONAL</span> WEBSITE</a></h1>
			<p>Lorem ipsum dolor sit amet&hellip;</p>
			<h2>Часы с циферблатом</h2>
	<script type="text/javascript">
    function clockPainting() {
        var now = new Date();
        var sec = now.getSeconds();
        var min = now.getMinutes();
        var hr = now.getHours();

        var ctx = document.getElementById("canvas").getContext("2d");
        ctx.save();// помещаем текущий контекст в стэк

        ctx.clearRect(0,0,150,150);
        ctx.translate(75, 75);
        ctx.scale(0.4,0.4);
        ctx.rotate(-Math.PI/2);

        ctx.strokeStyle = "black";
        ctx.fillStyle = "black";
        ctx.lineWidth = 8;
        ctx.lineCap = "round";

        ctx.save();
        ctx.beginPath();

        for (var i = 0; i < 12; i++) {
            ctx.rotate(Math.PI/6);
            ctx.moveTo(100,0);
            ctx.lineTo(120,0);
        }

        ctx.stroke();// нарисовали то, что ранее описали
        ctx.restore();// достаем последний сохраненный контекст из стэка

        ctx.save();
        // рисуем часовую стрелку, вращая холст
        ctx.rotate((Math.PI/6)*hr +
            (Math.PI/360)*min +
            (Math.PI/21600)*sec);
        ctx.lineWidth = 14;

        ctx.beginPath();
        ctx.moveTo(-20,0);

        // линия почти до часовых меток
        ctx.lineTo(80,0);
        ctx.stroke();
        ctx.restore();

        ctx.save();

        // минутная стрелка
        ctx.rotate((Math.PI/30*min) +
            (Math.PI/1800)*sec);
        ctx.lineWidth = 10;

        ctx.beginPath();
        ctx.moveTo(-28,0);
        ctx.lineTo(112,0);
        ctx.stroke();
        ctx.restore();

        ctx.save();

        // секундная стрелка
        ctx.rotate(sec * Math.PI/30);
        ctx.strokeStyle = "#D40000";// цвет контура
        ctx.fillStyle = "#D40000";
        ctx.lineWidth = 6;

        ctx.beginPath();
        ctx.moveTo(-30,0);
        ctx.lineTo(83,0);
        ctx.stroke();
        ctx.restore();

        ctx.restore();
    }
    window.onload = function() {
        setInterval(clockPainting, 1000);// функция, перерисовывающая часы
        //через равные промежутки времени
    }
</script>
	<center><canvas id="canvas" height="150" width="150"></canvas></center>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
	</div>
	<!-- Title end -->

<hr class="noscreen" />

	<div class="content">

	<div class="column-left">
		<h3>Содержание</h3>
		<a href="#skip-menu" class="hidden">Skip menu</a>
		<ul class="menu">
			<li><a href="index.php?page=1" class="active">Home</a></li>
			<li><a href="index.php?page=2">Подробные часы</a></li>
			<li><a href="index.php?page=3">Галерея</a></li>
			<li><a href="index.php?page=4">Раскрываемые блоки</a></li>
			<li class="last"><a href="#">Contact</a></li>
		</ul>
		</div>
		<div id="skip-menu"></div>
		<div class="column-right">
			<div class="box">
			<div class="box-top"></div>
			<div class="box-in">
<?php
$fn=$_GET['page'].".html";
            include ($fn);
            ?>
            </div>
			</div>
			<div class="box-bottom">
<hr class="noscreen" />
			<div class="footer-info-left"><a href="https://kira-valeriia.gq/Veebiarendus/08.11/bluesite.php">Мои работы со скриптами</a> 2021 Все права защищены</div>
			<div class="footer-info-right"><a href="mailto:kira-valeriia.ivanova@ivkhk.ee">Связаться со мной</a></div>
			</div>
		</div>
	<div class="cleaner">&nbsp;</div>
	</div>
</div>
</body>
</html>