<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Portfólio Paulinha</title>

<style>
    /* VARIÁVEIS DE COR */
    :root {
        --cor-principal: #B197FC;
        --cor-secundaria: #faf7ff;
        --cor-titulo: #33195e;
    }

    /* CORES DE TEXTO */
    .texto-principal { color: var(--cor-principal); }
    .texto-titulo { color: var(--cor-titulo); }

    /* BOTÃO CUSTOMIZADO */
    .btn-custom-outline {
        border-color: var(--cor-principal);
        color: var(--cor-principal);
        transition: all 0.3s ease; 
    }
    .btn-custom-outline:hover {
        background-color: var(--cor-principal);
        color: white;
    }
    .btn-custom-outline:hover i {
        color: white !important;
    }

    /* FUNDO PRINCIPAL */
    .bg-principal {
        background-color: var(--cor-secundaria) !important;
    }
    
    /* NAV BAR */
    .navbar-nav .nav-link {
        color: var(--cor-principal) !important;
        transition: color 0.3s ease;
    }
    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
        color: var(--cor-titulo) !important;
    }



    /* Botões redondos (Links) */
    .btn-bolinha {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
        background-color: #f8f9fa;
        border: 1px solid #eee;
    }
    .btn-bolinha:hover {
        background-color: var(--cor-principal);
        color: white !important;
        border-color: var(--cor-principal);
    }
    .btn-bolinha:hover i {
        color: white !important;
    }
    
    /* ANIMAÇÃO 'CARREGAR MAIS' */
    .fade-in {
        animation: fadeIn 0.6s ease-out forwards;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
</style>
</head>
