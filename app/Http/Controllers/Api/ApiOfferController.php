<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class ApiOfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        return response()->json($offers, 200);
    }

    /**
     * Obtener una oferta específica por su ID.
     * GET /api/offer/{id}
     */
    public function show($id)
    {
        $offer = Offer::find($id);

        if (!$offer) {
            return response()->json(['message' => 'Oferta no encontrada'], 404);
        }

        return response()->json($offer, 200);
    }

    /**
     * Crear una nueva oferta.
     * POST /api/offer
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'state'       => 'boolean',
            'start_date'  => 'required|date',
            'end_date'    => 'required|date|after_or_equal:start_date',
        ]);

        // Opcional: asegurarte de que state sea interpretado como booleano
        $data = $request->all();
        $data['state'] = $request->boolean('state');

        $offer = Offer::create($data);

        return response()->json($offer, 201);
    }

    /**
     * Actualizar una oferta existente.
     * PUT/PATCH /api/offer/{offer}
     */
    public function update(Request $request, Offer $offers)
    {
        $request->validate([
            'description' => 'sometimes|required|string',
            'state'       => 'sometimes|boolean',
            'start_date'  => 'sometimes|required|date',
            'end_date'    => 'sometimes|required|date|after_or_equal:start_date',
        ]);

        $offers->update($request->all());

        return response()->json($offers, 200);
    }

    /**
     * Eliminar una oferta.
     * DELETE /api/offer/{offer}
     */
    public function destroy(Offer $offers)
    {
        $offers->delete();

        return response()->json([
            'message' => 'Oferta eliminada correctamente',
            'data' => $offers
        ], 200);
    }
}
