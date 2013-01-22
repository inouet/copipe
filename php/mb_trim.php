<?php

/**
 * 文字列の先頭および末尾にある全角／半角 空白を削除 (リファレンス渡し）
 *  
 * @param  string $string 文字列 (UTF-8)
 * @return void
 */
function mb_trim_ref(&$string) {
    $string = preg_replace('/^[ 　]*(.*?)[ 　]*$/u', '$1', $string);
}

/**
 * 文字列の先頭および末尾にある全角／半角 空白を削除 
 * 
 * @param  string $string 文字列 (UTF-8)
 * @return string
 */
function mb_trim($string) {
    return preg_replace('/^[ 　]*(.*?)[ 　]*$/u', '$1', $string);
}

