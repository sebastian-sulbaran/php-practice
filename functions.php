<?php

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function checkEntryAge($age)
{
    $allowed_age = 21;
    return ($age >= $allowed_age);
}