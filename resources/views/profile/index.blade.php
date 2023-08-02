@extends('layouts.app-master')

@push('styles')
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

@endpush

@push('scripts')
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
	
@endpush

@section('content')

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
								<div class="form-group">
									<label class="form-label">Company</label>
									<div class="form-group">
										<select class="form-control select2" multiple="multiple" name="companies[]" data-placeholder="Select Companies" >
											
											@foreach($companies as $company)
												<option value="{{ $company->id }}" @if(in_array($company->id, $company_ids)) selected @endif>{{ $company->username }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							@endif
							
							<div class="col-md-12">
								<div class="form-group overflow-hidden">
									<div class="form-group">
										<label class="form-label">Role</label>
										<select class="form-control select2 w-100" name="role" value="{{ old('role') }}" placeholder="Role" required="required" >
											<option value="user" @if($profile->role=='user') selected @endif>User</option>
											<option value="company" @if($profile->role=='company') selected @endif>Company</option>
										</select>
										@if ($errors->has('role'))
											<span class="text-danger text-left">{{ $errors->first('role') }}</span>
										@endif
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group overflow-hidden">
									<label class="form-label">State</label>
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
											<label class="form-label">User Avatar</label>
											<input type="file" class="dropify" name="personal_avatar" data-default-file="{{profile_picture($profile->personal_avatar)}}" data-height="300"  />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group overflow-hidden">
											<label class="form-label">Company Avatar</label>
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
		
@endsection

