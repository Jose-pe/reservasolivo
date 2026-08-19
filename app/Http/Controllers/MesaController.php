<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            if (Auth::user()->role !== 'admin') {
                    return view('welcome');
                }
    
            return view('admin_mesas');
    }

    public function listar_mesas()
    {
         if (Auth::user()->role !== 'admin') {
                return view('welcome');
            }

        $mesas = Mesa::all();
        return response()->json($mesas);
    }
    
    public function guardar_mesas(Request $request){
             if (Auth::user()->role !== 'admin') {
                return view('welcome');
            }
        $input = $request->all();
        $mesa = Mesa::create($input);
        return response()->json(['success' => true, 'mesa' => $mesa], 201);

    }

    public function mostrar_reserva($id){

        $reserva = Reserva::findOrFail($id);        
        return view('admin_mesas')->with(['reserva' => $reserva]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mesa $mesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mesa $mesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mesa $mesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesa $mesa)
    {
        //
    }
}
