<?php
function getTriangleArea(float $base, float $height): float
{
    return $base * $height / 2;
}

function getDiamondArea(float $diagonal1, float $diagonal2): float
{
    return $diagonal1 * $diagonal2 / 2;
}
