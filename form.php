<?php
    include_once("conexao.php");

    if(isset($_POST['adicionar'])){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $data_pub = $_POST['data_pub'];
        $data_cheg = $_POST['data_cheg'];
        $sinopse = $_POST['sinopse'];
        $genero = $_POST['genero'];
    
        $sql_update = "INSERT INTO livro (titulo, autor, dataPub,dataCheg,genero,sinopse) VALUES ('$titulo','$autor', '$data_pub','$data_cheg','$genero','$sinopse')";
    
        $result_update = mysqli_query($conn,$sql_update);
        
        if($result_update){
            header('location:index.php');
        }
        else{
            echo'<script>alert("Não foi possível cadastrar o livro!")</script>';
            print_r($_POST);
        }
    
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotech</title>
    <link rel="stylesheet" href="form.css">
    <link rel="shortcut icon" href="livrinho.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form class="form-livros" action="" method="post">
        <div class="area-input">
            <h1 class="form-h1">Titulo</h1>
            <input type="text" name="titulo" class="form-input">
        </div>

        <div class="area-input">
            <h1 class="form-h1">Autor</h1>
            <input type="text" name="autor" class="form-input">
        </div>

        <div class="area-input">
            <h1 class="form-h1">Data de Publicação</h1>
            <input type="date" name="data_pub" class="form-input">
        </div>

        <div class="area-input">
            <h1 class="form-h1">Data de chegada</h1>
            <input type="date" name="data_cheg" class="form-input">
        </div>

        <div class="area-input genero">
            <h1 class="form-h1">Gênero</h1>
            <input type="text" name="genero" class="form-input">
        </div>

        <div class="area-input area-sinopse">
            <h1 class="form-h1">Sinopse</h1>
            <textarea name="sinopse"  class="text-sinopse"></textarea>
        </div>
        
        <input type="submit" name="adicionar" value="Adicionar" class="btn submit">

    </form>

    <div class="area-btn-voltar">
        <a href="index.php" class="btn-voltar"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

</body>
</html>