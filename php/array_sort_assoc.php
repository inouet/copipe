<?php
/**
 * sort array of assoc by specific key
 * 
 * @param array  $array
 * @param string $key
 * @param bool   $order_asc 
 */
function array_sort_assoc(array &$array, $key, $order_asc = true)
{
    uasort($array, function($a, $b) use ($key, $order_asc) {
        if ($a[$key] == $b[$key]) {
            return 0;
        }
        $result = ($a[$key] < $b[$key]) ? -1 : 1;
        if (!$order_asc) {
            $result = $result * -1;
        }
        return $result;
    });
}
