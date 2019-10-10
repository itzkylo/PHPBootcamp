#!/usr/bin/php
<?php  
    function ft_split($input)
    {
        $output = explode(" ", $input);
        $return = array_filter($out, 'strlen');
        sort($return);
        return ($return);
    }
?>