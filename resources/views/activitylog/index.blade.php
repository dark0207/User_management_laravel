@extends('layouts.app-master')

@section('content')

    <div class="side-app">
        
        <!-- ROW OPEN -->
        <div class="row" style="margin-top: 30px">
            <div class="col-lg-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="">
                    <div class="input-group-append ">
                        <button type="button" class="btn btn-primary-light">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="card mt-5 users store">
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap">
                            <tr>
                                <td>Mens Jackets</td>
                                <td>
                                    <div class="rating-stars block" id="rating1">
                                        <div class="rating-stars-container">
                                            <div class="rating-star sm is--active">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm is--active">
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star sm">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right text-primary-1 d-md-table-cell text-nowrap">50% off</td>

                                <td class="text-right">
                                    <strong>$1,987</strong>
                                </td>
                                <td class="text-right" data-toggle="tooltip" data-placement="bottom" title="Widget">
                                    <a class="btn btn-success-light btn-sm text-white mr-2">view</a>
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
                <div>
                    <ul class="pagination mb-5 float-right">
                        <li class="page-item page-prev disabled">
                            <a class="page-link" href="#" tabindex="-1">Prev</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item page-next">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ROW CLOSE -->
</div>
@endsection