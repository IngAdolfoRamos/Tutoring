@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if($role->id == 1)
                    Admin
                @elseif($role->id == 4)
                    Estudiante
                @endif
                {{ $results }}
                    {{--@foreach($result as $r)--}}
                        {{--{{ $r }}--}}
                    {{--@endforeach--}}

                    @foreach ($results as $re)
                        {{--$re->role_id--}}
                        @if($re->role_id == 4)
                            <h1> {{ $re->name }} </h1>
                        @endif
                    @endforeach
                <div class="card-header">Busqueda de alumnos</div>

                <div class="card-body">
                    <table class="table table-hover" id="users">
                        <thead>
                            <tr>
                                <th>Matricula</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Reporte</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->record  }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">
                                    <a href="{{route('reports.edit', $user->id)}}">
                                        <i class="far fa-file-pdf fa-lg"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
