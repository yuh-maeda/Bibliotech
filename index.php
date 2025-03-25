<?php
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Digital</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="livrinho.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="menu-sup">
        <nav class="nav-menu">
            <span class="logo"><p>Biblio</p>TECH</span>
            <ul>
                <li><a class='link-menu' href=""> <i class="fa-solid fa-house"></i> Home</a></li>
                <li><a class='link-menu'href=""> <i class="fa-solid fa-magnifying-glass"></i> Busca</a></li>
                <li><a class='link-menu' href=""> <i class="fa-solid fa-info"></i> Sobre</a></li>
                <li><a class='link-menu' href=""> <i class="fa-solid fa-phone"></i> Contate-nos</a></li>
            </ul>
        </nav>
    </header>    

    <section class="area-livros">
        <div class="area-titulo-btn">
            <h1 class='titulo'>Todos os Livros</h1>
            <div class="area-btns">
                <a href="" class="btn btn-add">Adicionar Livros</a>
            </div>
        </div>

        <div class="livros">
            
            <div class="card-info">
                <div class="area-tiutlo-id">
                    <h1 class="livro-titulo">Livro do Machado</h1>
                    <h1 class="livro-id">1</h1>
                </div>
                
                <div class="area-autor">
                    <p class>Autor: Machado de Asis</p>
                </div>

                <div class="area-data">
                    <p class="livro-data"'>Data de Publicação: 25/25/25</p>
                    <p class="livro-data">Data de chegada: 25/25/25</p>
                </div>

                <a href="" class="btn"> Editar </a>
            </div>
            <div class="card-info">
                <div class="area-tiutlo-id">
                    <h1 class="livro-titulo">Livro do Machado</h1>
                    <h1 class="livro-id">2</h1>
                </div>
                
                <div class="area-autor">
                    <p>Autor: Machado de Asis</p>
                </div>

                <div class="area-data">
                    <p class="livro-data"'>Data de Publicação: 25/25/25</p>
                    <p class="livro-data">Data de chegada: 25/25/25</p>
                </div>

                <a href="" class="btn"> Editar </a>
            </div>
            <div class="card-info">
                <div class="area-tiutlo-id">
                    <h1 class="livro-titulo">Livro do Machado</h1>
                    <h1 class="livro-id">3</h1>
                </div>
                
                <div class="area-autor">
                    <p>Autor: Machado de Asis</p>
                </div>

                <div class="area-data">
                    <p class="livro-data"'>Data de Publicação: 25/25/25</p>
                    <p class="livro-data">Data de chegada: 25/25/25</p>
                </div>

                <a href="" class="btn"> Editar </a>
            </div>
        
        </div>

    </section>
</body>
</html>