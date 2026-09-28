<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Training_center;
use Illuminate\Http\Request;

class ApiTrainingCenterController extends Controller
{
    /**
     * Obtener el listado de centros de formación paginado.
     * GET /api/v1/training-center
     */
    public function index()
    {
        $trainingCenters = Training_center::all();
        return response()->json($trainingCenters, 200);
    }

    /**
     * Obtener un centro de formación específico por su ID.
     * GET /api/v1/training-center/{id}
     */
    public function show($id)
    {
        $trainingCenters = Training_center::find($id);
        if (!$trainingCenters) {
            return response()->json(['message' => 'Centro de formación no encontrado'], 404);
        }
        return response()->json($trainingCenters, 200);
    }

    /**
     * Crear un nuevo centro de formación.
     * POST /api/v1/training-center
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);
        $trainingCenters = Training_center::create($request->all());
        return response()->json($trainingCenters, 201);
    }

    /**
     * Actualizar un centro de formación existente.
     * PUT/PATCH /api/v1/training-center/{trainingcenter}
     */
    public function update(Request $request, Training_center $trainingcenters)
    {
        $request->validate([
            'name'     => 'sometimes|required|string|max:255',
            'location' => 'sometimes|required|string|max:255',
        ]);
        $trainingcenters->update($request->all());
        return response()->json($trainingcenters, 200);
    }

    /**
     * Eliminar un centro de formación.
     * DELETE /api/v1/training-center/{trainingcenter}
     */
    public function destroy(Training_center $trainingcenters)
    {
        $trainingcenters->delete();

        return response()->json([
            'message' => 'Centro de formación eliminado correctamente',
            'data'    => $trainingcenters
        ], 200);
    }
}