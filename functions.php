<?php

// echo param and die
function dd($data)
{
    echo '<pre>';
    var_dump($data);
    die();
    echo '</pre>';
};

// Check if age > 21
function allowEntry($age)
{
    if ($age > 21) {
        return true;
    } else {
        return false;
    }
}
