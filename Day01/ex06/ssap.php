#!/usr/bin/php
<?php
    if ($argc == 1)
    exit;
    $in = implode(" ", $argv);
    $out = array_filter(explode(" ", $in));
    unset($out[0]);
    sort($out);
    $i = 0;
    while ($out[$i] != NULL)
    {
        echo "$out[$i]\n";
        $i++;
    }
?>