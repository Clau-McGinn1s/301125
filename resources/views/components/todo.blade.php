@props(['todo'])
   
   <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold text-gray-800">Tarea: {{$todo->name}}</h2>
        <p class="text-gray-600 mt-2">{{$todo->desc}}</p>
        <p class="text-gray-500 mt-2">Fecha de término: {{$todo->due_date}}</p>
        
        <!-- Enlaces -->
        <div class="mt-4 flex space-x-4">
          <a href="/todos/{{$todo->id}}/edit" class="bg-blue-500 text-black px-4 py-2 rounded-md hover:bg-blue-600">
            Editar
          </a>
          <form method="POST" action="/todos/{{$todo->id}}"  >
            @csrf
            @method('DELETE')
            <button class='bg-gray-500 text-black px-4 py-2 rounded-md hover:bg-blue-600' type='submit'>Completar</button>
          </form>
        </div>
    </div>