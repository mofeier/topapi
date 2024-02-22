<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialRecommendTopNInfoDTO {

    /**
        前N件剩余库存
     **/
    public $topn_quantity;

    /**
        前N件初始总库存
     **/
    public $topn_total_count;

    /**
        前N件佣金开始时间
     **/
    public $topn_start_time;

    /**
        前N件佣金结束时间
     **/
    public $topn_end_time;

    /**
        前N件佣金率
     **/
    public $topn_rate;


    public function getTopnQuantity() : int{
        return $this->topn_quantity;
    }

    public function setTopnQuantity(int $topnQuantity){
        $this->topn_quantity = $topnQuantity;
    }

    public function getTopnTotalCount() : int{
        return $this->topn_total_count;
    }

    public function setTopnTotalCount(int $topnTotalCount){
        $this->topn_total_count = $topnTotalCount;
    }

    public function getTopnStartTime() : string{
        return $this->topn_start_time;
    }

    public function setTopnStartTime(string $topnStartTime){
        $this->topn_start_time = $topnStartTime;
    }

    public function getTopnEndTime() : string{
        return $this->topn_end_time;
    }

    public function setTopnEndTime(string $topnEndTime){
        $this->topn_end_time = $topnEndTime;
    }

    public function getTopnRate() : string{
        return $this->topn_rate;
    }

    public function setTopnRate(string $topnRate){
        $this->topn_rate = $topnRate;
    }


}

