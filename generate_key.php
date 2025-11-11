<?php
// Simple script to generate an API key
$key = bin2hex(random_bytes(20)); // 40 characters
echo "Generated API Key: " . $key . PHP_EOL;
echo "Copy this key to use in your API requests." . PHP_EOL;
?>
