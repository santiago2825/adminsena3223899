<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiProgramController extends Controller
{
    /**
     * Obtener el listado de programas.
     * GET /v1/program
     */
    public function index()
    {
        $programs = Program::with(['training_center', 'offer'])->get();
        return response()->json($programs, 200);
    }

    /**
     * Obtener un programa específico por su ID.
     * GET /v1/program/{program}
     */
    public function show($id)
    {
        $program = Program::with(['training_center', 'offer'])->find($id);

        if (!$program) {
            return response()->json(['message' => 'Programa no encontrado'], 404);
        }

        return response()->json($program, 200);
    }

    /**
     * Crear un nuevo programa.
     * POST /v1/program
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'               => ['required', 'string', 'max:255'],
            'level'              => ['required', 'string', 'max:255'],
            'mode'               => ['required', 'string', 'max:255'],
            'start_date'         => ['required', 'date'],
            'end_date'           => ['required', 'date', 'after_or_equal:start_date'],
            'training_center_id' => ['required', 'integer', 'exists:training_centers,id'],
            'offer_id'           => ['required', 'integer', 'exists:offers,id'],
        ]);

        $program = Program::create($validated);

        return response()->json($program, 201);
    }

    /**
     * Actualizar un programa existente.
     * PUT/PATCH /v1/program/{program}
     */
    public function update(Request $request, Program $programs)
    {
        $validated = $request->validate([
            'name'               => ['sometimes', 'required', 'string', 'max:255'],
            'level'              => ['sometimes', 'required', 'string', 'max:255'],
            'mode'               => ['sometimes', 'required', 'string', 'max:255'],
            'start_date'         => ['sometimes', 'required', 'date'],
            'end_date'           => ['sometimes', 'required', 'date'],
            'training_center_id' => ['sometimes', 'required', 'integer', 'exists:training_centers,id'],
            'offer_id'           => ['sometimes', 'required', 'integer', 'exists:offers,id'],
        ]);

        if (isset($validated['start_date']) || isset($validated['end_date'])) {
            Validator::make([
                'start_date' => $validated['start_date'] ?? $programs->start_date,
                'end_date'   => $validated['end_date'] ?? $programs->end_date,
            ], [
                'end_date' => ['after_or_equal:start_date'],
            ])->validate();
        }

        $programs->update($validated);

        return response()->json($programs, 200);
    }

    /**
     * Eliminar un programa.
     * DELETE /v1/program/{program}
     */
    public function destroy(Program $programs)
    {
        $programs->delete();

        return response()->json([
            'message' => 'Programa eliminado correctamente',
            'data'    => $programs
        ], 200);
    }
}