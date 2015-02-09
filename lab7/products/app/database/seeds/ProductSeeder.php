<?php

class ProductSeeder extends Seeder
{
  public function run()
  {
    $product = new Product;
    $product->name = 'Ginger Beer';
    $product->price = 4.55;
    $product->save();
    
    $product = new Product;
    $product->name = 'Coca-cola';
    $product->price = 2.99;
    $product->save();
  }
}