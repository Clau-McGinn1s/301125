<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Tareas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

  <!-- Contenedor principal -->
  <div class="max-w-4xl mx-auto p-6">

    <!-- Título -->
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Lista de Tareas</h1>

    <!-- Enlace para agregar tarea -->
    <div class="mt-8 text-center">
      <a href="/new" class="bg-green-500 text-black px-6 py-3 rounded-md hover:bg-green-600">
        Agregar Nueva Tarea
      </a>
    </div>

    <!-- Lista de tareas -->
    <div class="space-y-4">
        @forelse($todos as $todo)
            <x-todo :todo="$todo"/>
        @empty
            <h1>SIN TAREAS</h1>
        @endforelse
    </div>

    <!-- Enlace para agregar tarea -->
    <div class="mt-8 text-center">
      <a href="/new" class="bg-green-500 text-black px-6 py-3 rounded-md hover:bg-green-600">
        Agregar Nueva Tarea
      </a>
    </div>

      <!-- Enlaces de paginación -->
        <div class="mt-6">
            {{ $todos->links() }}
        </div>
  </div>

</body>
</html>
