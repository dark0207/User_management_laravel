@extends('layouts.app-master')


@section('content')
	<div class="app-content  my-3 my-md-5">

		<!-- HEADER -->
		<div class="header header-fixed ">
			<div class="container-fluid">
				<div class="d-flex">
					<a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
					<a class="header-brand d-md-none" href="{{ route('home.index') }}">
						<img src="{!! url('theme/images/brand/logo.png') !!}" class="header-brand-img desktop-logo" alt="Arox logo">
						<img src="{!! url('theme/images/brand/favicon2.png') !!}" class="header-brand-img mobile-view-logo" alt="Arox logo">
					</a>
					<!-- LOGO -->
					<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
					<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
					
						<div class="dropdown text-center selector profile-1 d-sm-flex d-none">
							<a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
								<span><img src="{!! url('theme/images/faces/female/16.jpg') !!}" alt="profile-user" class="avatar brround cover-image mb-1 ml-0"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
							
								<a class="dropdown-item" href="{{ route('profile.index') }}">
									<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
								</a>
							
								<a class="dropdown-item" href="{{ route('logout.perform') }}">
									<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
								</a>
							</div>
						</div><!-- PROFILE -->
						
					</div>
					<a href="#" class="header-toggler d-lg-none ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
						<span class="header-toggler-icon"></span>
					</a>
				</div>
			</div>
		</div>
		<!-- HEADER END -->

		<div class="side-app">

			<!-- PAGE-HEADER -->
			<div class="page-header">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">Empty page</li>
				</ol>
				
			</div>
			<!-- PAGE-HEADER END -->

			<!-- ROW-1 OPEN -->
			<div class="row"></div>
		</div>
		<!-- CONTAINER CLOSED -->
	</div>
@endsection