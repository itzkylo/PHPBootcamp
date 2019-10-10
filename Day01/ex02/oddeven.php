#!/usr/bin/php
<?php
    while (1)
    {
        echo "Enter a number: ";
        $number = trim(fgets(STDIN));
        if (feof(STDIN))
        {
            echo "\n";
            break;
        }
        if (is_numeric($number))
        {
            if (!bcmod($number, 2))
                echo "The number $number is even\n";
            else
                echo "The number $number is odd\n";
        }
        else
            echo "'$number' is not a number\n";
    }
?>