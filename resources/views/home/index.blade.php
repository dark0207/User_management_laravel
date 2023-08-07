@extends('layouts.app-master')


@section('content')		
	<div class="side-app">
				
		<!-- PAGE-HEADER -->
		<div class="page-header">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">{{ __('global.home') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{ __('global.dashboard') }}</li>
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
							<h4 class="text-white">{{ __('global.update_profile')}}</h4>
						</a>
					</div>
				</div>
			</div><!-- COL END -->
			<div class="col-md-3">
				<div class="card">
					<div class="card-body iconfont text-center">
						<a href="{{ route('session.index') }}" >
							<i class="icon-list fs-50 text-secondary"></i>
							<h4 class="text-white">{{ __('global.my_session') }}</h4>
						</a>
					</div>
				</div>
			</div><!-- COL END -->
			<div class="col-md-3">
				<div class="card">
					<div class="card-body iconfont text-center">	
						<a href="{{ route('logactivity.index') }}" >
							<i class="icon-menu fs-50 text-secondary"></i>
							<h4 class="text-white">{{ __('global.activity_log') }}</h4>
						</a>
					</div>
				</div>
			</div><!-- COL END -->
			<div class="col-md-3">
				<div class="card">
					<div class="card-body iconfont text-center">
						<a href="{{ route('logout.perform') }}" >
							<i class="icon-login fs-50 text-secondary"></i>
							<h4 class="text-white">{{ __('global.logout') }}</h4>
						</a>
					</div>
				</div>
			</div><!-- COL END -->
			
		</div>
	</div>

@endsection