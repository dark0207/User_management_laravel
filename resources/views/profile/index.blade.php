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

			<!-- ROW-1 OPEN -->
			<div class="row">
				
				<div class="col-lg-12">
					
					<form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />

						<div class="card-header">
							<h3 class="card-title">Edit Profile</h3>
						</div>
						
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									@include('layouts.partials.messages')
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-label">Username</label>
										<input type="text" class="form-control" name="username" value="{{ $profile->username }}" placeholder="Username" >
										@if ($errors->has('username'))
											<span class="text-danger text-left">{{ $errors->first('username') }}</span>
										@endif
									</div>
								</div>
								@if(auth()->user()->role == 'user')
								<div class="col-md-12">
									<label class="form-label">Company</label>
									<div class="form-group overflow-hidden">
										<select class="form-control select2 w-100" multiple="multiple" name="companies[]" data-placeholder="Select Companies" >
											
											@foreach($companies as $company)
												<option value="{{ $company->id }}" @if(in_array($company->id, $company_ids)) selected @endif>{{ $company->username }}</option>
											@endforeach
										</select>
									</div>
								</div>
								@endif
								
								<div class="col-md-12">
									<div class="form-group overflow-hidden">
										<label>Role</label>
										<select class="form-control select2 w-100" name="role" value="{{ old('role') }}" placeholder="Role" required="required" >
											<option value="user" @if($profile->role=='user') selected @endif>User</option>
											<option value="company" @if($profile->role=='company') selected @endif>Company</option>
										</select>
										@if ($errors->has('role'))
											<span class="text-danger text-left">{{ $errors->first('role') }}</span>
										@endif
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group overflow-hidden">
										<label>State</label>
										<select class="form-control select2 w-100" name="state" value="{{ old('state') }}" placeholder="State" required="required">
											<option value="guest" @if($profile->state=='guest') selected @endif>Guest</option>
											<option value="none-verified-user" @if($profile->state=='none-verified-user') selected @endif>None Verified User</option>
											<option value="verified-user" @if($profile->state=='verified-user') selected @endif>Verified User</option>
										</select>
										@if ($errors->has('state'))
											<span class="text-danger text-left">{{ $errors->first('state') }}</span>
										@endif
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group overflow-hidden">
												<label>User Avatar</label>
												<input type="file" class="dropify" name="personal_avatar" data-default-file="{{profile_picture($profile->personal_avatar)}}" data-height="300"  />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group overflow-hidden">
												<label>Company Avatar</label>
												<input type="file" class="dropify" name="business_avatar" data-default-file="{{profile_picture($profile->business_avatar)}}" data-height="300"  />
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="card-footer text-right">
							<button type="submit" class="btn btn-primary-light">Update Profile</button>
						</div>
					</form>
				</div><!-- COL END -->
			</div>
			<!-- ROW-1 CLOSED -->

		</div>
		<!-- CONTAINER CLOSED -->
	</div>

@endsection

