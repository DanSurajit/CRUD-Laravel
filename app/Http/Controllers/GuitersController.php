<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guiter;

class GuitersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guiters.index', [
            'guiters' => Guiter::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guiters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'guiter-name' => 'required',
            'brand' => 'required',
            'year' => 'required|integer'
        ]);

        $guiter = new Guiter();

        $guiter->name = $request->input('guiter-name');
        $guiter->brand = $request->input('brand');
        $guiter->year_made = $request->input('year');

        $guiter->save();

        return redirect()->route('guiters.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guiter = Guiter::findOrFail($id);

        return view('guiters.show', compact('guiter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guiter = Guiter::findOrFail($id);

        return view('guiters.edit', compact('guiter'));
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
        $request->validate([
            'guiter-name' => 'required',
            'brand' => 'required',
            'year' => 'required|integer'
        ]);

        $guiter = Guiter::findOrFail($id);

        $guiter->name = $request->input('guiter-name');
        $guiter->brand = $request->input('brand');
        $guiter->year_made = $request->input('year');

        $guiter->save();

        return redirect()->route('guiters.show', compact('guiter'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
