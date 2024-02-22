<?php
namespace mofeier\Topapi\Defaultability\Request;
use mofeier\Topapi\TopUtil;

class TaobaoTbkDgMaterialOptionalUpgradeRequest {

    /**
        商品筛选-店铺dsr评分。筛选大于等于当前设置的店铺dsr评分的商品0-50000之间
     **/
    private $startDsr;

    /**
        页大小，默认20，1~100
     **/
    private $pageSize;

    /**
        第几页，默认：１
     **/
    private $pageNo;

    /**
        商品筛选-淘客收入比率上限(商品佣金比率+补贴比率)。如：1234表示12.34%
     **/
    private $endTkRate;

    /**
        商品筛选-淘客收入比率下限(商品佣金比率+补贴比率)。如：1234表示12.34%
     **/
    private $startTkRate;

    /**
        商品筛选-预估到手价范围上限。单位：元
     **/
    private $endPrice;

    /**
        商品筛选-预估到手价范围下限。单位：元
     **/
    private $startPrice;

    /**
        商品筛选-是否海外商品。true表示属于海外商品，false或不设置表示不限
     **/
    private $isOverseas;

    /**
        商品筛选-是否天猫商品。true表示属于天猫商品，false或不设置表示不限
     **/
    private $isTmall;

    /**
        排序_des（降序），排序_asc（升序），销量（total_sales），淘客收入比率（tk_rate）， 累计推广量（tk_total_sales），总支出佣金（tk_total_commi），预估到价格（final_promotion_price），匹配分（match）
     **/
    private $sort;

    /**
        商品筛选-所在地
     **/
    private $itemloc;

    /**
        商品筛选-后台类目ID。用,分割，最大10个
     **/
    private $cat;

    /**
        商品筛选-查询词；注意：使用标题精准搜索时，若无消费者比价场景ID2权限，当搜索结果只有一个商品时则出参不再提供商品推广链接和商品id字段，若搜索结果仍有多个商品，则正常出参。同时无消费者比价场景ID2权限，q参数也不再支持入参淘宝复制的商品链接进行搜索查询，仅支持入参含新商品id的淘宝客推广链接如uland链接进行搜索查询(场景id使用说明参考《淘宝客新商品ID升级》白皮书：https://www.yuque.com/taobaolianmengguanfangxiaoer/zmig94/tfyt0pahmlpzu2ud)
     **/
    private $q;

    /**
        物料id，不传时默认物料material_id=80309；如果直接对消费者投放，可使用官方个性化算法优化的搜索物料material_id=17004（注意：若物料id=17004没查询到结果则出系统默认物料id=80309的查询结果）
     **/
    private $materialId;

    /**
        优惠券筛选-是否有优惠券。true表示该商品有优惠券，false或不设置表示不限
     **/
    private $hasCoupon;

    /**
        ip参数影响邮费获取，如果不传或者传入不准确，邮费无法精准提供
     **/
    private $ip;

    /**
        推广位id，mm_xxx_xxx_12345678三段式的最后一段数字（登录pub.alimama.com推广管理-推广位管理中查询）
     **/
    private $adzoneId;

    /**
        商品筛选-是否包邮。true表示包邮，false或不设置表示不限
     **/
    private $needFreeShipment;

    /**
        商品筛选-是否加入消费者保障。true表示加入，false或不设置表示不限
     **/
    private $needPrepay;

    /**
        商品筛选-成交转化是否高于行业均值。True表示大于等于，false或不设置表示不限
     **/
    private $includePayRate30;

    /**
        商品筛选-好评率是否高于行业均值。True表示大于等于，false或不设置表示不限
     **/
    private $includeGoodRate;

    /**
        商品筛选-退款率是否低于行业均值。True表示大于等于，false或不设置表示不限
     **/
    private $includeRfdRate;

    /**
        商品筛选-牛皮癣程度。取值：1不限，2无，3轻微
     **/
    private $npxLevel;

    /**
        智能匹配-设备号加密类型：MD5；使用智能推荐请先签署协议https://pub.alimama.com/fourth/protocol/common.htm?key=hangye_laxin
     **/
    private $deviceEncrypt;

    /**
        智能匹配-设备号加密后的值（MD5加密需32位小写）；使用智能推荐请先签署协议https://pub.alimama.com/fourth/protocol/common.htm?key=hangye_laxin
     **/
    private $deviceValue;

    /**
        智能匹配-设备号类型：IMEI，或者IDFA，或者UTDID（UTDID不支持MD5加密），或者OAID；使用智能推荐请先签署协议https://pub.alimama.com/fourth/protocol/common.htm?key=hangye_laxin
     **/
    private $deviceType;

    /**
        会员运营ID
     **/
    private $specialId;

    /**
        渠道关系ID，仅适用于渠道推广场景
     **/
    private $relationId;

    /**
        是否获取前N件佣金信息	0否，1是，其他值否
     **/
    private $getTopnRate;

    /**
        1-动态ID转链场景，2-消费者比价场景（不填默认为1）；场景id使用说明参考《淘宝客新商品ID升级》白皮书：https://www.yuque.com/taobaolianmengguanfangxiaoer/zmig94/tfyt0pahmlpzu2ud
     **/
    private $bizSceneId;

    /**
        1-自购省，2-推广赚（代理模式专属ID，代理模式必填，非代理模式不用填写该字段）
     **/
    private $promotionType;

    /**
        线报内容筛选—内容生产开始时间，13毫秒时间戳
     **/
    private $mgcStartTime;

    /**
        线报内容筛选—内容生产截止时间，13毫秒时间戳
     **/
    private $mgcEndTime;

    /**
        线报状态筛选，0-全部 1-过期 2-实时生效 3-未来生效 不传默认过滤有效
     **/
    private $mgcStatus;

    /**
        人群ID，仅适用于物料评估场景material_id=41377
     **/
    private $ucrowdId;

    /**
        物料评估-商品列表
     **/
    private $ucrowdRankItems;


    public function getStartDsr() : int{
        return $this->startDsr;
    }

    public function setStartDsr(int $startDsr){
        $this->startDsr = $startDsr;
    }

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

    public function getEndTkRate() : int{
        return $this->endTkRate;
    }

    public function setEndTkRate(int $endTkRate){
        $this->endTkRate = $endTkRate;
    }

    public function getStartTkRate() : int{
        return $this->startTkRate;
    }

    public function setStartTkRate(int $startTkRate){
        $this->startTkRate = $startTkRate;
    }

    public function getEndPrice() : int{
        return $this->endPrice;
    }

    public function setEndPrice(int $endPrice){
        $this->endPrice = $endPrice;
    }

    public function getStartPrice() : int{
        return $this->startPrice;
    }

    public function setStartPrice(int $startPrice){
        $this->startPrice = $startPrice;
    }

    public function getIsOverseas() : bool{
        return $this->isOverseas;
    }

    public function setIsOverseas(bool $isOverseas){
        $this->isOverseas = $isOverseas;
    }

    public function getIsTmall() : bool{
        return $this->isTmall;
    }

    public function setIsTmall(bool $isTmall){
        $this->isTmall = $isTmall;
    }

    public function getSort() : string{
        return $this->sort;
    }

    public function setSort(string $sort){
        $this->sort = $sort;
    }

    public function getItemloc() : string{
        return $this->itemloc;
    }

    public function setItemloc(string $itemloc){
        $this->itemloc = $itemloc;
    }

    public function getCat() : string{
        return $this->cat;
    }

    public function setCat(string $cat){
        $this->cat = $cat;
    }

    public function getQ() : string{
        return $this->q;
    }

    public function setQ(string $q){
        $this->q = $q;
    }

    public function getMaterialId() : int{
        return $this->materialId;
    }

    public function setMaterialId(int $materialId){
        $this->materialId = $materialId;
    }

    public function getHasCoupon() : bool{
        return $this->hasCoupon;
    }

    public function setHasCoupon(bool $hasCoupon){
        $this->hasCoupon = $hasCoupon;
    }

    public function getIp() : string{
        return $this->ip;
    }

    public function setIp(string $ip){
        $this->ip = $ip;
    }

    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getNeedFreeShipment() : bool{
        return $this->needFreeShipment;
    }

    public function setNeedFreeShipment(bool $needFreeShipment){
        $this->needFreeShipment = $needFreeShipment;
    }

    public function getNeedPrepay() : bool{
        return $this->needPrepay;
    }

    public function setNeedPrepay(bool $needPrepay){
        $this->needPrepay = $needPrepay;
    }

    public function getIncludePayRate30() : bool{
        return $this->includePayRate30;
    }

    public function setIncludePayRate30(bool $includePayRate30){
        $this->includePayRate30 = $includePayRate30;
    }

    public function getIncludeGoodRate() : bool{
        return $this->includeGoodRate;
    }

    public function setIncludeGoodRate(bool $includeGoodRate){
        $this->includeGoodRate = $includeGoodRate;
    }

    public function getIncludeRfdRate() : bool{
        return $this->includeRfdRate;
    }

    public function setIncludeRfdRate(bool $includeRfdRate){
        $this->includeRfdRate = $includeRfdRate;
    }

    public function getNpxLevel() : int{
        return $this->npxLevel;
    }

    public function setNpxLevel(int $npxLevel){
        $this->npxLevel = $npxLevel;
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

    public function getDeviceType() : string{
        return $this->deviceType;
    }

    public function setDeviceType(string $deviceType){
        $this->deviceType = $deviceType;
    }

    public function getSpecialId() : string{
        return $this->specialId;
    }

    public function setSpecialId(string $specialId){
        $this->specialId = $specialId;
    }

    public function getRelationId() : string{
        return $this->relationId;
    }

    public function setRelationId(string $relationId){
        $this->relationId = $relationId;
    }

    public function getGetTopnRate() : int{
        return $this->getTopnRate;
    }

    public function setGetTopnRate(int $getTopnRate){
        $this->getTopnRate = $getTopnRate;
    }

    public function getBizSceneId() : string{
        return $this->bizSceneId;
    }

    public function setBizSceneId(string $bizSceneId){
        $this->bizSceneId = $bizSceneId;
    }

    public function getPromotionType() : string{
        return $this->promotionType;
    }

    public function setPromotionType(string $promotionType){
        $this->promotionType = $promotionType;
    }

    public function getMgcStartTime() : string{
        return $this->mgcStartTime;
    }

    public function setMgcStartTime(string $mgcStartTime){
        $this->mgcStartTime = $mgcStartTime;
    }

    public function getMgcEndTime() : string{
        return $this->mgcEndTime;
    }

    public function setMgcEndTime(string $mgcEndTime){
        $this->mgcEndTime = $mgcEndTime;
    }

    public function getMgcStatus() : string{
        return $this->mgcStatus;
    }

    public function setMgcStatus(string $mgcStatus){
        $this->mgcStatus = $mgcStatus;
    }

    public function getUcrowdId() : int{
        return $this->ucrowdId;
    }

    public function setUcrowdId(int $ucrowdId){
        $this->ucrowdId = $ucrowdId;
    }

    public function getUcrowdRankItems() : array{
        return $this->ucrowdRankItems;
    }

    public function setUcrowdRankItems(array $ucrowdRankItems){
        $this->ucrowdRankItems = $ucrowdRankItems;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.material.optional.upgrade";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->startDsr)) {
            $requestParam["start_dsr"] = TopUtil::convertBasic($this->startDsr);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->endTkRate)) {
            $requestParam["end_tk_rate"] = TopUtil::convertBasic($this->endTkRate);
        }

        if (!TopUtil::checkEmpty($this->startTkRate)) {
            $requestParam["start_tk_rate"] = TopUtil::convertBasic($this->startTkRate);
        }

        if (!TopUtil::checkEmpty($this->endPrice)) {
            $requestParam["end_price"] = TopUtil::convertBasic($this->endPrice);
        }

        if (!TopUtil::checkEmpty($this->startPrice)) {
            $requestParam["start_price"] = TopUtil::convertBasic($this->startPrice);
        }

        if (!TopUtil::checkEmpty($this->isOverseas)) {
            $requestParam["is_overseas"] = TopUtil::convertBasic($this->isOverseas);
        }

        if (!TopUtil::checkEmpty($this->isTmall)) {
            $requestParam["is_tmall"] = TopUtil::convertBasic($this->isTmall);
        }

        if (!TopUtil::checkEmpty($this->sort)) {
            $requestParam["sort"] = TopUtil::convertBasic($this->sort);
        }

        if (!TopUtil::checkEmpty($this->itemloc)) {
            $requestParam["itemloc"] = TopUtil::convertBasic($this->itemloc);
        }

        if (!TopUtil::checkEmpty($this->cat)) {
            $requestParam["cat"] = TopUtil::convertBasic($this->cat);
        }

        if (!TopUtil::checkEmpty($this->q)) {
            $requestParam["q"] = TopUtil::convertBasic($this->q);
        }

        if (!TopUtil::checkEmpty($this->materialId)) {
            $requestParam["material_id"] = TopUtil::convertBasic($this->materialId);
        }

        if (!TopUtil::checkEmpty($this->hasCoupon)) {
            $requestParam["has_coupon"] = TopUtil::convertBasic($this->hasCoupon);
        }

        if (!TopUtil::checkEmpty($this->ip)) {
            $requestParam["ip"] = TopUtil::convertBasic($this->ip);
        }

        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->needFreeShipment)) {
            $requestParam["need_free_shipment"] = TopUtil::convertBasic($this->needFreeShipment);
        }

        if (!TopUtil::checkEmpty($this->needPrepay)) {
            $requestParam["need_prepay"] = TopUtil::convertBasic($this->needPrepay);
        }

        if (!TopUtil::checkEmpty($this->includePayRate30)) {
            $requestParam["include_pay_rate_30"] = TopUtil::convertBasic($this->includePayRate30);
        }

        if (!TopUtil::checkEmpty($this->includeGoodRate)) {
            $requestParam["include_good_rate"] = TopUtil::convertBasic($this->includeGoodRate);
        }

        if (!TopUtil::checkEmpty($this->includeRfdRate)) {
            $requestParam["include_rfd_rate"] = TopUtil::convertBasic($this->includeRfdRate);
        }

        if (!TopUtil::checkEmpty($this->npxLevel)) {
            $requestParam["npx_level"] = TopUtil::convertBasic($this->npxLevel);
        }

        if (!TopUtil::checkEmpty($this->deviceEncrypt)) {
            $requestParam["device_encrypt"] = TopUtil::convertBasic($this->deviceEncrypt);
        }

        if (!TopUtil::checkEmpty($this->deviceValue)) {
            $requestParam["device_value"] = TopUtil::convertBasic($this->deviceValue);
        }

        if (!TopUtil::checkEmpty($this->deviceType)) {
            $requestParam["device_type"] = TopUtil::convertBasic($this->deviceType);
        }

        if (!TopUtil::checkEmpty($this->specialId)) {
            $requestParam["special_id"] = TopUtil::convertBasic($this->specialId);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->getTopnRate)) {
            $requestParam["get_topn_rate"] = TopUtil::convertBasic($this->getTopnRate);
        }

        if (!TopUtil::checkEmpty($this->bizSceneId)) {
            $requestParam["biz_scene_id"] = TopUtil::convertBasic($this->bizSceneId);
        }

        if (!TopUtil::checkEmpty($this->promotionType)) {
            $requestParam["promotion_type"] = TopUtil::convertBasic($this->promotionType);
        }

        if (!TopUtil::checkEmpty($this->mgcStartTime)) {
            $requestParam["mgc_start_time"] = TopUtil::convertBasic($this->mgcStartTime);
        }

        if (!TopUtil::checkEmpty($this->mgcEndTime)) {
            $requestParam["mgc_end_time"] = TopUtil::convertBasic($this->mgcEndTime);
        }

        if (!TopUtil::checkEmpty($this->mgcStatus)) {
            $requestParam["mgc_status"] = TopUtil::convertBasic($this->mgcStatus);
        }

        if (!TopUtil::checkEmpty($this->ucrowdId)) {
            $requestParam["ucrowd_id"] = TopUtil::convertBasic($this->ucrowdId);
        }

        if (!TopUtil::checkEmpty($this->ucrowdRankItems)) {
            $requestParam["ucrowd_rank_items"] = TopUtil::convertStructList($this->ucrowdRankItems);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

