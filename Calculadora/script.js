// Função para limitar o número de dígitos nos campos de entrada
function limitarDigitos() {
    document.querySelectorAll('input[type="number"]').forEach(input => {
        input.addEventListener('input', function() {
            if (this.value.length > 5) {
                this.value = this.value.slice(0, 5);
            }
        });
    });
}

// Função para calcular a média das notas
function calcularMedia() {
    var nota1 = parseFloat(document.forms["notaForm"]["Nota1"].value);
    var nota2 = parseFloat(document.forms["notaForm"]["Nota2"].value);
    var nota3 = parseFloat(document.forms["notaForm"]["Nota3"].value);
    var nota4 = parseFloat(document.forms["notaForm"]["Nota4"].value);
    var nota5 = parseFloat(document.forms["notaForm"]["Nota5"].value);

    // Verifica se todas as notas foram preenchidas
    if (isNaN(nota1) || isNaN(nota2) || isNaN(nota3) || isNaN(nota4) || isNaN(nota5)) {
        alert("Por favor, preencha todas as notas antes de calcular.");
        return;
    }

    var media = (nota1 + nota2 + nota3 + nota4 + nota5) / 5;

    var resultadoDiv = document.getElementById("resultado");
    resultadoDiv.innerHTML = "<h2>Sua nota média é: " + media + "</h2>";

    resultadoDiv.style.color = "#007F86";
}

// Adiciona um evento de escuta para limitar o número de dígitos nos campos de entrada quando a página é carregada
window.addEventListener('DOMContentLoaded', function() {
    limitarDigitos();

    // Adiciona um evento de escuta para o clique do botão de calcular
    document.getElementById("calcularButton").addEventListener("click", function () {
        calcularMedia();
    });
});

