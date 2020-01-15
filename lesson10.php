<?php

require 'functions.php';

$animals = ['dog', 'cat'];

// dd($animals);

for ($i = 0; $i < 10; $i++) {
    $age = rand(1, 100);
    echo $age . " is... ";

    if (allowEntry($age)) {
        echo '>21';
    } else {
        echo '<=21';
    }
    echo "<br>";
}
