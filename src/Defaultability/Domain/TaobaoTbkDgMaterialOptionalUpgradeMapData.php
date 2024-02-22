<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialOptionalUpgradeMapData {

    /**
        商品信息-淘宝客新商品id；使用说明参考《淘宝客新商品ID升级》白皮书：https://www.yuque.com/taobaolianmengguanfangxiaoer/zmig94/tfyt0pahmlpzu2ud
     **/
    public $item_id;

    /**
        淘客推广信息
     **/
    public $publish_info;

    /**
        价格促销信息
     **/
    public $price_promotion_info;

    /**
        商品基础信息
     **/
    public $item_basic_info;

    /**
        天猫榜单信息
     **/
    public $tmall_rank_info;

    /**
        预售信息
     **/
    public $presale_info;

    /**
        商品库范围信息
     **/
    public $scope_info;

    /**
        线报内容
     **/
    public $mgc_info;

    /**
        物料评估-匹配分
     **/
    public $match_score;

    /**
        物料评估-收益分
     **/
    public $commi_score;


    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getPublishInfo() : TaobaoTbkDgMaterialOptionalUpgradePublishInfo{
        return $this->publish_info;
    }

    public function setPublishInfo(TaobaoTbkDgMaterialOptionalUpgradePublishInfo $publishInfo){
        $this->publish_info = $publishInfo;
    }

    public function getPricePromotionInfo() : TaobaoTbkDgMaterialOptionalUpgradePromotionInfoMapData{
        return $this->price_promotion_info;
    }

    public function setPricePromotionInfo(TaobaoTbkDgMaterialOptionalUpgradePromotionInfoMapData $pricePromotionInfo){
        $this->price_promotion_info = $pricePromotionInfo;
    }

    public function getItemBasicInfo() : TaobaoTbkDgMaterialOptionalUpgradeBasicMapData{
        return $this->item_basic_info;
    }

    public function setItemBasicInfo(TaobaoTbkDgMaterialOptionalUpgradeBasicMapData $itemBasicInfo){
        $this->item_basic_info = $itemBasicInfo;
    }

    public function getTmallRankInfo() : TaobaoTbkDgMaterialOptionalUpgradeTmallRankInfo{
        return $this->tmall_rank_info;
    }

    public function setTmallRankInfo(TaobaoTbkDgMaterialOptionalUpgradeTmallRankInfo $tmallRankInfo){
        $this->tmall_rank_info = $tmallRankInfo;
    }

    public function getPresaleInfo() : TaobaoTbkDgMaterialOptionalUpgradePresaleInfo{
        return $this->presale_info;
    }

    public function setPresaleInfo(TaobaoTbkDgMaterialOptionalUpgradePresaleInfo $presaleInfo){
        $this->presale_info = $presaleInfo;
    }

    public function getScopeInfo() : TaobaoTbkDgMaterialOptionalUpgradeScopeInfo{
        return $this->scope_info;
    }

    public function setScopeInfo(TaobaoTbkDgMaterialOptionalUpgradeScopeInfo $scopeInfo){
        $this->scope_info = $scopeInfo;
    }

    public function getMgcInfo() : TaobaoTbkDgMaterialOptionalUpgradeMgcInfo{
        return $this->mgc_info;
    }

    public function setMgcInfo(TaobaoTbkDgMaterialOptionalUpgradeMgcInfo $mgcInfo){
        $this->mgc_info = $mgcInfo;
    }

    public function getMatchScore() : string{
        return $this->match_score;
    }

    public function setMatchScore(string $matchScore){
        $this->match_score = $matchScore;
    }

    public function getCommiScore() : string{
        return $this->commi_score;
    }

    public function setCommiScore(string $commiScore){
        $this->commi_score = $commiScore;
    }


}

