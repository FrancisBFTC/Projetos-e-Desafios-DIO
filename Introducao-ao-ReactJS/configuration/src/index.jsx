import React from 'react'
import ReactDOM from 'react-dom'
import "./styles.css"

const sum = (a, b) => {
	return a + b;
}

const button = <button> Cadastrar </button>

let msgBoolean = false

const primeiroJSX = () => {
	return (
		<div>
			Wenderson - Introdução ao ReactJS:
			<h1>Soma: {sum(10, 8)}</h1>
		</div>
	)
}

const App = () => {

	return (
		<div className="App">
			{primeiroJSX()}
			{button}
		</div>
	)
}


const rootElement = document.getElementById("root");
ReactDOM.render(<App />, rootElement);