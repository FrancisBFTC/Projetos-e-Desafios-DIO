//import React, {Fragment} from 'react'
import React from 'react'
import ReactDOM from 'react-dom'

const element1 = "Digital Innovation One";
const element2 = <h1>Hello World</h1>;
const element3 = <button type="submit">BOTAO TESTE</button>

/*
const App = () => {
	return (
		<Fragment>
			{element1}
			{element2}
			{element3}
		</Fragment>
	)
}
*/

const App = () => {
	return (
		<div>
			{element1}
			{element2}
			{element3}
		</div>
	)
}

const rootElement = document.getElementById("root");
ReactDOM.render(<App />, rootElement);