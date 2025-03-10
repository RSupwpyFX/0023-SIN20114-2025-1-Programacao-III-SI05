@extends('LAYOUT.main')

@section('title', 'UNIFEBE | Edição de Imagem')

@section('style')
    <style>
        body {
            background: linear-gradient(to right, #74ebd5, #acb6e5);
        }

        .background {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .image-container {
            max-width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 250px;
            margin: 0 auto;
            overflow: hidden;
            border: 2px solid #ccc;
            border-radius: 8px;
            background-color: #f7f7f7;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        .btn {
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.5rem;
        }

        .card-body {
            padding: 20px;
        }

        .form-range {
            margin-bottom: 15px;
        }

        .image-title {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(255, 255, 255, 0.7);
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 1.2rem;
        }

        .text-center {
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <div class="container py-5">
        <div class="background">
            <div class="row">
                <!-- Coluna de Imagem Original -->
                <div class="col-4">
                    <div class="text-center position-relative">
                        <h3 class="image-title">Imagem Original</h3>
                        <div class="image-container">
                            <img src="img/img.jpg" id="imageOriginal" alt="Imagem Original"/>
                        </div>
                    </div>
                </div>
    
                <!-- Coluna de Controles de Edição -->
                <div class="col-4">
                    <div class="card">
                        <div class="card-header text-center">
                            Filtros de Imagem
                        </div>
                        <div class="card-body">
                            <div>
                                <button type="button" class="btn btn-primary" id="btnInkFilter" onclick="aplicarFiltroInk()">Ink Filter</button>
                                <button type="button" class="btn btn-primary" id="btnNoise" onclick="aplicarFiltroNoise()">Noise</button>
                                <button type="button" class="btn btn-primary" id="btnSepia" onclick="aplicarFiltroSepia()">Sepia</button>
                                <button type="button" class="btn btn-secondary" onclick="resetarImagem()">Resetar Imagem</button>
                            </div>
    
                            <hr/>
    
                            <label for="brilho" class="form-label">Brilho</label>
                            <input type="range" value="0" onchange="alterarConstrasteBrilho()" min="-1" max="1" step="0.1" class="form-range" name="brilho" id="brilho">
    
                            <label for="contraste" class="form-label">Contraste</label>
                            <input type="range" value="0" onchange="alterarConstrasteBrilho()" min="-1" max="1" step="0.01" class="form-range" name="contraste" id="contraste">
                        </div>
                    </div>
                </div>
    
                <!-- Coluna de Imagem Editada -->
                <div class="col-4">
                    <div class="text-center position-relative">
                        <h3 class="image-title">Imagem Editada</h3>
                        <div class="image-container">
                            <img src="img/img.jpg" id="image" alt="Imagem Editada"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/manipulacaoImagem.js"></script>
@endsection
