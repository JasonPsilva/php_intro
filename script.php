<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);



$Nome = $_POST['seuNome'];
$idade = $_POST['suaIdade'];

if (empty($Nome )){
echo "O campo Nome deve ser preechidos";
return;
}
if(empty($idade)){
echo "O campo Idade deve ser preenchido";
return;
}
if(strlen($Nome) <3 ){
    echo "nao póde havermenos de 3 caracteres";
    return;

}
if(strlen($Nome) >40 ){
    echo "O nome e muito extenço";
    return;

}
if(!Is_numeric($idade)){

    echo "informe um numero para idade";
    return;
}

//var_dump($Nome);
//var_dump($idade);

if($idade >=6 && $idade<=12)
{
    for($i = 0; $i != count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')
     echo "o nadador " , $Nome , " esta na categoria infantil"; 
    }
}
else if($idade >=13 && $idade<=20)
{
    for($i = 0; $i != count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolecente')
     echo "o nadador " , $Nome , " esta na categoria adolecente"; 
    }
}
else if($idade>=21)
{
    for($i = 0; $i != count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto')
     echo "o nadador " , $Nome , " esta na categoria adulto";
     
     
    }
}


?>