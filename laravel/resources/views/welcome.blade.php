@extends('LAYOUT.main')

@section('title', 'UNIFEBE | Início')

@section('style')
    <style>
        body {
            background: url('/img/galaxy.jpg') no-repeat center;
            background-size: cover;
        }
        .background {
            background: url('/img/background.jpg') no-repeat center;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
    <!-- Cards -->
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div style="padding: 0" class="card-header">
                    <img style="height: 275px" src="/img/weather.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Previsão do Tempo</h5>
                    <p class="card-text">Consulte a previsão do tempo.</p>
                    <a href="/api-weather" class="btn btn-primary">Conferir</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div style="padding: 0" class="card-header">
                    <img style="height: 275px" src="/img/photoshop.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Edição de Imagens</h5>
                    <p class="card-text">Crie e edite imagens.</p>
                    <a href="/photoshop" class="btn btn-primary">Conferir</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div style="padding: 0" class="card-header">
                    <img style="height: 275px" src="/img/CRUD.jpeg" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Gerenciamento de Dados</h5>
                    <p class="card-text">Realize operações CRUD para gerenciar seus registros.</p>
                    <a href="#" class="btn btn-primary">Conferir</a>
                </div>
            </div>
        </div>
    </div>
@endsection