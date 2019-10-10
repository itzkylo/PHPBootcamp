#!/usr/bin/php
<?php
    if ($argc != 2)
    exit;
    $output = trim(preg_replace('/\s+/', ' ', $argv[1]));
    echo "$output\n";
?>