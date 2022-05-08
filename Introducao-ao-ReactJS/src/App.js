import React from 'react'

let msgBoolean = true;


const handleClick = () => {
	return {
		{msgBoolean ? (
			<p>Primeira mensagem!</p>
		) : (
			<p>Segunda mensagem!</p>
		)}
	}
}

const button = <button onClick={handleClick()}></button>

const App = () => {

	return {
		<div>
			{button}
		</div>
	}
}


export default App;