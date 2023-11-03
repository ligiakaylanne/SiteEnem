document.getElementById("calcularButton").addEventListener("click", function () {
    var nota1 = parseFloat(document.forms["notaForm"]["Nota1"].value);
    var nota2 = parseFloat(document.forms["notaForm"]["Nota2"].value);
    var nota3 = parseFloat(document.forms["notaForm"]["Nota3"].value);
    var nota4 = parseFloat(document.forms["notaForm"]["Nota4"].value);
    var nota5 = parseFloat(document.forms["notaForm"]["Nota5"].value);

    var media = (nota1 + nota2 + nota3 + nota4 + nota5) / 5;

    var resultadoDiv = document.getElementById("resultado");
    resultadoDiv.innerHTML = "<h2>Sua nota média é: " + media + "</h2>";

    resultadoDiv.style.color = "#007F86";
});
