<?php

if (! isset($_GET['page']))

{
    $_GET['page']=1;
}

?>


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
			<p>
                <script language="JavaScript">
                    var h=(new Date()).getHours();
                    if (h >3 && h< 12) document.writeln("Tere hommikust!");
                    if (h>11 && h< 19) document.writeln("Tere p&auml;evast!");
                    if (h>18 && h< 24) document.writeln("Tere &otilde;htust!");
                    if (h>23 || h< 4) document.writeln("Head &ouml;&ouml;d!");
                </script>
            </p>
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
		<h3>????????????????????</h3>
		<a href="#skip-menu" class="hidden">Skip menu</a>
		<ul class="menu">
			<li><a href="bluesite.php?page=1" class="active">Home</a></li>
			<li><a href="bluesite.php?page=2">?????????????????? ????????</a></li>
			<li><a href="bluesite.php?page=3">??????????????</a></li>
			<li><a href="bluesite.php?page=4">???????????????????????? ??????????</a></li>
			<li><a href="bluesite.php?page=5">?????????????????????? ????????</a></li>
            <li><a href="bluesite.php?page=6">?????????? ??????????????</a></li>
            <li><a href="bluesite.php?page=7">????????????????????</a></li>
            <li><a href="bluesite.php?page=8">?????????????????? ??????????????</a></li>
            <li><a href="bluesite.php?page=9">???????????? ??????????</a></li>
            <li><a href="bluesite.php?page=10">?????????????? ????????????</a></li>


            <li class="last"><a href="#">Contact</a></li>
		</ul>
		</div>
		<div id="skip-menu"></div>
		<div class="column-right">
			<div class="box">
			<div class="box-top"></div>
			<div class="box-in">
<?php
$fn0 = ".html";
$fn=$_GET['page'].$fn0;
            include ($fn);
                ?>
            </div>
			</div>
			<div class="box-bottom">
<hr class="noscreen" />
			<div class="footer-info-left"><a href="bluesite.php">?????? ???????????? ???? ??????????????????</a> 2021 ?????? ?????????? ????????????????</div>
			<div class="footer-info-right"><a href="mailto:kira-valeriia.ivanova@ivkhk.ee">?????????????????? ???? ????????</a></div>
			</div>
		</div>
	<div class="cleaner">&nbsp;</div>
	</div>
</div>
</body>
</html>