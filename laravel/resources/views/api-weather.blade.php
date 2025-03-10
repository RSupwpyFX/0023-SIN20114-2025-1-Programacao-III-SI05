@extends('LAYOUT.main')

@section('title', 'UNIFEBE | Previsão do Tempo')

@section('style')
    <style>
        body {
            background: linear-gradient(to right, #74ebd5, #acb6e5);
        }

        .weather-card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.5rem;
        }

        .weather-image {
            width: 150px;
            height: 150px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .details-icon {
            font-size: 1.2rem;
            margin-right: 10px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .detail-item span {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .details-icon {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        ion-icon[name="sunny-outline"] {
            color: #FDB813;
        }

        ion-icon[name="snow-outline"] {
            color: #A9C9D8;
        }

        ion-icon[name="rainy-outline"] {
            color: #3498db;
        }

        ion-icon[name="leaf-outline"] {
            color: #28a745;
        }
    </style>
@endsection

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div style="border: 0;" class="card weather-card">
                    <div style="border: 0;" class="card-header text-center">
                        Previsão do Tempo
                    </div>
                    <div class="card-body">
                        <img src="" id="img" alt="Imagem do Tempo" class="weather-image d-block mx-auto">

                        <h5 class="card-title text-center">Cidade: <span id="cidade"></span></h5>
                        <p class="text-center">Temperatura: <span id="temperatura"></span></p>
                        <p class="text-center">Descrição: <span id="descricao"></span></p>
                        <hr>
                        <h6 class="text-center">Detalhes</h6>
                        <ul id="detalhes" class="list-unstyled">
                            <li class="detail-item">
                                <ion-icon name="sunny-outline"></ion-icon>
                                <span>Temperatura Máxima:</span> <span id="temp_max">25°C</span>
                            </li>
                            <li class="detail-item">
                                <ion-icon name="snow-outline"></ion-icon>
                                <span>Temperatura Mínima:</span> <span id="temp_min">18°C</span>
                            </li>
                            <li class="detail-item">
                                <ion-icon name="rainy-outline"></ion-icon>
                                <span>Umidade:</span> <span id="umidade">65%</span>
                            </li>
                            <li class="detail-item">
                                <ion-icon name="leaf-outline"></ion-icon>
                                <span>Vento:</span> <span id="vento">14 km/h</span>
                            </li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Ver mais detalhes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/js.js"></script>
@endsection
