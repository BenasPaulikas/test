<?php
return [
    'manager' => [
        'type' => 1,
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'manager',
        ],
    ],
];
