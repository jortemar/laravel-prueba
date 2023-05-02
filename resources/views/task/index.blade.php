@extends('theme.base')

@section('content')

    <div class="container py-5 text-center">
        <h1 class="mb-3">Lista de Tareas</h1>
        <a href="{{ route('task.create') }}" class="btn btn-primary">Crear tarea</a>
        <a href="#" class="btn btn-primary">Eliminar tarea</a>
        {{-- <a href="{{ route('task.destroy', $task) }}" class="btn btn-primary">Eliminar tarea</a> --}}


        <div class="d-flex justify-content-around">
            <div class="card mb-3 mt-5" style="max-width: 18rem; min-width: 12rem;">
                <div class="card-header text-bg-warning">Tareas pendientes</div>
                <div class="card-body">
                    <ul>
                        <li>uno</li>
                        <li>dos</li>
                        <li>tres</li>
                    </ul>
                </div>
            </div>
    
            <div class="card mb-3 mt-5" style="max-width: 18rem; min-width: 12rem;">
                <div class="card-header text-bg-warning">Tareas completadas</div>
                <div class="card-body">
                    <ul>
                        <li>uno</li>
                        <li>dos</li>
                        <li>tres</li>
                    </ul>          
                </div>
            </div>
        </div>


        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Completada</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <tr>
                    <td>FelinoHost</td>
                    <td>0.0</td>
                    <td>Editar - Eliminar</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection