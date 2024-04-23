<?php

namespace App\Http\Controllers;
use App\Models\Reserva;
use App\Models\Habitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = DB::table('reservas')
            ->join('habitaciones', 'reservas.habitaciones_id', '=', 'habitaciones.id')
            ->select('reservas.*', 'habitaciones.numero')
            ->get();

        return view('reserva.index', ['reservas' => $reservas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $habitaciones = Habitacion::orderBy('numero')->get(['id', 'numero']);

        return view('reserva.new', ['habitaciones' => $habitaciones]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reserva = new Reserva();

        $reserva->habitaciones_id = $request->numero;
        $reserva->fecha_inicio = $request->fecha_inicio;
        $reserva->fecha_fin = $request->fecha_fin;
        $reserva->cliente_nombre = $request->cliente_nombre;
        $reserva->cliente_email = $request->cliente_email;
        $reserva->save();

        $reservas = DB::table('reservas')
            ->join('habitaciones', 'reservas.habitaciones_id', '=', 'habitaciones.id')
            ->select('reservas.*', 'habitaciones.numero')
            ->get();

        return redirect()->route('reservas.index');
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
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $reserva = Reserva::find($id);

        $reserva->delete();
        $reservas = DB::table('reservas')
        ->join('habitaciones', 'reservas.habitaciones_id', '=', 'habitaciones.id')
        ->select('reservas.*', 'habitaciones.numero')
        ->get();

        
        return redirect()->route('reservas.index');
    }
}
