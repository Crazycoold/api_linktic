@extends('layouts.app')
@section('page-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('content')
<div id="app_form" class="container">
    <input id="client_id" value="{{ \Auth::user()->id }}" hidden>
    <input id="host" value="{{ request()->getSchemeAndHttpHost() }}" hidden>
    <div class="row">
        <div class="col s12">
            <div class="card grey lighten-1">
                <div class="card-header"><em><b>Crear nuevo cliente</b></em></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <label class="black-text" for="name"><b><em>Nombre</em></b></label>
                            <input id="name" type="text" v-model="client.name" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="center-align" id="save">
                        <a class="grey darken-1 btn" v-on:click="save">Crear</a>
                    </div>
                    <div class="center-align" id="update">
                        <a class="grey darken-1 btn" v-on:click="update">Actualizar</a>
                    </div>
                </div>
            </div>
            <div class="card grey lighten-1">
                <div class="card-header"><em><b>Clientes usuario autenticado</b></em></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div>
                        <div class="row" v-if="clients == ''">
                            <div class="col s12 m12 l12">
                                <div class="card-alert card orange lighten-5">
                                    <div class="card-content orange-text">
                                        <p><em><b>No se encontraron registros en la base de datos.</b></em></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="striped highlight centered responsive-table" v-if="clients != ''">
                            <thead>
                                <tr>
                                    <th class="red-text"><em>client_id</em></th>
                                    <th class="red-text"><em>name</em></th>
                                    <th class="red-text"><em>client_secret</em></th>
                                    <th class="red-text"><em>update</em></th>
                                    <th class="red-text"><em>delete</em></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(data,index) in clients">
                                    <td>@{{ data.id }}</td>
                                    <td>@{{ data.name }}</td>
                                    <td>@{{ data.secret }}</td>
                                    <td><a style="cursor:pointer;" v-on:click="preload(data)"><i class="material-icons blue-text">update</i></a></td>
                                    <td><a style="cursor:pointer;" v-on:click="delete_forever(data)"><i class="material-icons red-text">delete_forever</i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="{{ asset('js/home.js') }}"></script>
@endsection