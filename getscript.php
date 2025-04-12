<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain");

$scriptFile = __DIR__ . '/Protected_4174647752688388.txt';
if (file_exists($scriptFile)) {
    readfile($scriptFile);
} else {
    http_response_code(404);
    echo 'File not found';
}
?>
