@extends('layouts.app')

@section('content')
    <h1 class="page-header">Listado de productos</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Descripción</th>
            <th>Fecha</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    {{ $user->id }}
                    <a href="{{ route('reports.create')}}">
                        Generar
                    </a>
                    <a href="{{ route('reports.edit', $user->id)}}">
                        Editar
                    </a>
                </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="text-right">{{ $user->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <hr>
    <p>
        <a href="{{ route('reports.pdf') }}" class="btn btn-sm btn-primary">
            Descargar productos en PDF
        </a>
    </p>
@endsection
