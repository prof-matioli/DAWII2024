<?php

    // BOOLEANS

    // são variáveis com dois valores possíveis: verdadeiro ou falso

    $apresentar_nome = true;
    $apresentar_idade = false;

    // os valores são case insensitive
    $mostrar = TRUE;    // o mesmo que $mostrar = true;

    // são variáveis usadas majoritariamente em 
    // estruturas de controle do fluxo do código: 
    // laços (loops) e instruções condicionais

    // podemos converter valores em booleanos.
    // tradicionalmente, o valor zero (0) é equivalente a false e todos
    // os outros valores são equivalentes a true.

    // podemos ainda determinar se uma variável é booleana ou não
    var_dump(is_bool($mostrar));