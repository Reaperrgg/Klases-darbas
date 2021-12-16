<?php
const KM2MYLES = 0.621371;

function km2myles(int|float $ka): float{
    return $ka * KM2MYLES;
}
function myles2km(int|float $ka): float{
    return  $ka / KM2MYLES;

}
const KG2SVARAI = 0.621371;

function kg2svarai(int|float $ka): float{
    return $ka * KM2SVARAI;
}
function svarai2km(int|float $ka): float{
    return  $ka / KM2SVARAI;

}