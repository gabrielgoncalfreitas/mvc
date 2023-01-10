<?php

function handle(Throwable $e)
{
    $message = $e->getMessage();
    $traces  = $e->getTrace();

    return view('errors/log', [
        'message' => $message,
        'traces'   => $traces
    ]);
}
