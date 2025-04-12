<?php
$scriptFile = '/path/to/protected/roblox_script.txt';
if (file_exists($scriptFile)) {
    header('Content-Type: text/plain');
    readfile($scriptFile);
} else {
    http_response_code(404);
    echo 'File not found';
}
?>
