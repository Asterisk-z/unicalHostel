@extends('layouts.include.student.master')
@section('content')
<div class="pd-20 card-box mb-30">
    <div class="clearfix">

@if(Session::has('success_message'))
    <div class="alert alert-success solid  fade show" role="alert" style="margin-top:3px; font-family:Bahnschrift; font-size:19px;">

        {{Session::get('success_message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>&times;</span>
        </button>
    </div>
@endif

        <h5 class="mb-30 text-dark">Hostel Booking Details</h5>
        <hr>
    </div>
    <div class="wizard-content py-3">
        <form action="{{ route('room.store') }}" method="POST">
            {{-- <h5>Personal Info</h5> --}}
            @include('sweetalert::alert')

            @csrf
            <section>
                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Hostel Name</label>
                            <select class="form-select form-control @error('hostel_id') is-invalid @enderror" name="hostel" id="hostelList">
                                <option selected='' disabled>Select type</option>

                                @foreach ($hostel as $hostel )
                                     <option value="{{ $hostel->id }}">
                                        {{ ucfirst($hostel->hostel_name) }}
                                    </option>

                                @endforeach

                            </select>

                            @error('hostel_id')
                            <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                            @enderror

                         </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Room no.</label>
                            <select class="form-select form-control @error('roomNumber') is-invalid @enderror" name="hostel_id" id="roomList">
                                <option selected='' disabled>Select type</option>



                            </select>
                            @error('roomNumber')
                            <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                            @enderror
                        </div>
                    </div>


                </div>






                <div class="input-group mb-0 py-3">

                    <button class="btn btn-primary">Submit</button>

                </div>
            </section>


        </form>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        let hotelId = document.getElementById('hostelList');
        let roomList = document.getElementById('roomList');
        hotelId.addEventListener('change', selectAction);

        function selectAction(e) {
            console.clear();
           
            let id = hotelId.value;
            let url = "{{ route('listHostelRoom') }}";

            const data = { hotelId: id };
            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': '*/*',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(data),
            })
            .then((response) => response.json())
            .then((result) => {
                if(result.rooms.length > 0) {
                    for(var i = 0; i < result.rooms.length; i++ ) {
                        if(result.rooms[i].available_status == 0) {
                            var option = document.createElement("option");
                            option.value = result.rooms[i].id;
                            option.text = result.rooms[i].room_no;
                            roomList.add(option);
                        }
                    }
                }

            }).catch((error) => {
                console.error('Error:', error);
            });


        }
    </script>
@endsection


