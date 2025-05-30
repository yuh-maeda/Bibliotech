<?php
    include_once("conexao.php");
    $sql = 'SELECT * FROM livro';
    $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotech</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="livrinho.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="menu-sup">
        <nav class="nav-menu">
            <span class="logo"><p>Biblio</p>TECH</span>
            <ul>
                <li><a class='link-menu' href="home.php"> <i class="fa-solid fa-house"></i> Home</a></li>
            </ul>
        </nav>
    </header>    

    <section class="area-livros">
        <div class="area-titulo-btn">
            <h1 class='titulo'>Todos os Livros</h1>
            <div class="area-btns">
                <a href="form.php" class="btn btn-add">Adicionar Livros</a>
            </div>
        </div>

        <div class="livros">
            
            <?php
                if ($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $titulo = $row['titulo'];
                        $sinopse = $row['sinopse'];
                        $genero = $row['genero'];
                        $autor = $row['autor'];
                        $data_pub = $row['dataPub'];
                        $data_cheg = $row['dataCheg'];

                        echo"<div class='card-info'>

                            <div class='area-tiutlo-id'>
                            <h1 class='livro-id'>$id</h1>
                            <h1 class='livro-titulo'>$titulo</h1>
                            <p class='livro-sinopse'>$sinopse</p>
                            </div>
                            
                            <p class='dado livro-genero'>Genero: $genero</p>
                            <p class='dado livro-autor'>Autor: $autor</p>
                            
                            <div class='area-datas'>
                                <p class='dado livro-data'>Data de Publicação: $data_pub</p>
                                <p class='dado livro-data'>Data de chegada: $data_cheg</p>
                            </div> 
                        </div>";
                    }
                }else{
                    echo"Não á livros";
                }
            ?>




        <!-- <div class="card-info">
                <div class="area-tiutlo-id">
                    <h1 class="livro-id">1</h1>
                    <h1 class="livro-titulo">Livro do Machado</h1>
                    <p class="livro-sinpse">Um piloto perdido no deserto encontra um jovem príncipe que veio de um pequeno planeta. Juntos, eles compartilham conversas sobre a vida, o amor e a natureza humana, com o príncipe contando suas experiências em diferentes planetas. A história é uma reflexão poética sobre a infância, os sentimentos e a busca por sentido no mundo adulto.</p>
                </div>
                
                <p class="dado livro-genero">Genero: História</p>
                <p class="dado livro-autor">Autor: Machado de Asis</p>
                
                <div class="area-datas">
                    <p class="dado livro-data">Data de Publicação: 25/25/25</p>
                    <p class="dado livro-data">Data de chegada: 25/25/25</p>
                </div>

            </div> -->
        
        </div>

    </section>

    <footer>

    </footer>

</body>
</html>