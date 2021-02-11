<?php

return [
    \patterns\DI\Car::class => [
        \patterns\DI\Engine::class,
    ],
    \patterns\DI\Engine::class => [
        \patterns\DI\Power::class,
    ],
    \patterns\DI\Power::class => []
];