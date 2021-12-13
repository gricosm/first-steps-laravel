<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plate;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Plate::all();
    }

    public function store(Request $request)
    {
        return Plate::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Plate::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $plate = Plate::findOrFail($id);
        $plate -> fill($request);
        $plate -> save();
    }

    public function destroy($id)
    {
        $plate = Plate::findOrFail($id);
        $plate -> delete();
    }
}
