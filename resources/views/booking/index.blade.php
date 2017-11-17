@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h2>{{ $count * 15 }} minute wait</h2>
                @if (Route::has('login'))
                        @auth

                        @else
                            <a href="{{ route('booking.create') }}">Book Appointment</a>
                        @endauth
                @endif

                <div class="bookings">
                  <div class="row">
                    <div class="col-md-12">
                      <table class="table">
                        <thead>
                          <th>#</th>
                          <th>First</th>
                          <th>Last</th>
                          <th>Phone</th>
                          <th>Done</th>
                        </thead>

                        <tbody>
                          @foreach ($bookings as $booking)

                            <tr>
                              <td>{{ $booking['id'] }}</td>
                              <td>{{ $booking['first'] }}</td>
                              <td>{{ $booking['last'] }}</td>
                              <td>{{ $booking['phone'] }}</td>
                              <td>
                                @if (Route::has('login'))
                                  @auth
                                      delete
                                  @else
                                      inline
                                  @endauth
                                @endif
                              </td>
                            </tr>

                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>

                </div>
            </div>
        </div>


@endsection
