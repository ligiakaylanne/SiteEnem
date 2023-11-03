<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota1 = $_POST["Nota1"];
    $nota2 = $_POST["Nota2"];
    $nota3 = $_POST["Nota3"];
    $nota4 = $_POST["Nota4"];
    $nota5 = $_POST["Nota5"];

    // Realize o cálculo da média aqui
    $media = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;

    echo "<div class='resultado'>";
    echo "<h2>Sua nota média é: " . $media . "</h2>";
    echo "</div>";
}
?>
