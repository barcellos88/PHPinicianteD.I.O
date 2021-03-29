<!-- 1º Crie um projeto em PHP para uma competição de natação, o sistema deverá permitir 
a inserção de competidores com seu nome e idade,e o sistema deverá identificar
em qual categoria o nadador erá competir, por exemplo, 6 a 12 anos categoria infantil,
de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar 
a categoria para cada nadador que for cadastrado. -->

<!-- 2º parte Crie um Formulário para que o usuário possa através de uma página web preencher o nome 
e a idade dos competidores. Esses dados deverão ser utilizados para exibir em qual categoria 
o competidor se encaixa.-->
<?php

session_start();

$categorias   = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto'; 


$nome = $_POST['nome'];
$idade = $_POST['idade'];

//inicio das verificações
if(empty($nome))
{
    /*
        //1º forma de verificação de erros
    echo 'O nome não pode ser vazio';
    return;
    */
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio';
    header( 'location: index.php');//faz com q depois do erro, volte para o index e nao fique preso no script.php
    return;
    
}
else if(strlen($nome) < 3)//nao deixa ser digitado menos doque 3 caracteres
{
    /*echo 'O nome deve conter mais de 3 caracteres';
    return;*/
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracteres';
    header( 'location: index.php');
    return;
}
else if(strlen($nome) > 40)//limita a quantidade de caracteres digitados
{
    /*echo 'O nome é muito extenso';
    return;*/
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso';
    header( 'location: index.php');
    return;
}
else if(!is_numeric($idade))//verifica se foi digitado numeros ao invés de letras
{
    /*echo "Informe um número para idade";
    return;*/
    $_SESSION['mensagem-de-erro'] = 'Informe um número para idade';
    header( 'location: index.php');
    return;
}
//termino das verificações


if ($idade>=6 && $idade<=12)
{
    for($i=0; $i<=count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        {
            /*  //1º forma de apresentar a mensagem
                //com "" nao precisa de ponto para separar variaveis
            //echo "O nadador $nome Compete na categoria $categorias[$i]";
            */
            $_SESSION['mensagem-de-sucesso'] = "O nadador $nome Compete na categoria $categorias[$i]";
            header("location: index.php");
            return;
        }
    }
}
else if($idade>=13 && $idade<=18)
{
    for($i=0; $i<=count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        {
            /*
            //com '' precisa usar ponto
            echo 'O nadador '.$nome.' Compete na categoria '.$categorias[$i];
            */
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' Compete na categoria '.$categorias[$i];
            header("location: index.php");
            return;
        
        }
    }
}
else
{
    for($i=0; $i<=count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        {
            //echo "O nadador ".$nome." Compete na categoria ".$categorias[$i];
            $_SESSION['mensagem-de-sucesso'] = "O nadador $nome Compete na categoria $categorias[$i]";
            header("location: index.php");
            return;
        }
    }
}

?>
 