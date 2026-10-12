<?php

if (getenv('GRAV_DIAGNOSTICS') !== '1') {
    return;
}

error_log('[grav-bootstrap] PHP diagnostic loaded');

set_exception_handler(static function (Throwable $exception): void {
    error_log(sprintf(
        '[grav-bootstrap] Uncaught %s: %s in %s:%d',
        $exception::class,
        $exception->getMessage(),
        $exception->getFile(),
        $exception->getLine()
    ));
});

register_shutdown_function(static function (): void {
    $error = error_get_last();
    if ($error === null || !($error['type'] & (E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR))) {
        return;
    }

    error_log(sprintf(
        '[grav-bootstrap] PHP fatal %d: %s in %s:%d',
        $error['type'],
        $error['message'],
        $error['file'],
        $error['line']
    ));
});
