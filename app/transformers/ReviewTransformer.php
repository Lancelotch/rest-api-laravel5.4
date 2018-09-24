<?php
  namespace App\transformers;
  use App\Model\Review;
  use League\Fractal\TransformerAbstract;

  /**
   *
   */
  class ReviewTransformer extends TransformerAbstract
  {
    function transform(Review $review)
    {
      return [
        "customer" => $review->customer,
        "review" => $review->review,
        "star" => $review->star
      ];
    }
  }


 ?>
