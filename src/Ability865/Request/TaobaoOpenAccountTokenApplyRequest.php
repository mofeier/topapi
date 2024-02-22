<?php
namespace mofeier\Topapi\Ability865\Request;
use mofeier\Topapi\TopUtil;

class TaobaoOpenAccountTokenApplyRequest {

    /**
        isv自己账号的唯一id
     **/
    private $isvAccountId;

    /**
        ISV APP的登录态时长单位是秒
     **/
    private $loginStateExpireIn;

    /**
        open account id
     **/
    private $openAccountId;

    /**
        时间戳单位是毫秒
     **/
    private $tokenTimestamp;

    /**
        用于防重放的唯一id
     **/
    private $uuid;

    /**
        用于透传一些业务附加参数
     **/
    private $ext;


    public function getIsvAccountId() : string{
        return $this->isvAccountId;
    }

    public function setIsvAccountId(string $isvAccountId){
        $this->isvAccountId = $isvAccountId;
    }

    public function getLoginStateExpireIn() : int{
        return $this->loginStateExpireIn;
    }

    public function setLoginStateExpireIn(int $loginStateExpireIn){
        $this->loginStateExpireIn = $loginStateExpireIn;
    }

    public function getOpenAccountId() : int{
        return $this->openAccountId;
    }

    public function setOpenAccountId(int $openAccountId){
        $this->openAccountId = $openAccountId;
    }

    public function getTokenTimestamp() : int{
        return $this->tokenTimestamp;
    }

    public function setTokenTimestamp(int $tokenTimestamp){
        $this->tokenTimestamp = $tokenTimestamp;
    }

    public function getUuid() : string{
        return $this->uuid;
    }

    public function setUuid(string $uuid){
        $this->uuid = $uuid;
    }

    public function getExt() : array{
        return $this->ext;
    }

    public function setExt(array $ext){
        $this->ext = $ext;
    }


    public function getApiName() : string {
        return "taobao.open.account.token.apply";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->isvAccountId)) {
            $requestParam["isv_account_id"] = TopUtil::convertBasic($this->isvAccountId);
        }

        if (!TopUtil::checkEmpty($this->loginStateExpireIn)) {
            $requestParam["login_state_expire_in"] = TopUtil::convertBasic($this->loginStateExpireIn);
        }

        if (!TopUtil::checkEmpty($this->openAccountId)) {
            $requestParam["open_account_id"] = TopUtil::convertBasic($this->openAccountId);
        }

        if (!TopUtil::checkEmpty($this->tokenTimestamp)) {
            $requestParam["token_timestamp"] = TopUtil::convertBasic($this->tokenTimestamp);
        }

        if (!TopUtil::checkEmpty($this->uuid)) {
            $requestParam["uuid"] = TopUtil::convertBasic($this->uuid);
        }

        if (!TopUtil::checkEmpty($this->ext)) {
            $requestParam["ext"] = TopUtil::convertStruct($this->ext);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

