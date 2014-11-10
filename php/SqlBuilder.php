<?php

class SqlBuilder
{
    /**
     * UPDATE文の生成
     * 
     * @param PDO       $pdo
     * @param string    $table_name テーブル名
     * @param array     $hash       データの連想配列
     * @param string    $where      WHERE文
     * 
     * @return string 
     */
    public static function update(\PDO $pdo, $table_name, array $hash, $where)
    {
        if (!$where) {
            return null;
        }
        $list = array();
        foreach ($hash as $key => $value) {
            $value = $pdo->quote($value);
            $list[] = "{$key} = {$value}";
        }
        $key_values = join(", ", $list);
        $sql = "UPDATE {$table_name} SET {$key_values} WHERE {$where};";
        return $sql;
    }

    /**
     * INSERT文の生成
     *
     * @param PDO       $pdo
     * @param string    $table_name
     * @param array     $hash   
     *
     * @return string    
     */
    public static function insert(\PDO $pdo, $table_name, array $hash)
    {
        $fields = array_keys($hash);
        $values = array_values($hash);
        $field_list = join(", ", $fields);
        foreach ($values as &$value) {
            $value = $pdo->quote($value);
        }
        $value_list = join(", ", $values);
        $sql = "INSERT INTO {$table_name} ({$field_list}) VALUES ({$value_list});";
        return $sql;
    }
}

