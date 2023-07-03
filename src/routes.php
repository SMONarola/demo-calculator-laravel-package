<?php
Route::get('calculator', function() {
    echo 'Hello from the calculator package!';
});

Route::get('calculator/add/{a}/{b}', 'Smo\Calculator\CalculatorController@add');
Route::get('calculator/subtract/{a}/{b}', 'Smo\Calculator\CalculatorController@subtract');