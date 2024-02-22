<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialOptionalUpgradePublishInfo {

    /**
        商品信息-收入比率(%)；商品佣金比率+补贴比率
     **/
    public $income_rate;

    /**
        前N件佣金信息-前N件佣金生效或预热时透出以下字段
     **/
    public $topn_info;

    /**
        链接-宝贝推广链接
     **/
    public $click_url;

    /**
        链接-宝贝+券二合一页面链接  	
     **/
    public $coupon_share_url;

    /**
        预热活动到手价对应的佣金比率
     **/
    public $future_activity_commission_rate;

    /**
        预热价活动开始时间
     **/
    public $future_activity_time;

    /**
        定向计划集合-仅支持联系商务或运营小二申请定向计划合集字段权限
     **/
    public $sp_campaign_list;

    /**
        榜单url
     **/
    public $rank_page_url;

    /**
        推广信息-商品信息-佣金类型。MKT表示营销计划，SP表示定向计划，COMMON表示通用计划，ZX表示自选计划
     **/
    public $commission_type;

    /**
        商品佣金信息
     **/
    public $income_info;

    /**
        额外奖励活动类型，如果一个商品有多个奖励类型，返回结果使用空格分割，0=预售单单奖励，1=618超级U选单单补
     **/
    public $cpa_reward_type;

    /**
        额外奖励活动金额，活动奖励金额的类型与cpa_reward_type字段对应，如果一个商品有多个奖励类型，返回结果使用空格分割
     **/
    public $cpa_reward_amount;


    public function getIncomeRate() : string{
        return $this->income_rate;
    }

    public function setIncomeRate(string $incomeRate){
        $this->income_rate = $incomeRate;
    }

    public function getTopnInfo() : TaobaoTbkDgMaterialOptionalUpgradeTopNInfoDTO{
        return $this->topn_info;
    }

    public function setTopnInfo(TaobaoTbkDgMaterialOptionalUpgradeTopNInfoDTO $topnInfo){
        $this->topn_info = $topnInfo;
    }

    public function getClickUrl() : string{
        return $this->click_url;
    }

    public function setClickUrl(string $clickUrl){
        $this->click_url = $clickUrl;
    }

    public function getCouponShareUrl() : string{
        return $this->coupon_share_url;
    }

    public function setCouponShareUrl(string $couponShareUrl){
        $this->coupon_share_url = $couponShareUrl;
    }

    public function getFutureActivityCommissionRate() : string{
        return $this->future_activity_commission_rate;
    }

    public function setFutureActivityCommissionRate(string $futureActivityCommissionRate){
        $this->future_activity_commission_rate = $futureActivityCommissionRate;
    }

    public function getFutureActivityTime() : string{
        return $this->future_activity_time;
    }

    public function setFutureActivityTime(string $futureActivityTime){
        $this->future_activity_time = $futureActivityTime;
    }

    public function getSpCampaignList() : array{
        return $this->sp_campaign_list;
    }

    public function setSpCampaignList(array $spCampaignList){
        $this->sp_campaign_list = $spCampaignList;
    }

    public function getRankPageUrl() : string{
        return $this->rank_page_url;
    }

    public function setRankPageUrl(string $rankPageUrl){
        $this->rank_page_url = $rankPageUrl;
    }

    public function getCommissionType() : string{
        return $this->commission_type;
    }

    public function setCommissionType(string $commissionType){
        $this->commission_type = $commissionType;
    }

    public function getIncomeInfo() : TaobaoTbkDgMaterialOptionalUpgradeFinalIncomeInfo{
        return $this->income_info;
    }

    public function setIncomeInfo(TaobaoTbkDgMaterialOptionalUpgradeFinalIncomeInfo $incomeInfo){
        $this->income_info = $incomeInfo;
    }

    public function getCpaRewardType() : string{
        return $this->cpa_reward_type;
    }

    public function setCpaRewardType(string $cpaRewardType){
        $this->cpa_reward_type = $cpaRewardType;
    }

    public function getCpaRewardAmount() : string{
        return $this->cpa_reward_amount;
    }

    public function setCpaRewardAmount(string $cpaRewardAmount){
        $this->cpa_reward_amount = $cpaRewardAmount;
    }


}

