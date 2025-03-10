class ManipulacaoImg {

    constructor() {
        this.canvas = fx.canvas();
        this.imageOriginal = null;
        this.image = null;
    }

    carregarImagem() {
        this.imageOriginal = document.getElementById('imageOriginal');
        this.image = document.getElementById('image');
    }

    converterEmTextura() {
        this.texture = this.canvas.texture(this.imageOriginal);
    }

    destroy() {
        this.texture.destroy();
    }

    inkFilter() {
        this.canvas.draw(this.texture).ink(0.25).update();
    }

    noise() {
        this.canvas.draw(this.texture).noise(1).update();
    }

    sepia() {
        this.canvas.draw(this.texture).sepia(1).update();
    }

    brilhoContraste(brilho, contraste) {
        this.canvas.draw(this.texture).brightnessContrast(brilho, contraste).update();
    }

    atualizarCanvas() {
        this.image.parentNode.insertBefore(this.canvas, this.image);
        this.image.parentNode.removeChild(this.image);
    }

    toDataUrl() {
        this.image.src = this.canvas.toDataURL('image/png');
    }

    resetar() {
        this.image.src = this.imageOriginal.src;
    }
}

// Funções globais para manipular a imagem e os filtros
function alterarConstrasteBrilho() {
    let contraste = document.getElementById('contraste');
    let brilho = document.getElementById('brilho');

    var m = new ManipulacaoImg();
    m.carregarImagem();
    m.converterEmTextura();
    m.brilhoContraste(parseFloat(brilho.value), parseFloat(contraste.value));
    m.toDataUrl();
    m.destroy();
}

function aplicarFiltroInk() {
    var m = new ManipulacaoImg();
    m.carregarImagem();
    m.converterEmTextura();
    m.inkFilter();
    m.toDataUrl();
    m.destroy();
}

function aplicarFiltroNoise() {
    var m = new ManipulacaoImg();
    m.carregarImagem();
    m.converterEmTextura();
    m.noise();
    m.toDataUrl();
    m.destroy();
}

function aplicarFiltroSepia() {
    var m = new ManipulacaoImg();
    m.carregarImagem();
    m.converterEmTextura();
    m.sepia();
    m.toDataUrl();
    m.destroy();
}

function resetarImagem() {
    var m = new ManipulacaoImg();
    m.carregarImagem();
    m.resetar();
}
