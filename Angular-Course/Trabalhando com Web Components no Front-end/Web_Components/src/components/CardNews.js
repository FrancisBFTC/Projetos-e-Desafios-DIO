class CardNews extends HTMLElement{
    constructor(){
        super();

        const shadow = this.attachShadow({mode:"open"});
        shadow.appendChild(this.build());
        shadow.appendChild(this.styles());
    }

    build(){
        const componentRoot = document.createElement("div")
        componentRoot.setAttribute("class", "card");

        // CardLeft e seus filhos
        const cardLeft = document.createElement("div");
        cardLeft.setAttribute("class", "card-left");

        const autor = document.createElement("span");
        autor.textContent = "By " + (this.getAttribute("author") || "Anonymous");

        const linkTitle = document.createElement("a");
        linkTitle.textContent = this.getAttribute("title");
        linkTitle.href = this.getAttribute("link");

        const description = document.createElement("p");
        description.textContent = this.getAttribute("description");

        cardLeft.appendChild(autor);
        cardLeft.appendChild(linkTitle);
        cardLeft.appendChild(description);

        // CardRight e seus filhos
        const cardRight = document.createElement("div");
        cardRight.setAttribute("class", "card-right");

        const newImage = document.createElement("img");
        newImage.src = this.getAttribute("photo") || "assets/default.png";
        newImage.width = 300;
        newImage.height = 200;
        cardRight.appendChild(newImage);

        // Adicionando a tag raiz (pai)
        componentRoot.appendChild(cardLeft);
        componentRoot.appendChild(cardRight);

        return componentRoot;
    }

    styles(){
        const style = document.createElement("style");
        style.textContent = `
            .card {
                width: 80%;
                box-shadow: 9px 9px 27px 0px rgba(0,0,0,0.75);
                -webkit-box-shadow: 9px 9px 27px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 9px 9px 27px 0px rgba(0,0,0,0.75);
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }

            .card-left{
                display: flex;
                flex-direction: column;
                justify-content: center;
                padding-left: 10px;
            }

            .card-left > span{
                font-weight: 400;
            }

            .card-left > a {
                margin-top: 15px;
                font-size: 25px;
                color: black;
                text-decoration: none;
                font-weight: bold;
            }

            .card-left > p {
                color: rgb(70, 70, 70);
            }
        `;
        return style;
    }
}

customElements.define("card-news", CardNews);

