<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo:: latest()
        ->paginate(5);

        return view('home', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validar los datos de la tarea
        $valid = $request->validate([
            'name' => 'required|string|max:255',    // El nombre debe ser requerido, una cadena de texto y no más de 255 caracteres
            'desc' => 'required|string|max:1000',   // La descripción debe ser requerida, una cadena y no más de 1000 caracteres
            'due_date' => 'required|date',          // La fecha debe ser requerida y debe ser una fecha válida
        ]);

        // Crear el nuevo Todo en la base de datos
        $todo = Todo::create($valid);

        // Redirigir al usuario con un mensaje de éxito
        return redirect('/')->with('success', 'Tarea creada con éxito');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
          // Validar los datos de la tarea
        $valid = $request->validate([
            'name' => 'required|string|max:255',    // El nombre debe ser requerido, una cadena de texto y no más de 255 caracteres
            'desc' => 'required|string|max:1000',   // La descripción debe ser requerida, una cadena y no más de 1000 caracteres
            'due_date' => 'required|date',          // La fecha debe ser requerida y debe ser una fecha válida
        ]);

        // Crear el nuevo Todo en la base de datos
        $todo->update($valid);
        // Redirigir al usuario con un mensaje de éxito
        return redirect('/')->with('success', 'Tarea Editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/')->with('success', 'Tarea destruida con éxito');

    }

    public function new(){
        return view('todos.new');
    }
}
