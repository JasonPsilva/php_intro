<?php



if(isset($_POST['submit'])){

    include_once('config.php');

    $porteiro = $_POST['porteiro'];
    $data = $_POST['data_dia'];
    $ocorrencias = $_POST['ocorrencias'];

    $result =mysqli_query($conexao, "INSERT INTO livro (porteiro, data,ocorrencias) 
    VALUES('$porteiro','$data', '$ocorrencias')");



}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site.php </title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <br><br>
    <form action="index.php" method="POST">
        <h1>PORTEIRO</h1> 
         <input type="Porteiro" name="porteiro"><br><br>
        <h2>DATA</h2> 
        <input type="date" name="data_dia"><br><br>
       <h2> OCORÊNCIAS</h2>
        <input type="text" name="ocorrencias" class="ocorrencias"><br><br><br>
        <input type="submit" value="Enviar" name="submit" class="botao">



    </form>
    <footer >
        SITE CRIADO POR JASON P. SILVA
    </footer>
   
</body>
</html>