@extends('layouts.include.admin.master')
@section('content')

<div class="pd-ltr-20 py-4">

    <div class="row">
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                <div class="d-flex flex-wrap align-items-center pt-4">
                    <div class="col-12">
                        <div class="h4 mb-0 text-primary">₦ </div>
                        <div class="weight-600 font-14">Payment</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                <div class="d-flex flex-wrap align-items-center pt-4">
                    <div class="col-12">
                        <div class="h4 mb-0 text-primary">{{ number_format($student) }}</div>
                        <div class="weight-600 font-14">Students Registration</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                <div class="d-flex flex-wrap align-items-center pt-4">
                    <div class="col-12">
                        <div class="h4 mb-0 text-primary">5</div>
                        <div class="weight-600 font-14">Student Bookings</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                <div class="d-flex flex-wrap align-items-center pt-4">
                    <div class="col-12">
                        <div class="h4 mb-0 text-primary">5</div>
                        <div class="weight-600 font-14">Male Hostel</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                <div class="d-flex flex-wrap align-items-center pt-4">
                    <div class="col-12">
                        <div class="h4 mb-0 text-primary">5</div>
                        <div class="weight-600 font-14">Female Hostel</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                <div class="d-flex flex-wrap align-items-center pt-4">
                    <div class="col-12">
                        <div class="h4 mb-0 text-primary">1</div>
                        <div class="weight-600 font-14">Male Rooms</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                <div class="d-flex flex-wrap align-items-center pt-4">
                    <div class="col-12">
                        <div class="h4 mb-0 text-primary">0</div>
                        <div class="weight-600 font-14">Female Rooms</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                <div class="d-flex flex-wrap align-items-center pt-4">
                    <div class="col-12">
                        <div class="h4 mb-0 text-primary">0</div>
                        <div class="weight-600 font-14">Allocate Rooms</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection

