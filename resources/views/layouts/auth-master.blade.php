<!doctype html>
<html lang="en" dir="ltr">
  <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- TITLE -->
		<title>{{ config('app.name') }}</title>

		<!-- DASHBOARD CSS -->
		<link href="{!! url('theme/css/dashboard.css') !!}" rel="stylesheet"/>

		<!-- COLOR-THEMES CSS -->
		<link href="{!! url('theme/css/color-themes.css') !!}" rel="stylesheet"/>

		<!-- Sidemenu css -->
		<link href="{!! url('theme/plugins/side-menu/full-sidemenu.css') !!}" rel="stylesheet" />

		<!-- Sidebar Accordions css -->
		<link href="{!! url('theme/plugins/sidemenu-responsive-tabs/css/easy-responsive-tabs.css') !!}" rel="stylesheet">

		<!-- Perfect scroll bar css-->
		<link href="{!! url('theme/plugins/pscrollbar/perfect-scrollbar.css') !!}" rel="stylesheet" />

		<!-- SINGLE-PAGE CSS -->
		<link href="{!! url('theme/plugins/single-page/css/main.css') !!}" rel="stylesheet" type="text/css">

		<!--C3.JS CHARTS PLUGIN -->
		<link href="{!! url('theme/plugins/charts-c3/c3-chart.css') !!}" rel="stylesheet"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="{!! url('theme/plugins/mcustomscrollbar/jquery.mCustomScrollbar.css') !!}" rel="stylesheet"/>

		<!--- FONT-ICONS CSS -->
		<link href="{!! url('theme/css/icons.css') !!}" rel="stylesheet"/>

	</head>
	<body class="app sidebar-mini rtl">


	<div id='stars2'></div>

		<!-- GLOABAL LOADER -->
		<div id="global-loader">
			<img src="{!! url('theme/images/loader.svg') !!}" class="loader-img" alt="Loader">
		</div>

		<div class="page">
			<div class="">
				<!-- CONTAINER OPEN -->
				<div class="col col-login mx-auto">
					<div class="text-center">
						<img src="{!! url('theme/images/brand/logo.png') !!}" class="" alt="">
					</div>
				</div>
				<div class="container-1">
          			@yield('content')
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
		</div>

		<!-- JQUERY SCRIPTS -->
		<script src="{!! url('theme/js/vendors/jquery-3.2.1.min.js') !!}"></script>

		<!-- BOOTSTRAP SCRIPTS -->
		<script src="{!! url('theme/js/vendors/bootstrap.bundle.min.js') !!}"></script>

		<!-- SPARKLINE -->
		<script src="{!! url('theme/js/vendors/jquery.sparkline.min.js') !!}"></script>

		<!-- CHART-CIRCLE -->
		<script src="{!! url('theme/js/vendors/circle-progress.min.js') !!}"></script>

		<!-- RATING STAR -->
		<script src="{!! url('theme/plugins/rating/jquery.rating-stars.js') !!}"></script>

		<!-- INPUT MASK PLUGIN-->
		<script src="{!! url('theme/plugins/input-mask/jquery.mask.min.js') !!}"></script>

		<!-- CUSTOM SCROLL BAR JS-->
		<script src="{!! url('theme/plugins/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') !!}"></script>


		<!-- Left CUSTOM JS-->
		<script src="{!! url('theme/js/left-custom.js') !!}"></script>

		<!-- CUSTOM JS-->
		<script src="{!! url('theme/js/custom.js') !!}"></script>

	</body>
</html>
