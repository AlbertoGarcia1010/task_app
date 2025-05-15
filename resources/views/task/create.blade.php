@extends('layouts.app')

@section('content')
  <div align="center" class="mb-4">
    <a href="/task" class="inline-block bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded shadow">
      Regresar
    </a>

      <h2>Nueva Tarea</h2>
      <form action="/task/save" method="POST">
        @csrf
        <label for="title" class="text-slate-700 text-sm font-semibold">Título</label>
        <div class="w-full max-w-sm min-w-[200px]">
          <input class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Titulo de la tarea" type="text" name="name" id="name" required>
        </div>
        <br>
        <label for="title" class="text-slate-700 text-sm font-semibold">Descripción</label>

        <div class="w-full max-w-sm min-w-[200px]">
          <textarea class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Descripción de la tarea" name="description" id="description" required></textarea>
        </div>
        <br>
        <label for="title" class="text-slate-700 text-sm font-semibold">Prioridad</label>

        <div class="w-full max-w-sm min-w-[200px]">      
            <div class="relative">
                <select
                    name="priority"
                    id="priority"
                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer" required>
                    <option value="0">Baja</option>
                    <option value="1">Media</option>
                    <option value="2">Alta</option>
                </select>
            </div>
        </div>
        <br>
        <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Crear Tarea</button>
      </form>
  </div>
@endsection

