<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialOptionalUpgradeFinalPromotionPathMapData {

    /**
        优惠名称，如“商品券”、“跨店满减”、“单品直降”等  	
     **/
    public $promotion_title;

    /**
        优惠利益点文案，如“1件7.92折”、“每200减20”等
     **/
    public $promotion_desc;

    /**
        实际优惠金额（元）
     **/
    public $promotion_fee;

    /**
        优惠开始时间
     **/
    public $promotion_start_time;

    /**
        优惠结束时间
     **/
    public $promotion_end_time;

    /**
        优惠ID
     **/
    public $promotion_id;


    public function getPromotionTitle() : string{
        return $this->promotion_title;
    }

    public function setPromotionTitle(string $promotionTitle){
        $this->promotion_title = $promotionTitle;
    }

    public function getPromotionDesc() : string{
        return $this->promotion_desc;
    }

    public function setPromotionDesc(string $promotionDesc){
        $this->promotion_desc = $promotionDesc;
    }

    public function getPromotionFee() : string{
        return $this->promotion_fee;
    }

    public function setPromotionFee(string $promotionFee){
        $this->promotion_fee = $promotionFee;
    }

    public function getPromotionStartTime() : string{
        return $this->promotion_start_time;
    }

    public function setPromotionStartTime(string $promotionStartTime){
        $this->promotion_start_time = $promotionStartTime;
    }

    public function getPromotionEndTime() : string{
        return $this->promotion_end_time;
    }

    public function setPromotionEndTime(string $promotionEndTime){
        $this->promotion_end_time = $promotionEndTime;
    }

    public function getPromotionId() : string{
        return $this->promotion_id;
    }

    public function setPromotionId(string $promotionId){
        $this->promotion_id = $promotionId;
    }


}

