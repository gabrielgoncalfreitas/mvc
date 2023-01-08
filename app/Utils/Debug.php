<?php

function dd($data)
{
    echo '<pre>';

    if (is_array($data)) {
        print_r($data);
    } else if (gettype($data) == 'object') {
        print_r($data);
    } else {
        echo $data;
    }

    return;
}
