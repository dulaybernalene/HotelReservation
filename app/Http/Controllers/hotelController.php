<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all() ;
        return view('hotel',['hotels'=>$hotels,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all() ;
        return view('hotel',['hotels'=>$hotels,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotel= new Hotel();
        $hotel->name= $request->input('name');
        $hotel->address= $request->input('address');
        $hotel->cNum= $request->input('cNum');
        $hotel->creditNum= $request->input('creditNum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::find($id);
        $hotels= Hotel::all() ;
        return view('hotel',['hotels'=>$hotels, 'hotel'=>$hotel,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::find($id);
        $hotels= Hotel::all() ;
        return view('hotel',['hotels'=>$hotels, 'hotel'=>$hotel,'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        $hotel->name= $request->input('name');
        $hotel->address= $request->input('address');
        $hotel->cNum= $request->input('cNum');
        $hotel->creditNum= $request->input('creditNum');
        $hotel->save() ;
        return redirect('/') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel= Hotel::find($id);
        $hotel->delete();
        return redirect('/');
    }
}
