<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hoteles = Hotel::all();
        return view('hotel.index', ['hoteles' => $hoteles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hoteles = DB::table('hoteles')
            ->orderBy('id')
            ->get();
        return view('hotel.new', ['hoteles' => $hoteles]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hotel = new Hotel();
        
        $hotel->nombre = $request->nombre;
        $hotel->ubicacion = $request->ubicacion;
        $hotel->numero_telefonico = $request->numero_telefonico;
        $hotel->email_contacto = $request->email_contacto;
        $hotel->save();
        
        $hoteles = DB::table('hoteles')
        ->orderBy('id')
        ->get();
        // return view('hotel.index', ['hoteles' => $hoteles]);
        return redirect()->route('hoteles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hotel = Hotel::find($id);

        $hoteles = DB::table('hoteles')
        ->orderBy('id')
        ->get();

        return view('hotel.edit',['hotel' => $hotel,'hoteles'=> $hoteles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $hotel = Hotel::find($id);
       
        $hotel->nombre = $request->nombre;
        $hotel->ubicacion = $request->ubicacion;
        $hotel->numero_telefonico = $request->numero_telefonico;
        $hotel->email_contacto = $request->email_contacto;
        $hotel->save();

        $hoteles = DB::table('hoteles')
        ->orderBy('id')
        ->get();

        return view('hotel.index',['hoteles' => $hoteles]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

        $hoteles = DB::table('hoteles')
        ->orderBy('id')
        ->get();

        return view('hotel.index',['hoteles' => $hoteles]);
    }
}
