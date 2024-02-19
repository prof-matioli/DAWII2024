<?php

    // STRINGS
    // ------------------------------------------------------------------

    // Um aspecto importante nas strings: o PHP contém um vasto conjunto de
    // funções para efetuar operações com strings.
    // Vejamos apenas alguns exemplos.

    $frase = "Lorem ipsum dolor sit, amet consectetur adipisicing elit.";

    // apresentar número de caracteres de uma string
    echo strlen($frase) . '<br>';

    // transformar todas as letras em maiúsculas
    echo strtoupper($frase) . '<br>';

    // apresentar apenas parte da frase
    echo substr($frase, 0, 20) . '<br>';

    // verifica se uma palavra existe dentro da string
    echo str_contains($frase, 'xxxxxx');

    // Existem dezenas de funções para strings.
    // Não se preocupes, ao longo do curso iremos aprender bastante
    // à medida das necessidades.