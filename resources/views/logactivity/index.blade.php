@extends('layouts.app-master')

@push('styles')
    <!-- Data table css -->
    <link href="{!! url('theme/plugins/datatable/dataTables.bootstrap4.min.css') !!}" rel="stylesheet"/>
    <!-- NOTIFICATION CSS -->
	<link href="{!! url('theme/plugins/notify-growl/css/jquery.growl.css') !!}" rel="stylesheet"/>
 @endpush
    
@push('scripts')
    <!-- DATA TABLE -->
    <script src="{!! url('theme/plugins/datatable/jquery.dataTables.min.js') !!}" ></script>
    <script src="{!! url('theme/plugins/datatable/dataTables.bootstrap4.min.js') !!}"></script>
    <script src="{!! url('theme/plugins/datatable/datatable.js') !!}"></script>
    <script src="{!! url('theme/plugins/datatable/datatable-2.js') !!}"></script>
    <script src="{!! url('theme/plugins/datatable/dataTables.responsive.min.js') !!}"></script>
    <!-- NOTIFICATIONS JS -->
    <script src="{!! url('theme/plugins/notify-growl/js/rainbow.js') !!}"></script>
    <script src="{!! url('theme/plugins/notify-growl/js/jquery.growl.js') !!}"></script>   
@endpush

@section('content')

    <div class="side-app">
        
        <div class="row" style="margin-top: 30px">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">{{ __('global.ip_address') }}</th>
                                        <th class="wd-15p">{{ __('global.message') }}</th>
                                        <th class="wd-20p">{{ __('global.log_time') }}</th>
                                        <th class="wd-15p">{{ __('global.more_info') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($logs as $log)
                                    <tr>
                                        <td>{{ $log->ip }}</td>
                                        <td>{{ $log->subject }}</td>
                                        <td>{{ $log->created_at }}</td>
                                        <td class="text-center">
                                            <li class="fa fa-info" data-container="body" data-toggle="popover" data-popover-color="popsuccess" data-placement="bottom" title="User agent" data-content="{{ $log->agent }}">
                                                
                                            </li>                                       
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- TABLE WRAPPER -->
                </div>
                <!-- SECTION WRAPPER -->
            </div>
        </div>
</div>
@endsection