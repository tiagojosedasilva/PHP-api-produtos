<?php
    $url = 'http://localhost/projeto';
    $classe = 'estoque';
    $metodo = 'mostrar';

    $montar = $url.'/'.$classe.'/'.$metodo;

    $retorno = file_get_contents($montar);
    $retornoJson = json_decode($retorno, 1);

    var_dump($retorno);