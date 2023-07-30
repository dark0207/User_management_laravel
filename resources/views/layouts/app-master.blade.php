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
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

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

		<!-- RIGHT-MENU CSS -->
		<link href="{!! url('theme/plugins/sidebar/sidebar.css') !!}" rel="stylesheet">

		<!-- LEFT-SIDEMENU CSS -->
		<link href="{!! url('theme/plugins/jquery-jside-menu-master/css/jside-menu.css') !!}" rel="stylesheet"/>
		<link href="{!! url('theme/plugins/jquery-jside-menu-master/css/jside-skins.css') !!}" rel="stylesheet"/>

		<!-- HORIZONTAL-MENU CSS -->
		<link href="{!! url('theme/plugins/horizontal-menu/dropdown-effects/fade-down.css') !!}" rel="stylesheet">
		<link href="{!! url('theme/plugins/horizontal-menu/horizontal-menu.css') !!}" rel="stylesheet">

		<!-- TABS CSS -->
		<link href="{!! url('theme/plugins/tabs/tabs-style2.css') !!}" rel="stylesheet" type="text/css">

		<!-- SELECT2 CSS -->
		<link href="{!! url('theme/plugins/select2/select2.min.css') !!}" rel="stylesheet"/>

		<!-- TIME PICKER CSS -->
		<link href="{!! url('theme/plugins/time-picker/jquery.timepicker.css') !!}" rel="stylesheet"/>

		<!-- DATE PICKER CSS -->
		<link href="{!! url('theme/plugins/spectrum-date-picker/spectrum.css') !!}" rel="stylesheet"/>

		<!-- MULTI SELECT CSS -->
		<link rel="stylesheet" href="{!! url('theme/plugins/multipleselect/multiple-select.css') !!}">

		<!-- FILE UPLODES -->
    <link href="{!! url('theme/plugins/fileuploads/css/dropify.min.css') !!}" rel="stylesheet" type="text/css"/>

	</head>
	<body class="app sidebar-mini rtl color1 sidenav-toggled1 sidenav-toggled">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{!! url('theme/images/loader.svg') !!}" class="loader-img" alt="Loader">
		</div>

		<div class="page">
			<div class="page-main">

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<a class="header-brand left-meu-header-brand left-meu-header-brand-desktop" href="{{ route('home.index') }}">
						<img src="{!! url('theme/images/brand/logo2.png') !!}" class="header-brand-img desktop-logo" alt="Arox logo">
						<img src="{!! url('theme/images/brand/favicon.png') !!}" class="header-brand-img mobile-view-logo" alt="Arox logo">
					</a>
		
					<div class="side-tab-body p-0 border-0 resp-vtabs hor_1">
						<div class="first-sidemenu">
							<ul class="resp-tabs-list hor_1">
								<li data-toggle="tooltip" data-placement="right" title="Home" class="resp-tab-item hor_1"><i class="side-menu__icon typcn typcn-device-desktop"></i><div class="slider-text">Home</div></li>
							</ul>
						</div>
					</div>
				</aside>
				<!--sidemenu end-->

				<!-- app-content-->
				@yield('content')
			</div>


		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

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

		<!--Side-menu js-->
		<script src="{!! url('theme/plugins/side-menu/sidemenu.js') !!}"></script>

		<!-- STICKY JS-->
		<script src="{!! url('theme/js/sticky.js') !!}"></script>
		<script src="{!! url('theme/js/horizontal-sticky.js') !!}"></script>

		<!-- Sidebar Accordions js -->
		<script src="{!! url('theme/plugins/sidemenu-responsive-tabs/js/easyResponsiveTabs.js') !!}"></script>

		<!-- Perfect scroll bar js-->
		<script src="{!! url('theme/plugins/pscrollbar/perfect-scrollbar.js') !!}"></script>

		<!-- CUSTOM SCROLL BAR JS-->
		<script src="{!! url('theme/plugins/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') !!}"></script>

		<!-- LEFT-SIDEMENU PLUGIN -->
		<script src="{!! url('theme/plugins/jquery-jside-menu-master/js/jquery.jside.menu.js') !!}"></script>

		<!-- HORIZONTAL-MENU JS -->
		<script src="{!! url('theme/plugins/horizontal-menu/horizontal-menu.js') !!}"></script>
		<script src="{!! url('theme/plugins/jquery-jside-menu-master/docs/demo-only.js') !!}"></script>

		<!-- RIGHT-MENU JS -->
		<script src="{!! url('theme/plugins/sidebar/sidebar.js') !!}"></script>

    <!-- POPOVER JS -->
		<script src="{!! url('theme/js/popover.js') !!}"></script>

		<!-- Left CUSTOM JS-->
		<script src="{!! url('theme/js/left-custom.js') !!}"></script>

		<!-- CUSTOM JS-->
		<script src="{!! url('theme/js/custom.js') !!}"></script>

    

		<!-- C3.JS CHART PLUGIN -->
		<script src="{!! url('theme/plugins/charts-c3/d3.v5.min.js') !!}"></script>
		<script src="{!! url('theme/plugins/charts-c3/c3-chart.js') !!}"></script>

    <!-- CUSTOM SCROLLBAR -->
		<script src="{!! url('theme/plugins/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') !!}"></script>

		<!-- SELECT2 PLUGIN -->
		<script src="{!! url('theme/plugins/select2/select2.full.min.js') !!}"></script>

		<!-- TIMEPICKER JS -->
		<script src="{!! url('theme/plugins/time-picker/jquery.timepicker.js') !!}"></script>
		<script src="{!! url('theme/plugins/time-picker/toggles.min.js') !!}"></script>

		<!-- DATEPICKER JS -->
		<script src="{!! url('theme/plugins/spectrum-date-picker/spectrum.js') !!}"></script>
		<script src="{!! url('theme/plugins/spectrum-date-picker/jquery-ui.js') !!}"></script>
		<script src="{!! url('theme/plugins/input-mask/jquery.maskedinput.js') !!}"></script>

		<!-- DATA TABLE -->
		<script src="{!! url('theme/plugins/datatable/jquery.dataTables.min.js') !!}"></script>
		<script src="{!! url('theme/plugins/datatable/dataTables.bootstrap4.min.js') !!}"></script>

		<!-- SELECT2 JS -->
		<script src="{!! url('theme/js/select2.js') !!}"></script>

		<!-- FILE UPLOADES JS -->
        <script src="{!! url('theme/plugins/fileuploads/js/dropify.min.js') !!}"></script>
        <script src="{!! url('theme/plugins/fileuploads/js/file-upload.js') !!}"></script>

		<!-- MULTI SELECT JS-->
		<script src="{!! url('theme/plugins/multipleselect/multiple-select.js') !!}"></script>
		<script src="{!! url('theme/plugins/multipleselect/multi-select.js') !!}"></script>

	</body>
</html>