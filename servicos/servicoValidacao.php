<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode ser vazio');
        return false;
    }
    else if(strlen($nome) < 3)//nao deixa ser digitado menos doque 3 caracteres
    {
        setarMensagemErro('O nome não pode conter menos de 3 caracteres');
        return false;
    }
    else if(strlen($nome) > 40)//limita a quantidade de caracteres digitados
    {
        setarMensagemErro('O nome é muito extenso');
        return false;
    }
    return true;
}


function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))//verifica se foi digitado numeros ao invés de letras
    {
        setarMensagemErro('Informe um número para idade');
        return false;
    }
    return true;
}


?>
