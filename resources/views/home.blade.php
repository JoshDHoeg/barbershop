@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    {{ $shop['name'] }}
                </div>

                <div class="links container">
                    @if (Route::has('login'))
                        <!-- <div class="top-right links"> -->
                            @auth
                                <a class="btn btn-primary" href="{{ route('store.edit', $shop) }}">Edit Barber Shop</a>
                            @else
                                <a class="btn btn-primary" href="{{ route('booking.create') }}">Book Appointment</a>
                            @endauth
                        <!-- </div> -->
                    @endif
                    <a class="btn btn-primary" href="{{ route('booking.index') }}">See Bookings</a>
                </div>

                <div class="description container">
                  {{ $shop['description'] }}
                </div>

            </div>
        </div>

@endsection
