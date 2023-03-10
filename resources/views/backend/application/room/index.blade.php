@extends('layouts.include.admin.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Hostel Report</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Hostel</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary" href="{{ route('roomCreate') }}">
                               Add New
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->

            <!-- Checkbox select Datatable End -->
				<!-- Export Datatable start -->
                @if(Session::has('success_message'))
                <div class="alert alert-success solid  fade show" role="alert" style="margin-top:3px; font-family:Bahnschrift; font-size:19px;">

                    {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
             @endif
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Hostel Report </h4>
					</div>

					<div class="pb-20">
						<table class="table hover table-bordered multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">S/N</th>
									<th>Room No.</th>
									<th>Type</th>
									<th>Numbers of Bed</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
                                @foreach ( $room as $rooms )

								<tr>
									<td class="table-plus">{{ $rooms->id }}</td>
									<td>{{ $rooms->room_no}}</td>
									<td>{{ $rooms->type }}</td>
									<td>{{$rooms->bed }}</td>
									<td>
                                        <div>
                                            <a href=""><span class="icon-copy ti-pencil-alt mr-1"></span></a>


                                                {{-- <a href="{{ $rooms->id }}" data-toggle="modal" data-target="#confirmation-modal" type="button"><span class="icon-copy ti-trash fs-40 mx-2" ></span></a> --}}


                                        </div>
                                    </td>
								</tr>
                                @endforeach


							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
        </div>

    </div>


            <div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-hidden="true" >

                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center font-18">
                            <h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to delete ?</h4>
                            <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
                                <div class="col-6">
                                    <button type="button" class="btn btn-danger border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    NO
                                </div>
                                <div class="col-6">
                                {{-- <form action="{{route('room.delete', $rooms->id) }}" method="post"> --}}
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-success border-radius-100 btn-block confirmation-btn" ><i class="fa fa-check"></i></button>

                                    YES
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
@endsection

@section('scripts')
<script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>

<script src="{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>
@endsection
