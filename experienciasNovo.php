<div class="container-fluid mt-5 pt-5" id="experiencias">
    <div class="container text-center">
        <h1>Experiências Profissionais</h1>
        <p><span class="texto-principal">----------------</span></p>
        <div class="row g-4 justify-content-center">
            <?php
                include ("conexao.php"); 
                    $sql = "SELECT * FROM experiencias"; 
                    $puxa = $mysqli->query($sql);    
                    while ($mostra = $puxa->fetch_object()){ 
            ?>    
                        <div class="col-12 col-md-4">
                            <a href="mostraExperiencias.php?idExperiencia=<?= htmlspecialchars($mostra->idExperiencia)?>" 
                            class="btn btn-custom-outline w-100">
                                <i class="fa-solid fa-briefcase"></i>
                                <?= htmlspecialchars($mostra->funcaoExperiencia) ?>
                            </a>
                        </div>
            <?php
                    }
            ?>
        </div>    
    </div>    
</div>



            

            <!-- include ("conexao.php"); 
    $sql = "SELECT * FROM experiencias"; 
    $puxa = $mysqli->query($sql);    
    while ($mostra = $puxa->fetch_object()){  
        echo "<a href='mostraExperiencias.php?idExperiencia=$mostra->idExperiencia'>" . $mostra->funcaoExperiencia . "</a><br/>";  
    }  -->