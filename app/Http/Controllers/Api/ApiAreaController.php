<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class ApiAreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return response()->json($areas, 200);
    }

    /**
     * Obtener un área específica por su ID.
     * GET /api/v1/area/{id}
     */
    public function show($id)
    {
        $area = Area::find($id);

        if (!$area) {
            return response()->json(['message' => 'Área no encontrada'], 404);
        }

        return response()->json($area, 200);
    }

    /**
     * Crear una nueva área.
     * POST /api/v1/area
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $area = Area::create($request->all());

        return response()->json($area, 201);
    }

    /**
     * Actualizar un área existente.
     * PUT/PATCH /api/v1/area/{area}
     */
    public function update(Request $request, Area $areas)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $areas->update($request->all());

        return response()->json($areas, 200);
    }

    /**
     * Eliminar un área.
     * DELETE /api/v1/area/{area}
     */
    public function destroy(Area $areas)
    {
        $areas->delete();

        return response()->json([
            'message' => 'Área eliminada correctamente',
            'data' => $areas
        ], 200);
    }
}
