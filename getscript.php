<?php
$scriptFile = __DIR__ . '/Protected_4174647752688388.txt';
if (file_exists($scriptFile)) {
    header('Content-Type: text/plain');
    readfile($scriptFile);
} else {
    http_response_code(404);
    echo 'File not found';
}
?>
