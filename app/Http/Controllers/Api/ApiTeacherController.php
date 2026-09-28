<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ApiTeacherController extends Controller
{
    /**
     * Obtener el listado de instructores paginado.
     * GET /api/v1/teacher
     */
    public function index()
    {
        $teachers = Teacher::all();
        return response()->json($teachers, 200);
    }

    /**
     * Obtener un instructor específico por su ID.
     * GET /api/v1/teacher/{id}
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);

        if (!$teacher) {
            return response()->json(['message' => 'Instructor no encontrado'], 404);
        }

        return response()->json($teacher, 200);
    }

    /**
     * Crear un nuevo instructor.
     * POST /api/v1/teacher
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:teachers,email',
            'document' => 'required|string|max:20|unique:teachers,document',
        ]);

        $teachers = Teacher::create($request->all());

        return response()->json($teachers, 201);
    }

    /**
     * Actualizar un instructor existente.
     * PUT/PATCH /api/v1/teacher/{teacher}
     */
    public function update(Request $request, Teacher $teachers)
    {
        $request->validate([
            'name'     => 'sometimes|required|string|max:255',
            'email'    => 'sometimes|required|email|unique:teachers,email,' . $teachers->id,
            'document' => 'sometimes|required|string|max:20|unique:teachers,document,' . $teachers->id,
        ]);

        $teachers->update($request->all());

        return response()->json($teachers, 200);
    }

    /**
     * Eliminar un instructor.
     * DELETE /api/v1/teacher/{teacher}
     */
    public function destroy(Teacher $teachers)
    {
        $teachers->delete();

        return response()->json([
            'message' => 'Instructor eliminado correctamente',
            'data'    => $teachers
        ], 200);
    }
}