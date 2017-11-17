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
                                <a href="{{ url('/edit') }}">edit</a>
                            @else
                                <a href="{{ route('register') }}">Book Appointment</a>
                            @endauth
                        <!-- </div> -->
                    @endif
                </div>
            </div>
        </div>

@endsection
