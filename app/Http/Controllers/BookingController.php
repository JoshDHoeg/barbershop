<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bookings;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //createa variable that stores all CreateBookingsTable
        $bookings = Bookings::all();
        $count = $bookings->count();

        //return a view and pass in the variable
        return view("booking.index", ["bookings"=>$bookings, "count"=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the Database
        $this->validate($request, array(
          'first' => 'required|max:255',
          'last' => 'required|max:255',
          'phone' => 'required|max:255'
        ));

        //store in the Database
        $booking = new Bookings;

        $booking->first = $request->first;
        $booking->last = $request->last;
        $booking->phone = $request->phone;

        $booking->save();

        //then redirect to home
        return redirect()->route('store.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function destroy($id)
    {
        //first build variable to hold thing we are deleting
        $booking = Bookings::find($id);
        //delete the particular
        $booking->delete();

        //then redirect to home
        return redirect()->route('store.index');
    }

    public function __construct()
    {
        $this->middleware('auth')->only('destroy');
    }
}
