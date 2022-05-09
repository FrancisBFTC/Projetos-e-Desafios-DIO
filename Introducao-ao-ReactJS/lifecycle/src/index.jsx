import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import "./styles.css"

class App extends Component{
	
	// Inicialização, time = 1000
	constructor (props){
		super(props)
		this.state = {
			time: 1000,
			botao: 'cadastrar'
		}
	}

	// Montagem, time = 1000
	componentDidMount(){
		window.setTimeout(() => {
			this.setState({
				time: 2000
			})
		}, this.state.time)
	}

	// Atualização, time = 2000
	// Botao pressionou, time = 3000
	componentDidUpdate(){
		window.setTimeout(() => {
			this.setState({
				time: 4000,
				botao: 'logado'
			})
		}, this.state.time)
	}

	changeButton = () => {
		this.setState({
			time: 3000,
			botao: 'entrando...'
		})
	}

	// Renderização
	render(){
		const { time, botao } = this.state
		return(
			<div>
				<h1>{time}</h1>
				<button onClick={() => this.changeButton()}>{botao}</button>
			</div>
		)
	}
}


const rootElement = document.getElementById("root");
ReactDOM.render(<App />, rootElement);