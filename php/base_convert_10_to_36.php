<?php

/**
 * 10進数の数値を36進数（0～9、A～Z）の文字列に変換する
 *
 * @param  int $i
 * @return string $str
 */

function base_convert_10_to_36($i) {
    $str = strtoupper(base_convert($i, 10, 36));
    return $str;
}
