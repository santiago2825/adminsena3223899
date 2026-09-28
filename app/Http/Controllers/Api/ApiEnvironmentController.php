<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Environment;
use Illuminate\Http\Request;

class ApiEnvironmentController extends Controller
{
    /**
     * Obtener el listado de ambientes paginado.
     * GET /api/v1/environment
     */
    public function index()
    {
        $environments = Environment::with('training_center')->get();
        return response()->json($environments, 200);
    }

    /**
     * Obtener un ambiente específico por su ID.
     * GET /api/v1/environment/{id}
     */
    public function show($id)
    {
        $environments = Environment::find($id);

        if (!$environments) {
            return response()->json(['message' => 'Ambiente no encontrado'], 404);
        }

        return response()->json($environments, 200);
    }

    /**
     * Crear un nuevo ambiente.
     * POST /api/v1/environment
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'               => 'required|string|max:255',
            'location'           => 'required|string|max:255',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $environments = Environment::create($request->all());

        return response()->json($environments, 201);
    }

    /**
     * Actualizar un ambiente existente.
     * PUT/PATCH /api/v1/environment/{environment}
     */
    public function update(Request $request, Environment $environments)
    {
        $request->validate([
            'name'               => 'sometimes|required|string|max:255',
            'location'           => 'sometimes|required|string|max:255',
            'training_center_id' => 'sometimes|required|exists:training_centers,id',
        ]);

        $environments->update($request->all());

        return response()->json($environments, 200);
    }

    /**
     * Eliminar un ambiente.
     * DELETE /api/v1/environment/{environment}
     */
    public function destroy(Environment $environments)
    {
        $environments->delete();

        return response()->json([
            'message' => 'Ambiente eliminado correctamente',
            'data'    => $environments
        ], 200);
    }
}