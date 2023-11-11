<?php
session_start();
if(empty($SESSION)){
    print"<script>location.href='index.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Sistema</a>
            <?php
                print "Olá, ". $_SESSION["nome"];
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>"
                ?>
                <section id="download">
        <a href="2022_PV_impresso_D1_CD1.pdf" download>Download ENEM impresso 2022(caderno azul)
        </a>
        <a href="2022_GB_impresso_D1_CD1(gabarito).pdf" download>Download Gabarito ENEM impresso 2022(caderno azul)
        </a>
        <a href="2021_PV_impresso_D1_CD1.pdf" download>Download ENEM impresso 2021(caderno azul)
        </a>
        <a href="2021_GB_impresso_D1_CD1.pdf" download>Download Gabarito ENEM impresso 2021(caderno azul)
        </a>
        <a href="2020_PV_impresso_D1_CD1.pdf" download>Download ENEM impresso 2020(caderno azul)
        </a>
        <a href="2020_GB_impresso_D1_CD1.pdf" download>Download Gabarito ENEM impresso 2020(caderno azul)
        </a>
        <a href="2019_PV_impresso_D1_CD1.pdf" download>Download ENEM impresso 2019(caderno azul)
        </a>
        <a href="gabarito_1_dia_caderno_1_azul_aplicacao_regular2019.pdf" download>Download Gabarito ENEM impresso 2019(caderno azul)
        </a>
        <a href="2018_PV_impresso_D1_CD1.pdf" download>Download ENEM impresso 2018(caderno azul)
        </a>
        <a href="GAB_ENEM_2018_DIA_1_AZUL.pdf" download>Download Gabarito ENEM impresso 2018(caderno azul)
        </a>
        <a href="2017_PV_impresso_D1_CD1.pdf" download>Download ENEM impresso 2017(caderno azul)
        </a>
        <a href="cad_1_gabarito_azul_511 2017.pdf" download>Download Gabarito ENEM impresso 2017(caderno azul)
        </a>
        <a href="2016_PV_impresso_D1_CD1.pdf" download>Download ENEM impresso 2016(caderno azul)
        </a>
        <a href="GAB_ENEM_2016_DIA_1_01_AZUL.pdf" download>Download Gabarito ENEM impresso 2016(caderno azul)
        </a>
        <a href="2015_PV_impresso_D1_CD1.pdf" download>Download ENEM impresso 2015(caderno azul)
        </a>
        <a href="CADERNO_1_AZUL_ 2015 gabarito.pdf" download>Download Gabarito ENEM impresso 2015(caderno azul)
        </a>
    </section>
        </div>
    </nav>
</body>
</html>