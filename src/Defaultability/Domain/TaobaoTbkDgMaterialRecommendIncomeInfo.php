<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialRecommendIncomeInfo {

    /**
        商品佣金比率
     **/
    public $commission_rate;

    /**
        商品佣金金额
     **/
    public $commission_amount;

    /**
        补贴比率
     **/
    public $subsidy_rate;

    /**
        补贴金额
     **/
    public $subsidy_amount;

    /**
        补贴上限；仅在单笔订单命中补贴上限时返回结果否则出参为空
     **/
    public $subsidy_upper_limit;


    public function getCommissionRate() : string{
        return $this->commission_rate;
    }

    public function setCommissionRate(string $commissionRate){
        $this->commission_rate = $commissionRate;
    }

    public function getCommissionAmount() : string{
        return $this->commission_amount;
    }

    public function setCommissionAmount(string $commissionAmount){
        $this->commission_amount = $commissionAmount;
    }

    public function getSubsidyRate() : string{
        return $this->subsidy_rate;
    }

    public function setSubsidyRate(string $subsidyRate){
        $this->subsidy_rate = $subsidyRate;
    }

    public function getSubsidyAmount() : string{
        return $this->subsidy_amount;
    }

    public function setSubsidyAmount(string $subsidyAmount){
        $this->subsidy_amount = $subsidyAmount;
    }

    public function getSubsidyUpperLimit() : string{
        return $this->subsidy_upper_limit;
    }

    public function setSubsidyUpperLimit(string $subsidyUpperLimit){
        $this->subsidy_upper_limit = $subsidyUpperLimit;
    }


}

