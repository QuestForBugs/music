<?php

// Get the User-Agent string
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Check if the User-Agent contains "Bytespider" (case-insensitive)
if (stripos($userAgent, 'Bytespider') !== false) {
  // Redirect to your custom page
  header("HTTP/1.1 301 Moved Permanently"); // 301 for permanent redirect, 302 for temporary
  header("Location: /nuhuh.html"); // Replace with the actual path to your custom page
  exit; // Important: Stop further script execution
}

// If the User-Agent is not Bytespider, continue with the normal page content
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Page</title>
</head>
<body>
  <h1> Server Backend Page. </h1>
  <p>This is use to check will see if Bytespider, Bytedance's web crawler, is on the site.
  This is a server page/p>
  </body>
</html>
