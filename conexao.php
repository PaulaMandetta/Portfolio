    <?php  
    $host       = "localhost"; 
    $usuario    = "root";  
    $senha      = "";  
    $banco      = "portfolio";  
 
    $mysqli = new mysqli($host, $usuario, $senha, $banco); 
    // if ($mysqli-> connect_errno){  
    //     echo "Erro</br>";  
    // } else {  
    //     echo "Conectado</br></br>"; 
    // }  
     
    // Fechar a conexão para não haver uma possível invasão.  
    //$mysqli->close(); 
 
    ?> 