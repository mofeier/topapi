<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialOptionalUpgradeSpCampaign {

    /**
        定向计划活动ID
     **/
    public $sp_cid;

    /**
        定向计划名称
     **/
    public $sp_name;

    /**
        定向佣金率
     **/
    public $sp_rate;

    /**
        定向是否锁佣，0=不锁佣 1=锁佣
     **/
    public $sp_lock_status;

    /**
        定向计划申请链接
     **/
    public $sp_apply_link;

    /**
        定向计划是否可用 1-可用 0-不可用
     **/
    public $sp_status;


    public function getSpCid() : string{
        return $this->sp_cid;
    }

    public function setSpCid(string $spCid){
        $this->sp_cid = $spCid;
    }

    public function getSpName() : string{
        return $this->sp_name;
    }

    public function setSpName(string $spName){
        $this->sp_name = $spName;
    }

    public function getSpRate() : string{
        return $this->sp_rate;
    }

    public function setSpRate(string $spRate){
        $this->sp_rate = $spRate;
    }

    public function getSpLockStatus() : string{
        return $this->sp_lock_status;
    }

    public function setSpLockStatus(string $spLockStatus){
        $this->sp_lock_status = $spLockStatus;
    }

    public function getSpApplyLink() : string{
        return $this->sp_apply_link;
    }

    public function setSpApplyLink(string $spApplyLink){
        $this->sp_apply_link = $spApplyLink;
    }

    public function getSpStatus() : string{
        return $this->sp_status;
    }

    public function setSpStatus(string $spStatus){
        $this->sp_status = $spStatus;
    }


}

