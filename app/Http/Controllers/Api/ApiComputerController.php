<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\computer as Computer;
use Illuminate\Http\Request;

class ApiComputerController extends Controller
{
    /**
     * Obtener el listado de computadores.
     * GET /v1/computer
     */
    public function index()
    {
        $computers = Computer::with('environment')->get();
        return response()->json($computers, 200);
    }

    /**
     * Obtener un computador específico por su ID.
     * GET /v1/computer/{computer}
     */
    public function show($id)
    {
        $computer = Computer::with('environment')->find($id);

        if (!$computer) {
            return response()->json(['message' => 'Computador no encontrado'], 404);
        }

        return response()->json($computer, 200);
    }

    /**
     * Crear un nuevo computador.
     * POST /v1/computer
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'number'         => ['required', 'integer', 'max:255'],
            'brand'          => ['required', 'string', 'max:255'],
            'environment_id' => ['required', 'integer', 'exists:environments,id'],
        ]);

        $computer = Computer::create($validated);

        return response()->json($computer, 201);
    }

    /**
     * Actualizar un computador existente.
     * PUT/PATCH /v1/computer/{computer}
     */
    public function update(Request $request, Computer $computers)
    {
        $validated = $request->validate([
            'number'         => ['sometimes', 'required', 'integer', 'min:1'],
            'brand'          => ['sometimes', 'required', 'string', 'max:255'],
            'environment_id' => ['sometimes', 'required', 'integer', 'exists:environments,id'],
        ]);

        $computers->update($validated);

        return response()->json($computers, 200);
    }

    /**
     * Eliminar un computador.
     * DELETE /v1/computer/{computer}
     */
    public function destroy(Computer $computers)
    {
        $computers->delete();

        return response()->json([
            'message' => 'Computador eliminado correctamente',
            'data'    => $computers
        ], 200);
    }
}