import React from 'react'
import ReactDOM from 'react-dom'
import BlackPanel from './BlackPanel'
import Button from './Button'

const App = () => {
	
	const routh = (s3, s2, s1, s0) => (((s3 * s0) - (s2 * s1) / s2) < 0) ? alert("Unstable") : alert("Stable")

	var s0, s1, s2, s3;
	const choose = () => {
		 s0 = Number(prompt("digite 1ª coeficiente: "))
		 s1 = Number(prompt("digite 2ª coeficiente: "))
		 s2 = Number(prompt("digite 3ª coeficiente: "))
		 s3 = Number(prompt("digite 4ª coeficiente: "))
	}

	return (
		<div>
			<BlackPanel sizeX="320px" sizeY="320px">
				<Button onClick={() => {
					choose()
					routh(s3, s2, s1, s0)
				}} name="Routh-Hurwitz" />
			</BlackPanel>
		</div>
	)
}


const rootElement = document.getElementById("root");
ReactDOM.render(<App />, rootElement);