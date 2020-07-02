<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>FSI</title>

	<!-- CSS Style -->
	<link rel="stylesheet" type="text/css" href="../reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Favicon -->
	<link rel="shortcut icon" href="../images/favicon.ico"/>

</head>


<body>
	<!-- skip nav -->
	<div id="skip">
		<a href="#header_1">Header Principal</a>		
		<a href="#header_2">Header Secundário</a>
		<a href="#nav_1">Menu Principal</a>
		<a href="#nav_2">Menu Secundário</a>
		<a href="#contents">Conteúdo</a>
	</div>
	<!-- // skip nav -->

	<div id="wrap">
		
		<!-- header_1 -->
		<div id="header_1">
			<div>
				<div class="header_1-menu">
					<a href="https://github.com/swy-326/web3.0">Link_1</a>
					<a href="http://fakeupdate.net/wnc/">Link_2</a>
				</div>
				<!-- // header_1 menu -->
				<div class="header_1-title">
					<div class="header_1-icon">
						<a href="http://swytrabalho.byethost18.com/web/">
							<img src="#" width="70" height="70"/>
						</a>
					</div>
					<h1>Vestibulares &amp; Universidades</h1>
					<br>
					<a href="http://swytrabalho.byethost18.com/web/">http://swytrabalho.byethost18.com/web/</a>
				</div>
				<!-- // header_1 title -->
			</div>		
		</div>
		<!-- // header_1 -->

		<!-- header_2 -->
		<div id="header_2">
			<div class="header_2-container">
				<div>
					<p>LISTA</p>
					<p>INFORMAÇÕES</p>
				</div>
			</div>		
			<!-- //header_2-container -->
		</div>
		<!-- // header_2 -->

		<div id="nav_1">
			<div class="nav-main">
				<div>
					<ul>						
						<strong>CALENDÁRIO</strong>
						<li><a href="../pages2/calendario.php">CALENDÁRIO<br>GERAL</a></li>
						<br><br><strong>UNIVERSIDADES</strong>
						<li><a href="enem.php">ENEM</a></li>
						<li><a href="usp.php">USP</a></li>
						<li><a href="unicamp.php">UNICAMP</a></li>
						<li><a href="unesp.php">UNESP</a></li>
						<li><a href="unifesp.php">UNIFESP</a></li>
						<li><a href="ufabc.php">UFABC</a></li>
						<li><a href="ufscar.php">UFSCAR</a></li>
						<li><a href="ifsp.php">IFSP</a></li>
						<li><a href="univesp.php">UNIVESP</a></li>
						<li><a href="ita.php">ITA</a></li>
						<li><a href="fatec.php">FATEC</a></li>
						<li><a href="famema.php">FAMEMA</a></li>
						<li><a href="famerp.php">FAMERP</a></li>
						<li><a href="uscs.php">USCS</a></li>
						<li><a href="unitau.php">UNITAU</a></li><br><br>
						<strong>RANKING</strong>
						<li><a href="../pages2/rank.php">RANKING<br>GERAL</a></li>
					</ul>
				</div>
			</div>
			<!-- // nav-main -->		
		</div>
		<!-- // nav_1 -->
		
		<!-- nav_2 -->
		<div id="nav_2">
			<div class="nav-sub">
				<div>
					<?php
						echo $submenu;
					?>
				</div>
			</div>
			<!-- // nav-sub -->
		</div>
		<!-- // nav_2 -->

		<!-- contents -->
		<div id="contents">
			<div class="cont">
				<div class="cont-title">
					<?php
						echo $title;
					?>
				</div>
				<!-- //cont-title -->

				<div class="cont-cont">
					<?php
						echo $content;
					?>
				</div>
				<!-- //cont-cont -->			
			</div>
		</div>
		<!-- // contents -->

		<!-- footer -->
		<div id="footer">
			<div class="footer-container">
				Copyright &copy; 2020, SWY. All Rights Reserved
			</div>
		</div>
		<!-- // footer -->


	</div>
</body>
</html>



