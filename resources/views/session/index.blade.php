@extends('layouts.app-master')

@section('content')

    <div class="side-app">
        
        <!-- ROW-1 -->
        <div class="row" style="margin-top: 30px">
            <div class="col-md-12">
                @include('layouts.partials.messages')
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Active Sessions</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap">
                            <thead >
                                <tr>
                                    <th>IP Address</th>
                                    <th>Device</th>
                                    <th>Browser</th>
                                    <th>Last Activity</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $session->ip_address }}</th>
                                    <td>WebKit(Window)</td>
                                    <td>Chrome</td>
                                    <td>{{ $session->last_activity }}</td>
                                    
                                    <td class="text-center">
                                        <form action="{{ route('session.destory', $session->id) }}" method="Post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-primary-light badge" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- table-responsive -->
                </div>
            </div>
        </div>
        <!-- ROW-1 CLOSED -->
    </div>
@endsection