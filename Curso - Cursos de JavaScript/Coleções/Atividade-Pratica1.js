// Atividade do map

function getAdmins(map){
	let admins = [];
	for([key, value] of map){
		if(value === 'Admin'){
			admins.push(key);
		}
	}
	return admins;
}

const usuarios = new Map();

usuarios.set('Jonas', 'Admin');
usuarios.set('Wender', 'Admin');
usuarios.set('Gabriel', 'User');
usuarios.set('Johanne', 'Admin')

console.log(getAdmins(usuarios));