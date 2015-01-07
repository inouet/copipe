<?php
/**
 * HTTP POSTリクエストを送る
 *
 * @param string $url
 * @param array  $data
 *
 * @return string
 */
function http_post($url, array $data)
{
    $query = http_build_query($data);

    $header = array(
        "Content-Type: application/x-www-form-urlencoded",
        "Content-Length: ". strlen($query),
    );
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => implode("\r\n", $header),
            'content' => $query,
        )
    );
    $contents = file_get_contents($url, false, 
        stream_context_create($options));
    return $contents;
}
