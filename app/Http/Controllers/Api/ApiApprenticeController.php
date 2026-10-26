<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Apprentice;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApiApprenticeController extends Controller
{
    /**
     * Obtener el listado de aprendices paginado.
     * GET /api/v1/apprentice
     */
    public function index()
    {
        $apprentices = Apprentice::with('course')->get();
        return response()->json($apprentices);
    }

    /**
     * Obtener un aprendiz específico por su ID.
     * GET /api/v1/apprentice/{id}
     */
    public function show($id)
    {
        $apprentice = Apprentice::with(['course'])->find($id);

        if (!$apprentice) {
            return response()->json(['message' => 'Aprendiz no encontrado']);
        }

        return response()->json($apprentice);
    }

    /**
     * Crear un nuevo aprendiz.
     * POST /api/v1/apprentice
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => ['required', 'string', 'max:255'],
            'document'    => ['nullable', 'string', 'max:255'],
            'email'       => ['nullable', 'email', 'max:255', 'unique:apprentices,email'],
            'cell_number' => ['nullable', 'integer', 'min:0', 'max:2147483647'],
            'course_id'   => ['required', 'integer', 'exists:courses,id'],
        ]);

        $apprentice = Apprentice::create($validated);

        return response()->json($apprentice);
    }

    /**
     * Actualizar un aprendiz existente.
     * PUT/PATCH /api/v1/apprentice/{apprentice}
     */
    public function update(Request $request, Apprentice $apprentices)
    {
        $validated = $request->validate([
            'name'        => ['sometimes', 'required', 'string', 'max:255'],
            'document'    => ['sometimes', 'nullable', 'string', 'max:255'],
            'email'       => ['sometimes', 'nullable', 'email', 'max:255', Rule::unique('apprentices', 'email')->ignore($apprentices->id)],
            'cell_number' => ['sometimes', 'nullable', 'integer', 'min:0', 'max:2147483647'],
            'course_id'   => ['sometimes', 'required', 'integer', 'exists:courses,id'],
        ]);

        $apprentices->update($validated);

        return response()->json($apprentices);
    }

    /**
     * Eliminar un aprendiz.
     * DELETE /api/v1/apprentice/{apprentice}
     */
    public function destroy(Apprentice $apprentices)
    {
        $apprentices->delete();

        return response()->json([
            'message' => 'Aprendiz eliminado correctamente',
            'data'    => $apprentices
        ], 200);
    }
}