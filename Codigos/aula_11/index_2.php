<?php

    // STRINGS
    // ------------------------------------------------------------------

    $curso = "DevSis";

    // Outras duas formas de definir strings (menos usadas) são:

    // Heredoc

    $texto1 = <<<TEXT
    frase 1
    $curso
    frase 3
    TEXT;

    echo $texto1; // as linhas vão aparecer sem quebras

    echo "<hr>";

    echo nl2br($texto1);    // as linhas vão aparecer com quebras

    echo "<hr>";

    // Nowdoc
    $texto2 = <<<'TEXT'
    frase 1
    $curso
    frase 3
    TEXT;

    echo nl2br($texto2);