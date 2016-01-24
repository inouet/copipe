<?php

/**
 * SQLite から指定したSQLでエクスポートする
 *
 * @param string $sql       SQL文
 * @param string $sqlite    SQLiteファイルのパス
 *
 * @return string|null 出力した一時ファイルのパス 失敗した場合はnull
 */
function export_from_sqlite($sql, $sqlite_file) {
    $file = tempnam("/tmp", "sqlite_export_data.");
    $sql  = rtrim(trim($sql), ";");

    $sql_data = <<< EOM
        .headers off
        .output {$file}
        .mode list
        .separator "\\t"
{$sql};
EOM;

    $command_file = tempnam("/tmp", "sqlite_export.");
    file_put_contents($command_file, $sql_data);

    $command = "sqlite3 {$sqlite_file} < {$command_file}";
    @exec($command, $result, $code);
    if ($code != 0) {
        return null;
    }

    if (file_exists($file)) {
        return $file;
    }
    return null;
}

