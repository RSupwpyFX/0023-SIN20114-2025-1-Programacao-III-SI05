class OpenWeather {
    constructor() {
        this.key = 'a52a45c0e6a2559ae81ecf74a2bdcfee';
        this.language = 'pt_br';
        this.latitude = null;
        this.longitude = null;
    }

    // Método para obter o clima baseado na cidade ou na geolocalização
    async getWeather() {
        let key = this.key;
        let language = this.language;
        let location = this.latitude && this.longitude
            ? `lat=${this.latitude}&lon=${this.longitude}`
            : 'q=Florianópolis'; // Cidade padrão

        let weather = `https://api.openweathermap.org/data/2.5/weather?${location}&appid=${key}&units=metric&lang=${language}`;

        let weather_response = await fetch(weather);
        let weather_json = await weather_response.json();

        console.log('weather_json', weather_json);
        return weather_json;
    }

    async htmlOpenWeather(weather_json) {
        let cidade = document.getElementById('cidade');
        cidade.innerHTML = weather_json.name;

        let descricao = document.getElementById('descricao');
        descricao.innerHTML = weather_json.weather[0].description;

        let temperatura = document.getElementById('temperatura');
        temperatura.innerHTML = Math.round(weather_json.main.temp) + '°C';

        let img = document.getElementById('img');
        let icon = weather_json.weather[0].icon;
        img.src = `/img/${icon}.png`;

        // Detalhes
        document.querySelector('#detalhes').innerHTML = `
            <li class="detail-item">
                <ion-icon name="sunny-outline" class="details-icon"></ion-icon>
                <span>Temperatura Máxima: </span> ${Math.round(weather_json.main.temp_max)}°C
            </li>
            <li class="detail-item">
                <ion-icon name="snow-outline" class="details-icon"></ion-icon>
                <span>Temperatura Mínima: </span> ${Math.round(weather_json.main.temp_min)}°C
            </li>
            <li class="detail-item">
                <ion-icon name="rainy-outline" class="details-icon"></ion-icon>
                <span>Umidade: </span> ${weather_json.main.humidity}%
            </li>
            <li class="detail-item">
                <ion-icon name="leaf-outline" class="details-icon"></ion-icon>
                <span>Vento: </span> ${Math.round(weather_json.wind.speed)} km/h
            </li>
        `;
    }

    // Método para tratar geolocalização
    setGeolocation(posicao) {
        this.latitude = posicao.coords.latitude;
        this.longitude = posicao.coords.longitude;
    }
}

// Função que busca a geolocalização do usuário
function getGeolocalizacao() {
    navigator.geolocation.getCurrentPosition(
        (posicao) => {
            let app = new OpenWeather();
            app.setGeolocation(posicao);
            app.getWeather().then(weather_json => app.htmlOpenWeather(weather_json));
        },
        () => {
            console.log("Erro ao obter geolocalização");
            let app = new OpenWeather();
            app.getWeather().then(weather_json => app.htmlOpenWeather(weather_json));
        }
    );
}

// Chama a função de geolocalização ao carregar a página
window.onload = () => {
    getGeolocalizacao();
};