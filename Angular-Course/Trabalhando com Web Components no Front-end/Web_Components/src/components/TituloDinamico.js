class TituloDinamico extends HTMLElement{
    constructor(){
        super();

        const shadow = this.attachShadow({mode:"open"});

        // base do componente
        const component = document.createElement("h1");
        component.textContent = this.getAttribute("titulo");
        
        // estilo do componente
        const style = document.createElement("style");
        style.textContent = `
            h1{
                color: red;
            }
        `;

        // criação da árvore
        shadow.appendChild(component);
        shadow.appendChild(style);
    }
}

customElements.define("titulo-dinamico", TituloDinamico);