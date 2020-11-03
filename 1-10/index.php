<?php
$number = 9;
$letter = 'K';

$number9 = 9;
$letterK = 'K';

$number2 = 2;
$letterM = 'M';

$tosion = 'Tottakai';
$eio = 'Ei ollutkaan';

if ($letter == $letterK && $number == $number9) 
{
    echo $tosion;
} 
else 
{
    echo $eio;
}

echo nl2br("\n");

$number = $number2;
$letter = $letterM;

if ($letter == $letterK && $number == $number9) 
{
    echo $tosion;
} 
else 
{
    echo $eio;
}