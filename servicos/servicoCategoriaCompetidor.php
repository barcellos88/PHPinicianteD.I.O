<?php

function defineCategoriaCompetidor($nome, $idade) : ?string
{
    $categorias   = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
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
                setarMensagemSucesso("O nadador $nome Compete na categoria $categorias[$i]");
                    return null;
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
                    setarMensagemSucesso('O nadador '.$nome.' Compete na categoria '.$categorias[$i]);
                    return null;
                
                }
            }
        }
        else
        {
            for($i=0; $i<=count($categorias); $i++)
            {
                if($categorias[$i] == 'adulto')
                {
                    setarMensagemSucesso("O nadador $nome Compete na categoria $categorias[$i]");
                    return null;
                }
            }
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }

}

?>