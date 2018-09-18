<?php

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

// Helper functions
function view($name, $data = []) {
    // suppose $data = ['name' => 'joe', 'age' = 25]

    extract($data);

    // the view will have access to 
    // $name = 'joe';
    // $age = 25;

    return require "app/views/{$name}.view.php";
}

function redirect($path) {
    header("Location: /{$path}");
}