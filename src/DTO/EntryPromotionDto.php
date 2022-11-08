<?php

namespace App\DTO;


 class EntryPromotionDto implements PromotionInterface{
 

    private  $quantity;
    private  $requestLocation;
    private  $voucherCode;
    private  $productId;
    private  $price;
    private  $discountedPrice;
    private  $promotionId;
    private  $promotionName;

	public function getQuantity(){
		return $this->quantity;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}

	public function getRequestLocation() {
		return $this->requestLocation;
	}

	public function setRequestLocation( $request_location) {
		$this->requestLocation = $request_location;
	}

	public function getVoucherCode() {
		return $this->voucherCode;
	}

	public function setVoucherCode( $voucher_code) {
		$this->voucherCode = $voucher_code;
	}

	public function getProductId() {
		return $this->productId;
	}

	public function setProductId( $product_id) {
		$this->productId = $product_id;
	}

	public function getPrice() {
		return $this->price;
	}

	public function setPrice( $price) {
		$this->price = $price;
	}

	public function  getDiscountedPrice() {
		return $this->discountedPrice;
	}

	public function setDiscountedPrice( $discounted_price) {
		$this->discountedPrice = $discounted_price;
	}

	public function getPromotionId() {
		return $this->promotionId;
	}

	public function setPromotionId($promotion_id) {
		$this->promotionId = $promotion_id;
	}

	public function getPromotionName() {
		return $this->promotionName;
	}

	public function setPromotionName($promotion_name) {
		$this->promotionName = $promotion_name;
	}


    
public function jsonSerialize(){
	return get_object_vars($this);
}












}