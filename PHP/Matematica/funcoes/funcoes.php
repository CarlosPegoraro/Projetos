<?php

function formulageralPa($a1, $r, $n)
{
    $an = $a1 + ($n - 1) * $r;
    echo "<p class='fonte18 branco arial'>O valor de A$n é $an</p>";
}

function formulageralPg($a1, $r, $n)
{
    $an = $a1 * $r ** ($n - 1);
    echo "<p class='fonte18 branco arial'>O valor de A$n é $an</p>";
}

function somaPa($a1, $r, $n)
{
    $Sn = ($n / 2) * (2 * $a1 + ($n - 1) * $r);
    echo "<p class='fonte18 branco arial'>O valor da soma de uma PA de $n termos é: $Sn</p>";
}

function somaPg($a1, $r, $n)
{
    if($r = 1)
    {
        $Sn = $a1 * $n;
        echo "<p class='fonte18 branco arial'>O valor da soma de uma PG de $n termos é: $Sn</p>";
    } 
    else
    {
        $Sn = ($a1 * (1 - $r ** $n)) / (1 - $r);
         echo "<p class='fonte18 branco arial'>O valor da soma de uma PG de $n termos é: $Sn</p>";
    }
}

function somaInfinita($a1, $r)
{
    $Si = $a1 / (1 - $r);
    echo "<p class='fonte18 branco arial'>O valor da soma infinita é: $Si</p>";
}