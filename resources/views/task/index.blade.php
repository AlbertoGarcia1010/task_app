@extends('layouts.app')

@section('title', 'Lista de Tareas')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Lista de Tareas</h1>



    {{-- Botón para crear nueva tarea --}}
    <div class="mb-6">
        <a href="task/create" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow">
            + Nueva Tarea
        </a>
    </div>

    {{-- Lista de tareas --}}
    @if($tasks->isEmpty())
        <p class="text-gray-600">No hay tareas registradas.</p>
    @else
        <div class="overflow-x-auto bg-white shadow rounded">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 border-b">#</th>
                        <th class="p-3 border-b">Título</th>
                        <th class="p-3 border-b">Descripción</th>
                        <th class="p-3 border-b">Prioridad</th>
                        <th class="p-3 border-b text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $tarea)
                        
                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border-b">{{ $tarea->id }}</td>
                            <td class="p-3 border-b">{{ $tarea->name }}</td>
                            <td class="p-3 border-b">{{ $tarea->description }}</td>
                            
                            <td class="p-3 border-b">
                                @if($tarea->priority === 2)
                                    <span class="px-2 py-1 text-sm rounded bg-red-100 text-red-700">Alta</span>
                                @elseif($tarea->priority === 1)
                                    <span class="px-2 py-1 text-sm rounded bg-yellow-100 text-yellow-700">Media</span>
                                @else
                                    <span class="px-2 py-1 text-sm rounded bg-green-100 text-green-700">Baja</span>
                                @endif
                            </td>
                            <td class="p-3 border-b text-center space-x-2">
                                <a href="{{ route('task.edit', $tarea) }}" class="text-blue-600 hover:underline">Editar</a>

                                <form action="{{ route('task.destroy', $tarea) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" onclick="return confirm('¿Eliminar la tarea #{{ $tarea->id }}?')" class="text-red-600 hover:underline">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Paginación --}}
        <div class="mt-4">
            {{ $tasks->links() }}
        </div>
    @endif
</div>
@endsection
