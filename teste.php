<?php

function exibirNome($nome='') {
    if (empty($nome))
    {
        echo 'Nome não informado';
    }
    else{
        echo $nome;
    }
}

exibirNome();
exibirNome('Aristóteles');


?>