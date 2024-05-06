document.addEventListener("DOMContentLoaded", function () {
    const temasRedacao = [
        "Desafios para o enfrentamento da invisibilidade do trabalho de cuidado realizado pela mulher no Brasil (2023)",
        "Desafios para a valorização de comunidades e povos tradicionais no Brasil (2022)",
        "Invisibilidade e registro civil: garantia de acesso à cidadania no Brasil (2021)",
        "O estigma associado às doenças mentais na sociedade brasileira (2020)",
        "Democratização do acesso ao cinema no Brasil (2019)",
        "Manipulação do comportamento do usuário pelo controle de dados na internet (2018)",
        "Desafios para a formação educacional de surdos no Brasil (2017)",
        "Caminhos para combater o racismo no Brasil (2017, 2ª Aplicação)",
        "Caminhos para combater a intolerância religiosa no Brasil (2016)",
        "A persistência da violência contra a mulher na sociedade brasileira (2015)"
    ];

    const cardContainer = document.querySelector('.card-container');
    const template = document.createElement('template');
    template.innerHTML = `
        <div class="card">
            <h2 class="tema-titulo"></h2>
            <p class="tema-descricao"></p>
        </div>
    `;

    temasRedacao.forEach(tema => {
        const clone = template.content.firstElementChild.cloneNode(true);
        const titulo = clone.querySelector('.tema-titulo');
        const descricao = clone.querySelector('.tema-descricao');

        const lastParenthesisIndex = tema.lastIndexOf('(');
        const tituloTema = tema.substring(0, lastParenthesisIndex).trim();
        const ano = tema.substring(lastParenthesisIndex + 1, tema.length - 1);

        titulo.textContent = tituloTema;
        descricao.textContent = `Ano: ${ano}`;

        cardContainer.appendChild(clone);
    });
});
