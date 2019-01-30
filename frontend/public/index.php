<?php

require '/app/vendor/autoload.php';

$kirby = new Kirby([
    'roots' => [
        'index' => '/app/public',
        'site' => '/app/site',
        'kirby' => '/app/vendor/getkirby/kirby',
        'content' => '/app/storage/content',
        'accounts' => '/app/storage/accounts',
        'cache' => '/app/storage/cache',
        'sessions' => '/app/storage/sessions',
        'languages' => '/app/storage/languages'
    ]
]);

echo $kirby->render();
