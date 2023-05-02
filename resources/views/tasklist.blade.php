@extends('theme.base')

@section('content')

    <div class="container py-5 text-center">
        <h1 class="mb-5">Bienvenido a la lista de tareas</h1>
        <a href="{{ route('task.index') }}" class="btn btn-primary">Mostrar Lista de Tareas</a>
    </div>

@endsection