@extends('layouts.app-master')


@section('content')		
	<div class="side-app">
				
		<!-- PAGE-HEADER -->
		<div class="page-header">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
			</ol>
			
		</div>
		<!-- PAGE-HEADER END -->

		<!-- ROW-1 OPEN -->
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body iconfont text-center">
						<a href="{{ route('profile.index') }}" >
							<i class="icon-user fs-50 text-secondary"></i>
							<h4 class="text-white">Update Profile</h4>
						</a>
					</div>
				</div>
			</div><!-- COL END -->
			<div class="col-md-3">
				<div class="card">
					<div class="card-body iconfont text-center">
						<a href="{{ route('session.index') }}" >
							<i class="icon-list fs-50 text-secondary"></i>
							<h4 class="text-white">My Sessions</h4>
						</a>
					</div>
				</div>
			</div><!-- COL END -->
			<div class="col-md-3">
				<div class="card">
					<div class="card-body iconfont text-center">	
						<a href="{{ route('activitylog.index') }}" >
							<i class="icon-menu fs-50 text-secondary"></i>
							<h4 class="text-white">Activity Log</h4>
						</a>
					</div>
				</div>
			</div><!-- COL END -->
			<div class="col-md-3">
				<div class="card">
					<div class="card-body iconfont text-center">
						<a href="{{ route('logout.perform') }}" >
							<i class="icon-login fs-50 text-secondary"></i>
							<h4 class="text-white">Logout</h4>
						</a>
					</div>
				</div>
			</div><!-- COL END -->
			
		</div>
	</div>

@endsection