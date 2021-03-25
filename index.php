<!-- Crie um projeto em PHP para uma competição de natação, o sistema deverá permitir 
a inserção de competidores com seu nome e idade,e o sistema deverá identificar
em qual categoria o nadador erá competir, por exemplo, 6 a 12 anos categoria infantil,
de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar 
a categoria para cada nadador que for cadastrado. -->
<?php

$categorias   = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto'; 
//print_r($categorias);

$nome = 'Eduardo';
$idade = 7;
//var_dump($nome, $idade);mostra tipo de variavel

if ($idade>=6 && $idade<=12)
{
    //impressão de forma simples
    //echo 'Infantil';

    //com laço de repetição
    for ($i=0; $i<=count($categorias); $i++)
    {
        if($categorias[$i] == 'Infantil')
            echo "O nadador ".$nome." Compete na categoria ".$categorias[$i];
    }
}
elseif($idade>=13 && $idade<=18)
{
    //echo 'Adolescente';

    for ($i=0; $i<=count($categorias); $i++)
    {
        if($categorias[$i] == 'Adolescente')
            echo "O nadador ".$nome." Compete na categoria ".$categorias[$i];;
    }
}
else
{
    //echo 'Adulto';

    for ($i=0; $i<=count($categorias); $i++)
    {
        if($categorias[$i] == 'Adulto')
            echo "O nadador ".$nome." Compete na categoria ".$categorias[$i];;
    }
}

?>