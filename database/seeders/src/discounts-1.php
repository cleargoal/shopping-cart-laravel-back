<?php
$keywords = [
    'anyCategory' => ['products in the same category', ['categories' => [0]]],
    'differentCats' => ['products in different categories - not in one', ['categories' => [-1]]],
    'categories' => 'array category IDs, products in these categories',
    'items' => 'minimal items quantity',
    'quantity' => 'minimal products quantity in item',
    'exactly' => 'exactly what products have to be included or excluded - IDs; allowed to be empty',
];

$req_1 = [
    'requirements' => [
        [
            'target' => ['categories' => [-1]],
            'items' => 2,
        ],
    ],
    'include' => [

    ],
    'exclude' => [
        [
            'categories' => [4,],
            'exactly' => [76, 82,],
        ],
    ],
    'value' => ['type' => 'perc', 'amount' => 5],
];

$req_2 = [
    'requirements' => [
        [
            'target' => ['categories' => [3,]],
            'items' => 1,
        ],
    ],
    'include' => [
        [
            'target' => ['categories' => [1,]],
            'items' => 3,
        ],
    ],
    'exclude' => [
        [
            'categories' => [4,],
            'exactly' => [76, 82],
        ],
    ],
    'value' => ['type' => 'perc', 'amount' => 20],
];
