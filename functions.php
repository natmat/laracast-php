<?php

// echo param and die
function dd($data)
{
    echo '<pre>';
    var_dump($data);
    die();
    echo '</pre>';
};
