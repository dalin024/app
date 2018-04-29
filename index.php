<!DOCTYPE html>

<html>
	<head>
		<title>Orders</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="/css/app.css" rel="stylesheet" type="text/css">

		<script src="/plugins/fastclick/lib/fastclick.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script src="/js/jquery.transit.min.js"></script>
		<script src="/js/ui.js"></script>
		<script src="/js/be.js"></script>
		<script src="/js/svg.js"></script>
		<script src="/js/nav.js"></script>
		<script src="/js/interact.js"></script>
		<script src="/js/bookings.js"></script>
	</head>

	<body>

		<main>
			<!--<div class="view">
				<header>
					<div class="nav"></div>
					<div class="title"></div>
					<div class="action"></div>
				</header>
			</div>-->
		</main>

		<div id="sidebar">

			<header>
				<div class="circle">DL</div>
				<div class="name">David Lindström</div>
				<div class="company">DL-solutions</div>
				<div class="arrow"></div>
			</header>

			<div class="list" target="_self">

				<div class="subheader first">Ordrar</div>
				<a class="item" href="/list/all_orders" data-svg="ico/order_black.svg" data-svg_fill="#0000008a" data-title="Alla ordrar">
					Alla ordrar
					<div class="amount">12</div>
				</a>
				<a class="item" href="/list/my_orders" data-svg="ico/order_black.svg" data-svg_fill="#0000008a" data-title="Mina ordrar">
					Mina ordrar
					<div class="amount highlight">2</div>
				</a>
				<a class="item" href="ended_orders" data-svg="ico/order_black.svg" data-svg_fill="#0000008a" data-title="Avslutade ordrar">
					Avslutade ordrar
					<div class="amount"></div>
				</a>

				<div class="subheader first">Planering</div>
				<a class="item" href="/bookings/" data-svg="ico/bookings_black.svg" data-svg_fill="#0000008a" data-title="Bokningar">
					Bokningar
					<div class="amount highlight">2</div>
				</a>

				<div class="subheader">Tid</div>
				<a class="item" data-svg="ico/time_black.svg" data-svg_fill="#0000008a">
					Rapporterad tid
					<div class="amount">3/8</div>
				</a>
				<a class="item" data-svg="ico/time_black.svg" data-svg_fill="#0000008a">Lönerapportering</a>

				<div class="subheader">Rapporter</div>
				<a class="item" data-svg="ico/debug_black.svg" data-svg_fill="#0000008a">Ändrade</a>
				<a class="item" data-svg="ico/debug_black.svg" data-svg_fill="#0000008a">Ikryssade</a>
				<a class="item" data-svg="ico/debug_black.svg" data-svg_fill="#0000008a">Ej ikryssade</a>

			</div>

			<div class="list hide">
				<div class="subheader">Konto</div>
				<a class="item" data-svg="ico/time_black.svg" data-svg_fill="#0000008a">
					Ändra lösenord
				</a>
				<a class="item" data-svg="ico/time_black.svg" data-svg_fill="#0000008a">
					Ändra färg
				</a>
				<a class="item" data-svg="ico/time_black.svg" data-svg_fill="#0000008a">
					Logga ut
				</a>
			</div>

		</div>

		<div id="sidebar_cover"></div>
		<div id="dialog"></div>

	</body>

</html>