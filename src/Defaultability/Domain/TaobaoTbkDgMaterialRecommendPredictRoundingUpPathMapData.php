<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialRecommendPredictRoundingUpPathMapData {

    /**
        优惠名称，如“商品券”、“跨店满减”、“单品直降”等
     **/
    public $promotion_title;

    /**
        优惠利益点文案，如“2件5折”、“每200减20”等
     **/
    public $promotion_desc;


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


}

