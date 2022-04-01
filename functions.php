<?php

function read_file($arquivo){
    $fp = fopen($arquivo, "r");
    $texto = "";
    if (filesize($arquivo) > 0)
        $texto = fread($fp, filesize($arquivo));
    fclose($fp);
    return $texto;
}

function filter_youtube_data($matches){
    $finalArr = [];
    foreach ($matches as $arr) {
        foreach ($arr as $dados) {
            $array[] = trim($dados);
            if (preg_match_all("/^\d{1,2}:\d{2}:?\d{0,2}$/", $array[0]) && count($array) < 5) :
                continue;
            elseif (count($array) == 5) :
                $KeyArr = ['duracao', 'titulo', 'canal', 'visualizacoes', 'data-publicacao'];
                for ($i = 0; $i < count($array); $i++) {
                    $array[$KeyArr[$i]] = $array[$i];
                    unset($array[$i]);
                }
                $finalArr[] = $array;
                unset($array);
            else :
                unset($array);
            endif;
        }
    }
    return $finalArr;
}

function youtube_data($arquivo){
    $file = read_file($arquivo);
    $string = str_replace("TOCANDO AGORA", "", $file);
    $regex = "/.+\s*\n/";
    preg_match_all($regex, $string, $matches);
    $dados = filter_youtube_data($matches);
    return $dados;
}