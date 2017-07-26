<?php

require __DIR__."/../vendor/autoload.php";

use Fizzday\FizzRoute\FizzRoute as Route;

echo 'test route';

Route::get(':any', function () {
    echo 'test route';
});