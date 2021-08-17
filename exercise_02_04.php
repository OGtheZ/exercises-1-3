<?php

$numberToCheck = 14;

if ($numberToCheck > 1 && $numberToCheck < 15 && $numberToCheck %2 === 0)
{
    echo "Meets all three conditions" . "\n";
}
else
{
    echo "The numbers doesn't meet one of the conditions" . PHP_EOL;
}
