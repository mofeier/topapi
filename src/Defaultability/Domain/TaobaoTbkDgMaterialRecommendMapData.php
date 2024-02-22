<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialRecommendMapData {

    /**
        商品信息-淘宝客新商品id；使用说明参考《淘宝客新商品ID升级》白皮书：https://www.yuque.com/taobaolianmengguanfangxiaoer/zmig94/tfyt0pahmlpzu2ud
     **/
    public $item_id;

    /**
        商品基础信息
     **/
    public $item_basic_info;

    /**
        价格促销信息
     **/
    public $price_promotion_info;

    /**
        淘客推广信息
     **/
    public $publish_info;

    /**
        天猫榜单信息
     **/
    public $tmall_rank_info;

    /**
        预售信息
     **/
    public $presale_info;

    /**
        选品库信息
     **/
    public $favorites_info;

    /**
        前N件佣金信息-前N件佣金生效或预热时透出以下字段
     **/
    public $topn_info;

    /**
        商品库范围信息
     **/
    public $scope_info;


    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getItemBasicInfo() : TaobaoTbkDgMaterialRecommendBasicMapData{
        return $this->item_basic_info;
    }

    public function setItemBasicInfo(TaobaoTbkDgMaterialRecommendBasicMapData $itemBasicInfo){
        $this->item_basic_info = $itemBasicInfo;
    }

    public function getPricePromotionInfo() : TaobaoTbkDgMaterialRecommendPromotionInfoMapData{
        return $this->price_promotion_info;
    }

    public function setPricePromotionInfo(TaobaoTbkDgMaterialRecommendPromotionInfoMapData $pricePromotionInfo){
        $this->price_promotion_info = $pricePromotionInfo;
    }

    public function getPublishInfo() : TaobaoTbkDgMaterialRecommendPublishInfo{
        return $this->publish_info;
    }

    public function setPublishInfo(TaobaoTbkDgMaterialRecommendPublishInfo $publishInfo){
        $this->publish_info = $publishInfo;
    }

    public function getTmallRankInfo() : TaobaoTbkDgMaterialRecommendTmallRankInfo{
        return $this->tmall_rank_info;
    }

    public function setTmallRankInfo(TaobaoTbkDgMaterialRecommendTmallRankInfo $tmallRankInfo){
        $this->tmall_rank_info = $tmallRankInfo;
    }

    public function getPresaleInfo() : TaobaoTbkDgMaterialRecommendPresaleInfo{
        return $this->presale_info;
    }

    public function setPresaleInfo(TaobaoTbkDgMaterialRecommendPresaleInfo $presaleInfo){
        $this->presale_info = $presaleInfo;
    }

    public function getFavoritesInfo() : TaobaoTbkDgMaterialRecommendFavoritesInfo{
        return $this->favorites_info;
    }

    public function setFavoritesInfo(TaobaoTbkDgMaterialRecommendFavoritesInfo $favoritesInfo){
        $this->favorites_info = $favoritesInfo;
    }

    public function getTopnInfo() : TaobaoTbkDgMaterialRecommendTopNInfoDTO{
        return $this->topn_info;
    }

    public function setTopnInfo(TaobaoTbkDgMaterialRecommendTopNInfoDTO $topnInfo){
        $this->topn_info = $topnInfo;
    }

    public function getScopeInfo() : TaobaoTbkDgMaterialRecommendScopeInfo{
        return $this->scope_info;
    }

    public function setScopeInfo(TaobaoTbkDgMaterialRecommendScopeInfo $scopeInfo){
        $this->scope_info = $scopeInfo;
    }


}

