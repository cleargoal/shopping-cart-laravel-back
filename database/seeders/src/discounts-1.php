<?php
$keywords = [
    'anyCategory' => ['products in any categories even in the same category', ['categories' => [0]]],
    'differentCats' => ['products in different categories - not in one', ['categories' => [-1]]],
    'categories' => ['array category IDs, products in these categories', ['categories' => [1, 5, 9,]]],
    'products' => 'minimal products quantity in cart',
    'quantity' => 'minimal quantity items of product',
    'exactly' => 'exactly what products have to be included or excluded - IDs; allowed to be empty',
    'value' => [
        'type' => ['perc' => 'percents', 'abs' => 'absolut amount', 'attention' => 'one of two'],
        'amount' => ['amount any from percents or absolut']
    ],
];

$req_1 = [
    'requirements' => [
        [
            'target' => ['categories' => [-1]],
            'products' => 2,
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
            'products' => 1,
        ],
    ],
    'include' => [
        [
            'target' => ['categories' => [1,]],
            'products' => 3,
        ],
    ],
    'exclude' => [
        [
        ],
    ],
    'value' => ['type' => 'perc', 'amount' => 20],
];
