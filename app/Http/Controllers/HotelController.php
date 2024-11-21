<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\HotelRoom;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Hotel::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $hotel = Hotel::create($request->all());
        return response()->json($hotel, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Hotel::with('hotelroom')->find($id);
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
        //
    }
    public function createTypeRoom(Request $request){
        try {
            $request->validate([ 'hotel_id' => 'required|exists:hotels,id', 'cantidad' => 'required|integer|min:0', ]);
            // Obtener el registro de la tabla hotels
            $hotel = Hotel::findOrFail($request->hotel_id);
            // Calcular la suma actual de los valores en la tabla hotel_rooms
            $currentTotal = $hotel->hotelroom->sum('cantidad');
            // Validar que el nuevo valor no supere el total permitido
            if ($currentTotal + $request->cantidad > $hotel->numero_habitaciones)
            {
                return response()->json([ 'error' => 'La suma de los cantidades en la tabla hotel_rooms no puede superar la cantidad de habitaciones permitido en la tabla hotels.', ], 400);
            }
            $room = HotelRoom::create($request->all());
            return response()->json($room, 201);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => 'Tipo habitacion o Acomodacion ya existe', ], 400);
        }

    }
}