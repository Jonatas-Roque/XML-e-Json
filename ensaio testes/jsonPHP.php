<?php

//Implementação de Json via ficheiro json em PHP

    echo '<pre>';

    //Buscar ficheiro Json
    $arquivo_json = file_get_contents('data.json');

    //Decode do ficheiro para dados
    $dados_decodificados = json_decode($arquivo_json, true);

    //No caso de querer detetar algum erro: print_r(json_last_error());

echo "<h3>Alunos:</h3>";

    //Print dos dados na página
    foreach ($dados_decodificados['alunos'] as $aluno ){

        echo "aluno ".$aluno['id']." - ".$aluno['nome']." - ".$aluno['sobrenome']." - ".$aluno['email'].PHP_EOL;

    }

    echo '</pre>';

?>
