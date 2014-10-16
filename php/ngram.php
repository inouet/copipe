<?php

/**
 * 文字列をN-gramに分割する
 *
 * @param string $string    分割する文字列
 * @param int    $n         文字数
 * @param string $encoding  文字コード
 *
 * @return string[]
 */
function ngram($string, $n, $encoding = 'utf-8') 
{
    $result = array();
    $length = mb_strlen($string, $encoding);
    for ($i = 0; $i < $length; $i++) {
        $ngram = mb_substr($string, $i, $n, $encoding);
        $result[] = $ngram;
    }
    return $result;
}
