# Discount 
## parameters explanation
### type - array
### parameters:
#### 
```
[
  'requirements'
  [
    'target' => ['categories' => [-1]], 
    'products' => 2, // amount of products in cart, allowing to give discount to this order;
  ],
  'include' => [] - array,
  'exclude' => [
      [
          'categories' => [4,],
          'exactly' => [76, 82,],
      ],
  ],
  'value' => [
    'type' => ['perc' => 'percents', 'abs' => 'absolut amount',], // attention! - one of two allowed 
    'amount' - amount any of percents or absolut, 
    /* example: 'amount' = 5; if type = 'perc' - discount is 5% off cart total; 
     if type = 'abs' = discount is $5 (or your shop currency) off cart total */
  ],
]
```
