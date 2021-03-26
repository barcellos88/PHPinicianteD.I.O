<!-- 1º Crie um projeto em PHP para uma competição de natação, o sistema deverá permitir 
a inserção de competidores com seu nome e idade,e o sistema deverá identificar
em qual categoria o nadador erá competir, por exemplo, 6 a 12 anos categoria infantil,
de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar 
a categoria para cada nadador que for cadastrado. -->

<!--2º parte Crie um Formulário para que o usuário possa através de uma página web preencher o nome 
e a idade dos competidores. Esses dados deverão ser utilizados para exibir em qual categoria 
o competidor se encaixa.-->
<?php

$categorias   = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto'; 


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}

if(strlen($nome) > 40)
{
    echo 'O nome é muito extenso';
    return;
}

if(!is_numeric($idade))
{
    echo "Informe um número para idade";
    return;
}

if ($idade>=6 && $idade<=12)
{
    for ($i=0; $i<=count($categorias); $i++)
    {
        if($categorias[$i] == "Infantil")
            echo "O nadador ".$nome." Compete na categoria ".$categorias[$i];
    }
}
elseif($idade>=13 && $idade<=18)
{
    for ($i=0; $i<=count($categorias); $i++)
    {
        if($categorias[$i] == 'Adolescente')
            echo "O nadador ".$nome." Compete na categoria ".$categorias[$i];
    }
}
else
{
    for ($i=0; $i<=count($categorias); $i++)
    {
        if($categorias[$i] == 'Adulto')
            echo "O nadador ".$nome." Compete na categoria ".$categorias[$i];
    }
}

?>
 