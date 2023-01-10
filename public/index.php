<?php

require '../vendor/autoload.php';

require '../app/Utils/Handle.php';

try {
    require '../config.php';
    require '../app/Utils/Utils.php';
    require '../app/Utils/Debug.php';
    require '../routes/Web.php';

} catch (Throwable $e) {
    handle($e);
}