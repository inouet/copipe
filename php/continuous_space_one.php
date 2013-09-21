<?php
/**
 * 連続するスペースを一つにする
 *
 * @param string $text
 * @return string 
 */
function continuous_space_to_one($text, $encoding = 'utf8') {
    $text = mb_convert_kana($text, 's', $encoding);
    $text = preg_replace('/\s+/', ' ', $text);
    return $text;
}
