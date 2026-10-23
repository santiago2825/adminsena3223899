<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\course as Course;
use Illuminate\Http\Request;

class ApiCourseController extends Controller
{
    /**
     * Obtener el listado de cursos.
     * GET /v1/course
     */
    public function index()
    {
        $courses = Course::with(['program', 'environment'])->get();
        return response()->json($courses);
    }

    /**
     * Obtener un curso específico por su ID.
     * GET /v1/course/{course}
     */
    public function show($id)
    {
        $course = Course::with(['program', 'environment'])->find($id);

        if (!$course) {
            return response()->json(['message' => 'Curso no encontrado']);
        }

        return response()->json($course);
    }

    /**
     * Crear un nuevo curso.
     * POST /v1/course
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_number'  => ['required', 'integer', 'min:1'],
            'day'            => ['required', 'date'],
            'program_id'     => ['required', 'integer', 'exists:programs,id'],
            'environment_id' => ['required', 'integer', 'exists:environments,id'],
        ]);

        $course = Course::create($validated);

        return response()->json($course);
    }

    /**
     * Actualizar un curso existente.
     * PUT/PATCH /v1/course/{course}
     */
    public function update(Request $request, Course $courses)
    {
        $validated = $request->validate([
            'course_number'  => ['sometimes', 'required', 'integer', 'min:1'],
            'day'            => ['sometimes', 'required', 'date'],
            'program_id'     => ['sometimes', 'required', 'integer', 'exists:programs,id'],
            'environment_id' => ['sometimes', 'required', 'integer', 'exists:environments,id'],
        ]);

        $courses->update($validated);

        return response()->json($courses);
    }

    /**
     * Eliminar un curso.
     * DELETE /v1/course/{course}
     */
    public function destroy(Course $courses)
    {
        $courses->delete();

        return response()->json([
            'message' => 'Curso eliminado correctamente',
            'data'    => $courses
        ]);
    }
}