<?php

namespace App\Utils\Views;

use IntlBreakIterator;

class Views
{
    public static $resources = __DIR__ . '../../../../resources/';

    public static function view($view, $data = null)
    {
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

        if (file_exists(self::$resources . 'views/' . $view . '.php')) {
            include_once(self::$resources . 'views/' . $view . '.php');
        } else {
            echo 'This VIEW doens\'t exists!';
        }
    }
}
