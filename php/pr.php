<?php

/**
 * デバッグ用変数表示
 *
 * @param mixed $var
 */
function pr($var) {
    echo "<pre>\n";
    if ($var) {
        print_r($var);
    } else {
        var_dump($var);
    }
    echo "</pre>\n";
}

