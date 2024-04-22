<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
use App\Models\Hotel;
use Illuminate\Support\Facades\DB;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $habitaciones = Habitacion::all();

        $habitaciones = DB::table('habitaciones')
            ->join('hoteles', 'habitaciones.hoteles_id', '=', 'hoteles.id')
            ->select('habitaciones.*', 'hoteles.nombre')
            ->get();

        return view('habitacion.index', ['habitaciones' => $habitaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hoteles = Hotel::orderBy('id')
            ->select('id', 'nombre')->get();

        return view('habitacion.new', ['hoteles' => $hoteles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $habitacion = new Habitacion();

        $habitacion->hoteles_id = $request->nombre;
        $habitacion->numero = $request->numero;
        $habitacion->tipo = $request->tipo;
        $habitacion->precio_por_noche = $request->precio_por_noche;
        $habitacion->save();

        $habitaciones = DB::table('habitaciones')
            ->join('hoteles', 'habitaciones.hoteles_id', '=', 'hoteles.id')
            ->select('habitaciones.*', 'hoteles.nombre')
            ->get();

        // return view('habitacion.index', ['habitaciones' => $habitaciones]);
        return redirect()->route('habitaciones.index'); // esta rota me permite que redireccione correctamente
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $habitacion = Habitacion::find($id);

        $habitacion->delete();
        $habitaciones = DB::table('habitaciones')
            ->join('hoteles', 'habitaciones.hoteles_id', '=', 'hoteles.id')
            ->select('habitaciones.*', 'hoteles.nombre')
            ->get();

        // return view('habitaciones.index', ['habitaciones' => $habitaciones]);
        return redirect()->route('habitaciones.index');
    }
}
