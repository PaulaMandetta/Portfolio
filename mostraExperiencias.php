<?php

include_once 'conexao.php';
include_once 'head.php';
include_once 'navbar.php';
?>
<div class="container-fluid mt-5 pt-5" id="sobre">
    <div class="container">
        <div class="row align-items-top">
            <div class="col-lg-4">
                <h1>DADOS EXPERIÊNCIAS</h1>
                <p><span class="texto-principal">----------------</span></p>
            </div>
            <div class="col-lg-8">
                <?php 
                    include ("conexao.php"); 
                    
                        $id = $_GET ["idExperiencia"]; 
                        $sql = "SELECT * FROM experiencias WHERE idExperiencia = '$id'"; 
                        $puxa = $mysqli->query($sql);    
                        $mostra = $puxa->fetch_object(); 
                        echo "ID: " . $mostra->idExperiencia . "</br>"; 
                        echo "Período: " . $mostra->periodoExperiencia . "</br>"; 
                        echo "Função: " . $mostra->funcaoExperiencia . "</br>";  
                        echo "Empresa: " . $mostra->empresaExperiencia . "</br>";
                        echo "Descrição: " . $mostra->descricaoExperiencia . "</br>";  
                    ?> 
            </div>
        </div>
    </div>
</div>

