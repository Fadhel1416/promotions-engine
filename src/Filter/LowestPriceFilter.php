<?php

namespace App\Filter;

use App\DTO\EntryPromotionDto;
use App\DTO\PromotionInterface;

class lowestPriceFilter implements PromotionsFilterInterface{


    public function apply(EntryPromotionDto $enquiry):EntryPromotionDto
    {

        $enquiry->setPrice(500);
        $enquiry->setDiscountedPrice(100);
        $enquiry->setPromotionId(3);
        $enquiry->setPromotionName('black friday half price sale');

        return $enquiry;
    }
}