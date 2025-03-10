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
                    <img src="/img/weather.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="/api-weather" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div style="padding: 0" class="card-header">
                    <img src="/img/photoshop.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div style="padding: 0" class="card-header">
                    <img src="/img/weather.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Informações -->
    <section class="row mt-5 mb-4">
        <div class="col">
            <div class="card-header rounded p-4 bg-dark text-white">
                <h3>Informações do Projeto</h3>
                <p>Descrição do projeto ou informações relevantes.</p>
            </div>
        </div>
    </section>
@endsection