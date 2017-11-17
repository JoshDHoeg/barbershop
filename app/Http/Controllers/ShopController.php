<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //createa variable that stores all CreateBookingsTable
      $shop = Shop::find(1);

      //return a view and pass in the variable
      return view("home", ["shop"=>$shop]);
        //
        // return view('home');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function edit($id)
    {
        $this->middleware('guest');

        //find post inte database and save as get_class_vars
        $shop = Shop::find($id);

        //return the view and pass inthe var
        return view("edit", ["shop"=>$shop]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function update(Request $request, $id)
    {
      $shopinitial = Shop::find(1);
      $shopinitial->delete();

      // validate the Database
      $this->validate($request, array(
        'name' => 'required|max:255',
        'description' => 'required',
      ));

      //store in the Database
      $shop = new Shop;
      $shop->id = 1;
      $shop->name = $request->input('name');
      $shop->description = $request->input('description');

      $shop->save();


      //then redirect to home
      return redirect()->route('store.index');
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

}
