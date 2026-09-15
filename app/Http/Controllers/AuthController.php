<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Método para mostrar el formulario de registro
    public function mostrarRegistro(){
        return view('registro');
    }
    public function mostrarLogin(){
        return view('login');
    }
    // Método para procesar el registro
    public function register(Request $request)
    {
        // 1. Validación de los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ],[
            'name.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección válida.',
            'email.unique' => 'Este correo electrónico ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ]);

        // 2. Creación del usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // 3. Autenticación automática e inicio de sesión
        Auth::login($user);

        // 4. Redirección directa al listado principal de ambientes
        return redirect()->route('environment.index')->with('success', 'Cuenta creada exitosamente.');
    }

    // Método para procesar el inicio de sesión
    public function login(Request $request)
    {
        // 1. Validación de credenciales de entrada
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // 2. Intentar autenticar
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            // Redirige a la ruta que intentaba visitar o a environment.index por defecto
            return redirect()->intended(route('environment.index'));
        }

        // 3. Retorno con error si falla la autenticación
        return back()->withErrors([
            'email' => 'Las credenciales ingresadas no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    // Método para cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}