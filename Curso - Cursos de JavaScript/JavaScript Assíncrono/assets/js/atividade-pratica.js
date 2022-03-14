
// Link da API JSON
const BASE_URL = 'https://thatcopy.pw/catapi/rest/';
const catBtn = document.getElementById('change-cat');
const catImg = document.getElementById('cat');

/*
Arrow Function Assíncrona que recebe
dados Strings de BASE_URL e recebe em json
os dados formatados da String em JSON.
*/
const getCats = async () => {
	try {
		const data = await fetch(BASE_URL);
		const json = await data.json();

		// Retorna o valor JSON da propriedade "webpurl"
		// que será uma URL
		return json.webpurl;
	}
	catch(e){
		console.log(e.message);
	}
};

// Outra forma de fazer a mesma coisa
const getCats2 = async () => {
	const data = await fetch(BASE_URL)
			.then(res => res.json())
			.catch(e => console.log(e));

		return data.webpurl;
};

const loadImg = async () => {
	// Retorna a URL no atributo SRC da tag IMG
	catImg.src = await getCats2();
}

// Evento do botão para executar a função loadImg()
catBtn.addEventListener('click', loadImg);

// Já executa a função loadImg() para já carregar
// uma imagem da URL
loadImg();

