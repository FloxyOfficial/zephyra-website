<?php
// Get the user agent string from the request header.
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Check if the request comes from Roblox by looking for the term "Roblox"
// (Change "Roblox" to a different string if needed).
if (stripos($userAgent, "Roblox") === false) {
    // Not a Roblox request; serve an HTML page that quickly redirects/ "closes" the page.
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Access Denied</title>
      <script type="text/javascript">
        // On page load, redirect the user to a blank page.
        window.onload = function() {
          window.location.href = "about:blank";
        }
      </script>
    </head>
    <body>
      <p>Access Denied.</p>
    </body>
    </html>
    <?php
} else {
    // If the request is coming from Roblox, set the content type to plain text.
    header('Content-Type: text/plain');
    
    // Paste your Lua script below this comment.
    // For example:
    echo "print('Hello from Roblox!')\n";
    
    // Replace the example above with your own Lua code that you want Roblox to execute.
    // Example:
    // echo "YourLuaCodeHere()\n";
}
?>
