@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card border-primary">

                <div class="card-header">
                    <div class="h3 text-center text-capitalize">Credencial digital</div>
                </div>

                <div class="card-body">

                    <form>
                        <div class="form-row">
                            <div class="form-group col-5"
                                 style="margin-top: 1%;">
                                <img class="" src="{{ $person->photo }}"
                                     style="height: 85%;
                                    width: 97%;
                                    border-radius: 15%;">
                            </div>

                            <div class="form-group col-7">
                                <label for="" class="lead">Nombre:</label>
                                <div type="email" class="form-control lead text-center">
                                    {{ $user->name }}
                                </div>
                            </div>

                        </div>

                        <div class="form-row" style="margin-top: -130px;">

                            <div class="form-group col-4 offset-5">
                                <label for="" class="lead">Matricula:</label>
                                <div class="form-control lead text-center">
                                    {{ $user->record }}
                                </div>
                            </div>

                            <div class="form-group col-3">
                                <label for="" class="lead">Promedio:</label>
                                <div class="form-control lead text-center">
                                    9.5
                                </div>
                            </div>

                        </div>

                        {{--<div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>--}}

                        <div class="form-row">

                            <div class="form-group col-5">
                                <label for="" class="lead">Horario:</label>
                                <div type="email" class="form-control lead text-center">
                                    Lun - Vie | 2 pm - 8 pm
                                </div>
                            </div>

                            <div class="form-group col-2">
                                <label for="" class="lead">Grupo:</label>
                                <div type="email" class="form-control lead text-center">
                                    {{ 4851 }}
                                </div>
                            </div>

                            <div class="form-group col-2">
                                <label for="" class="lead">Grado:</label>
                                <div type="email" class="form-control lead text-center">
                                    8°
                                </div>
                            </div>

                            <div class="form-group col-3">
                                <label for="" class="lead">Carrera:</label>
                                <div type="email" class="form-control lead text-center">
                                    ISC
                                </div>
                            </div>

                            <div class="form-group col-5">
                                <label for="" class="lead">Tutor:</label>
                                <div class="form-control lead text-center">
                                    Virginia Aguilar Guerrero
                                </div>
                            </div>

                            <div class="form-group col-7">
                                <label for="" class="lead">Email:</label>
                                <div class="form-control lead text-center">
                                    {{ $user->email }}
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <p>Tecnologico de estudios superiores de chalco.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
