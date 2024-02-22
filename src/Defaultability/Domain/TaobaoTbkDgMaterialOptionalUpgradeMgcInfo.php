<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialOptionalUpgradeMgcInfo {

    /**
        价格
     **/
    public $price;

    /**
        价格描述
     **/
    public $price_desc;

    /**
        文案
     **/
    public $promotion_summary;

    /**
        发布时间，13位毫秒时间戳
     **/
    public $publish_time;

    /**
        生效时间，实时线报为0，未来线报为13位毫秒时间戳
     **/
    public $valid_time;


    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getPriceDesc() : string{
        return $this->price_desc;
    }

    public function setPriceDesc(string $priceDesc){
        $this->price_desc = $priceDesc;
    }

    public function getPromotionSummary() : string{
        return $this->promotion_summary;
    }

    public function setPromotionSummary(string $promotionSummary){
        $this->promotion_summary = $promotionSummary;
    }

    public function getPublishTime() : string{
        return $this->publish_time;
    }

    public function setPublishTime(string $publishTime){
        $this->publish_time = $publishTime;
    }

    public function getValidTime() : string{
        return $this->valid_time;
    }

    public function setValidTime(string $validTime){
        $this->valid_time = $validTime;
    }


}

