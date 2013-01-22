<?php

/**
 * 2つの絶対パス間の相対パスを生成する
 *
 * @param string $dir_from 元ディレクトリ
 * @param string $dir_to   先ディレクトリ
 * 
 * @return string
 */
function relative_path_from_absolute($from_dir, $to_dir) {
    $ds = DIRECTORY_SEPARATOR;
    $from_array = explode($ds, rtrim($from_dir, $ds));
    $to_array   = explode($ds, rtrim($to_dir, $ds));
    
    while (count($from_array) && count($to_array) && 
           $from_array[0] === $to_array[0]) {
        array_shift($from_array);
        array_shift($to_array);
    }
    $dirs = array();
    for ($i = 0; $i < count($from_array); $i++) {
        $dirs[] = "..";
    }
    $dirs = array_merge($dirs, $to_array);
    return join($ds, $dirs);
}
