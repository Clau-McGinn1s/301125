<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Tarea</title>
      @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

  <!-- Contenedor principal -->
  <div class="max-w-4xl mx-auto p-6">

    <!-- Título -->
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Crear Nueva Tarea</h1>

    <!-- Formulario -->
    <form action='/todos/{{$todo->id}}' method="POST" class="bg-white p-6 rounded-lg shadow-lg space-y-6">
        @csrf
        @method('PUT')
      <!-- Campo de nombre -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
        <input value='{{old('name', $todo->name)}}' type="text" name="name" id="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
      </div>

      <!-- Campo de descripción -->
        <div>
        <label for="desc" class="block text-sm font-medium text-gray-700">Descripción</label>
        <textarea name="desc" id="desc" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>{{old('desc', $todo->desc)}}</textarea>
        </div>


      <!-- Campo de fecha y hora de término (timestamp) -->
      <div>
        <label for="due_date" class="block text-sm font-medium text-gray-700">Fecha de Término</label>
        <input value='{{old('due_date', $todo->due_date)}}' type="datetime-local" name="due_date" id="due_date" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
      </div>

      <!-- Botón de submit -->
      <div class="flex justify-between items-center">
        <button type="submit" class="bg-blue-500 text-black px-6 py-3 rounded-md hover:bg-blue-600">Guardar Tarea</button>
        
        <!-- Enlace para cancelar -->
        <a href="/" class="bg-gray-200 text-black px-4 py-2 rounded-md hover:bg-gray-600">Cancelar</a>
      </div>

    </form>
  </div>

</body>
</html>
