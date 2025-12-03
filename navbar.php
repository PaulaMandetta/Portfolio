<?php
  // Verifica em qual página estamos. 
  // Se for 'index.php', o link será apenas '#home' (para o ScrollSpy funcionar).
  // Se for outra página, o link será 'index.php#home' (para navegar de volta).
  $pagina = basename($_SERVER['PHP_SELF']);
  $link_prefixo = ($pagina == 'index.php') ? '' : 'index.php';
?>

<body data-bs-spy="scroll" data-bs-target="#navbar-paula" data-bs-root-margin="0px 0px -40%">

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    
    <a class="navbar-brand fw-bold me-auto" href="index.php#home">
        <i class="fa-solid fa-fish texto-titulo me-2"></i>
        <span class="texto-titulo">Paula Mandetta</span>
    </a>
    
    <button class="navbar-toggler btn-custom-outline" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

      <ul class="navbar-nav mb-2 mb-lg-0 text-uppercase">
          
          <li class="nav-item">
              <a class="nav-link fw-bold" href="index.php#sobre">Sobre</a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link fw-bold" href="index.php#competencias">Competências</a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link fw-bold" href="index.php#portfolio">Projetos</a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link fw-bold" href="index.php#experiencias">Experiências</a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link fw-bold" href="index.php#contato">Contato</a>
          </li>

      </ul>

    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function(){
        // Pega todos os links dentro da navegação
        var links = document.querySelectorAll('.navbar-nav .nav-link');
        var menuCollapse = document.getElementById('navbarSupportedContent');
        var bsCollapse = new bootstrap.Collapse(menuCollapse, {toggle: false});

        links.forEach(function(link){
            link.addEventListener('click', function(){
                // Só tenta fechar se o menu estiver visível (aberto no mobile)
                if(menuCollapse.classList.contains('show')){
                    bsCollapse.hide();
                }
            });
        });
    });
</script>

</nav>