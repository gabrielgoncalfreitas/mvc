<?php

function view($view, $data = null)
{
    $resources = str_replace('app\Utils', '', __DIR__) . 'resources/';

    if (!is_null($data)) {
        switch (gettype($data)) {
            case 'array':
                extract($data);
                break;
            default:
                echo 'View PARAMS must be ARRAY';
                return;
                break;
        }
    }

    if (file_exists($resources . 'views/' . $view . '.php')) {
        include_once($resources . 'views/' . $view . '.php');
    } else {
        echo '<pre>';
        echo 'The VIEW "' . $view . '" doens\'t exists!' . "\n";
        echo 'Path: ' . $resources . 'views/' . $view . '.php';
    }
}

function route($route)
{
    echo $_ENV['APP_URL'] . "{$route}";
}
