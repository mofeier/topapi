<?php
namespace mofeier\Topapi\Defaultability\Request;
use mofeier\Topapi\TopUtil;

class TaobaoTbkDgMaterialRecommendRequest {

    /**
        页大小，默认20，1~100
     **/
    private $pageSize;

    /**
        第几页，默认：1
     **/
    private $pageNo;

    /**
        官方提供的物料Id；可以通过taobao.tbk.optimus.tou.material.ids.get接口获取公开的物料id列表或查看物料id汇总贴：https://market.m.taobao.com/app/qn/toutiao-new/index-pc.html#/detail/10628875?_k=gpov9a
     **/
    private $materialId;

    /**
        推广位id，mm_xxx_xxx_12345678三段式的最后一段数字（登录pub.alimama.com推广管理-推广位管理中查询）
     **/
    private $adzoneId;

    /**
        渠道关系ID，仅适用于渠道推广场景
     **/
    private $relationId;

    /**
        智能匹配-设备号类型：IMEI，或者IDFA，或者UTDID（UTDID不支持MD5加密），或者OAID；使用智能推荐请先签署协议https://pub.alimama.com/fourth/protocol/common.htm?key=hangye_laxin
     **/
    private $deviceType;

    /**
        智能匹配-设备号加密类型：MD5；使用智能推荐请先签署协议https://pub.alimama.com/fourth/protocol/common.htm?key=hangye_laxin
     **/
    private $deviceEncrypt;

    /**
        智能匹配-设备号加密后的值（MD5加密需32位小写）；使用智能推荐请先签署协议https://pub.alimama.com/fourth/protocol/common.htm?key=hangye_laxin
     **/
    private $deviceValue;

    /**
        1-自购省，2-推广赚（代理模式专属ID，代理模式必填，非代理模式不用填写该字段）
     **/
    private $promotionType;

    /**
        会员运营ID
     **/
    private $specialId;

    /**
        淘宝客新商品ID；用于相似商品推荐（注意：使用相似商品推荐material_id=13256必传，并请先签署协议https://pub.alimama.com/fourth/protocol/common.htm?key=hangye_laxin)；另关于《淘宝客新商品ID升级》参考白皮书：https://www.yuque.com/taobaolianmengguanfangxiaoer/zmig94/tfyt0pahmlpzu2ud
     **/
    private $itemId;

    /**
        选品库收藏夹id，获取收藏夹id参考文档：https://mos.m.taobao.com/union/page_20230109_175050_176?spm=a219t._portal_v2_pages_promo_goods_index_htm.0.0.7c2a75a5H2ER3N
     **/
    private $favoritesId;


    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getMaterialId() : int{
        return $this->materialId;
    }

    public function setMaterialId(int $materialId){
        $this->materialId = $materialId;
    }

    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getRelationId() : int{
        return $this->relationId;
    }

    public function setRelationId(int $relationId){
        $this->relationId = $relationId;
    }

    public function getDeviceType() : string{
        return $this->deviceType;
    }

    public function setDeviceType(string $deviceType){
        $this->deviceType = $deviceType;
    }

    public function getDeviceEncrypt() : string{
        return $this->deviceEncrypt;
    }

    public function setDeviceEncrypt(string $deviceEncrypt){
        $this->deviceEncrypt = $deviceEncrypt;
    }

    public function getDeviceValue() : string{
        return $this->deviceValue;
    }

    public function setDeviceValue(string $deviceValue){
        $this->deviceValue = $deviceValue;
    }

    public function getPromotionType() : string{
        return $this->promotionType;
    }

    public function setPromotionType(string $promotionType){
        $this->promotionType = $promotionType;
    }

    public function getSpecialId() : string{
        return $this->specialId;
    }

    public function setSpecialId(string $specialId){
        $this->specialId = $specialId;
    }

    public function getItemId() : string{
        return $this->itemId;
    }

    public function setItemId(string $itemId){
        $this->itemId = $itemId;
    }

    public function getFavoritesId() : string{
        return $this->favoritesId;
    }

    public function setFavoritesId(string $favoritesId){
        $this->favoritesId = $favoritesId;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.material.recommend";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->materialId)) {
            $requestParam["material_id"] = TopUtil::convertBasic($this->materialId);
        }

        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->deviceType)) {
            $requestParam["device_type"] = TopUtil::convertBasic($this->deviceType);
        }

        if (!TopUtil::checkEmpty($this->deviceEncrypt)) {
            $requestParam["device_encrypt"] = TopUtil::convertBasic($this->deviceEncrypt);
        }

        if (!TopUtil::checkEmpty($this->deviceValue)) {
            $requestParam["device_value"] = TopUtil::convertBasic($this->deviceValue);
        }

        if (!TopUtil::checkEmpty($this->promotionType)) {
            $requestParam["promotion_type"] = TopUtil::convertBasic($this->promotionType);
        }

        if (!TopUtil::checkEmpty($this->specialId)) {
            $requestParam["special_id"] = TopUtil::convertBasic($this->specialId);
        }

        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->favoritesId)) {
            $requestParam["favorites_id"] = TopUtil::convertBasic($this->favoritesId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

