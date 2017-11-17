@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Barber
                </div>

                <div class="links">
                    @if (Route::has('login'))
                        <!-- <div class="top-right links"> -->
                            @auth
                                <a href="{{ url('/store/1/edit') }}">edit</a>
                            @else
                                <a href="{{ route('booking.create') }}">Book Appointment</a>
                            @endauth
                        <!-- </div> -->
                    @endif
                    <a href="{{ route('booking.index') }}">See Bookings</a>
                </div>
            </div>
        </div>

@endsection
