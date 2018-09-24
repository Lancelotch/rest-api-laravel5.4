<?php
  namespace App\transformers;
  use App\Model\Product;
  use League\Fractal\TransformerAbstract;

  /**
   *
   */
  class ProductTransformer extends TransformerAbstract
  {
    function transform(Product $product)
    {
      return [
        "name" => $product->name,
        "description" => $product->detail,
        "price" => $product->price
      ];
    }
  }


 ?>
