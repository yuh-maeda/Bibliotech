<?php

$servername='10.38.0.81';
$username='user';
$senha='321';
$dbname='BdD';

$conn = new mysqli($servername,$username,$senha,$dbname);

if($conn->connect_error){
    die("Conexão falhou: " . $conn->connect_error);
}
else{
    // echo"<script>alert('conectado')</script>";
}

?>
