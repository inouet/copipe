<?php

/**
 * 配列から要素を取得
 *
 * @param array  $data 
 * @param string $key
 * @param string $default
 *
 * @return mixed
 */
function array_get($data, $key, $default = null) {
    if (!is_array($data)) {
        return $default;
    }
    return isset($data[$key]) ? $data[$key]: $default;
}
