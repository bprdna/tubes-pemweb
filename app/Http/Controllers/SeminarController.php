<?php

namespace App\Http\Controllers;

use App\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seminar = Seminar::all();
        return view('admin.index', ['seminar' => $seminar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'date' => 'required'
        ]);

        Seminar::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date
        ]);
        
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function show(Seminar $seminar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seminar = Seminar::find($id);

        return view('admin.edit', ['seminar' => $seminar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'date' => 'required'
        ]);

        $seminar = Seminar::find($id);
        $seminar->title = $request->title;
        $seminar->description = $request->description;
        $seminar->location = $request->location;
        $seminar->date = $request->date;
        $seminar->save();

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seminar = Seminar::find($id);
        $seminar->delete();
        
        return redirect('/admin');
    }
}
