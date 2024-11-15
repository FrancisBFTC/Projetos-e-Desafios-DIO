
// Link da API JSON
//const BASE_URL = 'https://francisbftc.github.io/api.json';
const BASE_URL = 'https://www.duolingo.com/api/1/version_info';
const catBtn = document.getElementById('change-cat');
const catImg = document.getElementById('cat');

/*
Arrow Function Assíncrona que recebe
dados Strings de BASE_URL e recebe em json
os dados formatados da String em JSON.
*/
const getCats = async () => {
	try {
		const data = await fetch(BASE_URL, {   	
											method: 'GET',
											mode: 'no-cors'
									   });
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
	const data = await fetch(BASE_URL, {   	
											method: 'GET',
											mode: 'cors'
									   }
							);
			//.then(res => res.json());
			//.catch(e => console.log(e));
	
		console.log(data);
		//console.log(data.features.msg);
		return data;
};

const loadImg = async () => {
	// Retorna a URL no atributo SRC da tag IMG
	catImg.innerText = await getCats();
}

// Evento do botão para executar a função loadImg()
catBtn.addEventListener('click', loadImg);

// Já executa a função loadImg() para já carregar
// uma imagem da URL
loadImg();

