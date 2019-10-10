#!/usr/bin/php
<?php
if ($argc > 1)
{
    $out = explode(" ", $argv[1]);
    $i = 1;
    while ($out[$i])
    {
        echo $out[$i];
        echo " ";
        $i++;
    }
    echo "$out[0]\n";
}
?>