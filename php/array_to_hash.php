<?php

/**
 * 値の配列とキーの配列をハッシュに変換する
 *
 * @param array $values 値の配列  ['John', 23, 'New York']
 *
 * @param array $keys   キーの配列 ['name', 'age', 'hometown']
 *
 * @return array 連想配列 ['name' => 'John', 'age' => 23, 'hometown' => 'New York']
 */
function array_to_hash(array $values, array $keys)
{
    $hash = array();
    if (!isset($keys[0])) { // $keys が 0から始まっていない場合は0始まりにする
        $keys = array_values($keys);
    }
    foreach ($keys as $i => $key) {
        $value      = isset($values[$i]) ? $values[$i] : null;
        $hash[$key] = $value;
    }
    return $hash;
}
