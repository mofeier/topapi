<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialRecommendPresaleInfo {

    /**
        预售商品-付定金开始时间（毫秒）
     **/
    public $presale_start_time;

    /**
        预售商品-付定金结束时间（毫秒）
     **/
    public $presale_end_time;

    /**
        预售商品-付尾款开始时间（毫秒）
     **/
    public $presale_tail_start_time;

    /**
        预售商品-付尾款结束时间（毫秒）
     **/
    public $presale_tail_end_time;

    /**
        预售商品-定金（元）
     **/
    public $presale_deposit;

    /**
        预售商品-优惠信息
     **/
    public $presale_discount_fee_text;


    public function getPresaleStartTime() : int{
        return $this->presale_start_time;
    }

    public function setPresaleStartTime(int $presaleStartTime){
        $this->presale_start_time = $presaleStartTime;
    }

    public function getPresaleEndTime() : int{
        return $this->presale_end_time;
    }

    public function setPresaleEndTime(int $presaleEndTime){
        $this->presale_end_time = $presaleEndTime;
    }

    public function getPresaleTailStartTime() : int{
        return $this->presale_tail_start_time;
    }

    public function setPresaleTailStartTime(int $presaleTailStartTime){
        $this->presale_tail_start_time = $presaleTailStartTime;
    }

    public function getPresaleTailEndTime() : int{
        return $this->presale_tail_end_time;
    }

    public function setPresaleTailEndTime(int $presaleTailEndTime){
        $this->presale_tail_end_time = $presaleTailEndTime;
    }

    public function getPresaleDeposit() : string{
        return $this->presale_deposit;
    }

    public function setPresaleDeposit(string $presaleDeposit){
        $this->presale_deposit = $presaleDeposit;
    }

    public function getPresaleDiscountFeeText() : string{
        return $this->presale_discount_fee_text;
    }

    public function setPresaleDiscountFeeText(string $presaleDiscountFeeText){
        $this->presale_discount_fee_text = $presaleDiscountFeeText;
    }


}

