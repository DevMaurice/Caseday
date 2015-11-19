<?php

namespace App\Http\Controllers\Admin;

use App\Court;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class CourtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courts=Court::latest()->get();
        $model='court';
        return view('court.index',compact('courts','model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('court.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Court $court)
    {

        $court->create($request->all());

        Flash::success('Court created');

        return redirect('/court');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Court $court)
    {        
        return view('court.show', compact('court'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Court $court)
    {        
        return view('court.create_edit', compact('court'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Court $court)
    {
        $court->update($request->all());

        Flash::success('Updated Successfully');

        return redirect('/court');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Court $court)
    {
         $court->delete();

        Flash::success($court->name.'Deleted Successfully');

        return redirect('/court');
    }
}
