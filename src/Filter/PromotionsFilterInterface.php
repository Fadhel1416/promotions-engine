<?php

namespace App\Filter;

use App\DTO\EntryPromotionDto;
use App\DTO\PromotionInterface;

interface PromotionsFilterInterface

{
    public function apply(EntryPromotionDto $enquiry):EntryPromotionDto;
   
}