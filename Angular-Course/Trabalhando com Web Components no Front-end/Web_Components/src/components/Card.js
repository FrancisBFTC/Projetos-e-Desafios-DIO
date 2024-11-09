class Card extends HTMLElement{
    constructor(){
        super();

        const shadow = this.attachShadow({mode : "closed"});
        shadow.innerHTML = "<h1>Hello World</h1>";
    }
}

customElements.define("my-tag", Card);