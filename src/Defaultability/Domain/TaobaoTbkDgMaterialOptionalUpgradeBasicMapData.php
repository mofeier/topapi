<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialOptionalUpgradeBasicMapData {

    /**
        商品信息-商品标题
     **/
    public $title;

    /**
        商品信息-商品短标题
     **/
    public $short_title;

    /**
        商品信息-商品主图
     **/
    public $pict_url;

    /**
        商品信息-商品白底图
     **/
    public $white_image;

    /**
        商品信息-一级类目ID
     **/
    public $level_one_category_id;

    /**
        商品信息-叶子类目id
     **/
    public $category_id;

    /**
        商品信息-叶子类目名称
     **/
    public $category_name;

    /**
        店铺信息-卖家id
     **/
    public $seller_id;

    /**
        店铺信息-卖家类型，0表示淘宝，1表示天猫，3表示特价版
     **/
    public $user_type;

    /**
        店铺信息-店铺名称
     **/
    public $shop_title;

    /**
        商品信息-30天销量；数据统计截止昨日非实时更新
     **/
    public $volume;

    /**
        商品信息-商品子标题
     **/
    public $sub_title;

    /**
        商品信息-品牌名称
     **/
    public $brand_name;

    /**
        商品信息-一级类目名称
     **/
    public $level_one_category_name;

    /**
        商品信息-淘客30天推广量
     **/
    public $tk_total_sales;

    /**
        商品信息-宝贝所在地
     **/
    public $provcity;

    /**
        商品信息-商品小图列表
     **/
    public $small_images;


    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getShortTitle() : string{
        return $this->short_title;
    }

    public function setShortTitle(string $shortTitle){
        $this->short_title = $shortTitle;
    }

    public function getPictUrl() : string{
        return $this->pict_url;
    }

    public function setPictUrl(string $pictUrl){
        $this->pict_url = $pictUrl;
    }

    public function getWhiteImage() : string{
        return $this->white_image;
    }

    public function setWhiteImage(string $whiteImage){
        $this->white_image = $whiteImage;
    }

    public function getLevelOneCategoryId() : int{
        return $this->level_one_category_id;
    }

    public function setLevelOneCategoryId(int $levelOneCategoryId){
        $this->level_one_category_id = $levelOneCategoryId;
    }

    public function getCategoryId() : int{
        return $this->category_id;
    }

    public function setCategoryId(int $categoryId){
        $this->category_id = $categoryId;
    }

    public function getCategoryName() : string{
        return $this->category_name;
    }

    public function setCategoryName(string $categoryName){
        $this->category_name = $categoryName;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getUserType() : int{
        return $this->user_type;
    }

    public function setUserType(int $userType){
        $this->user_type = $userType;
    }

    public function getShopTitle() : string{
        return $this->shop_title;
    }

    public function setShopTitle(string $shopTitle){
        $this->shop_title = $shopTitle;
    }

    public function getVolume() : int{
        return $this->volume;
    }

    public function setVolume(int $volume){
        $this->volume = $volume;
    }

    public function getSubTitle() : string{
        return $this->sub_title;
    }

    public function setSubTitle(string $subTitle){
        $this->sub_title = $subTitle;
    }

    public function getBrandName() : string{
        return $this->brand_name;
    }

    public function setBrandName(string $brandName){
        $this->brand_name = $brandName;
    }

    public function getLevelOneCategoryName() : string{
        return $this->level_one_category_name;
    }

    public function setLevelOneCategoryName(string $levelOneCategoryName){
        $this->level_one_category_name = $levelOneCategoryName;
    }

    public function getTkTotalSales() : string{
        return $this->tk_total_sales;
    }

    public function setTkTotalSales(string $tkTotalSales){
        $this->tk_total_sales = $tkTotalSales;
    }

    public function getProvcity() : string{
        return $this->provcity;
    }

    public function setProvcity(string $provcity){
        $this->provcity = $provcity;
    }

    public function getSmallImages() : array{
        return $this->small_images;
    }

    public function setSmallImages(array $smallImages){
        $this->small_images = $smallImages;
    }


}

