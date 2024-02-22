<?php
namespace mofeier\Topapi\Ability865\Domain;

class TaobaoOpenAccountTokenValidateOpenAccount {

    /**
        登录名
     **/
    public $login_id;

    /**
        帐号创建的设备的ID
     **/
    public $create_device_id;

    /**
        支付宝的帐号标识
     **/
    public $alipay_id;

    /**
        创建帐号的App Key
     **/
    public $create_app_key;

    /**
        地区
     **/
    public $locale;

    /**
        银行卡号
     **/
    public $bank_card_no;

    /**
        开发者自定义账号id
     **/
    public $isv_account_id;

    /**
        邮箱
     **/
    public $email;

    /**
        头像url
     **/
    public $avatar_url;

    /**
        数据域
     **/
    public $domain_id;

    /**
        银行卡的拥有者姓名
     **/
    public $bank_card_owner_name;

    /**
        展示名
     **/
    public $display_name;

    /**
        密码salt
     **/
    public $login_pwd_salt;

    /**
        密码
     **/
    public $login_pwd;

    /**
        第三方oauth openid
     **/
    public $open_id;

    /**
        手机
     **/
    public $mobile;

    /**
        账号创建时的位置
     **/
    public $create_location;

    /**
        自定义扩展信息Map的Json格式
     **/
    public $ext_infos;

    /**
        密码加密强度
     **/
    public $login_pwd_intensity;

    /**
        Open Account Id
     **/
    public $id;

    /**
        账号创建类型：1、通过短信创建，2、ISV批量导入，3、ISV OAuth创建
     **/
    public $type;

    /**
        账号状态：1、启用，2、删除，3、禁用
     **/
    public $status;

    /**
        记录的版本号
     **/
    public $version;

    /**
        加密算法类型：1、代表单纯MD5，2：代表单一Salt的MD5，3、代表根据记录不同后的MD5
     **/
    public $login_pwd_encryption;

    /**
        1男 2女
     **/
    public $gender;

    /**
        姓名
     **/
    public $name;

    /**
        出生日期
     **/
    public $birthday;

    /**
        旺旺
     **/
    public $wangwang;

    /**
        微信
     **/
    public $weixin;

    /**
        TAOBAO = 1;WEIXIN = 2;WEIBO = 3;QQ = 4;
     **/
    public $oauth_plateform;


    public function getLoginId() : string{
        return $this->login_id;
    }

    public function setLoginId(string $loginId){
        $this->login_id = $loginId;
    }

    public function getCreateDeviceId() : string{
        return $this->create_device_id;
    }

    public function setCreateDeviceId(string $createDeviceId){
        $this->create_device_id = $createDeviceId;
    }

    public function getAlipayId() : string{
        return $this->alipay_id;
    }

    public function setAlipayId(string $alipayId){
        $this->alipay_id = $alipayId;
    }

    public function getCreateAppKey() : string{
        return $this->create_app_key;
    }

    public function setCreateAppKey(string $createAppKey){
        $this->create_app_key = $createAppKey;
    }

    public function getLocale() : string{
        return $this->locale;
    }

    public function setLocale(string $locale){
        $this->locale = $locale;
    }

    public function getBankCardNo() : string{
        return $this->bank_card_no;
    }

    public function setBankCardNo(string $bankCardNo){
        $this->bank_card_no = $bankCardNo;
    }

    public function getIsvAccountId() : string{
        return $this->isv_account_id;
    }

    public function setIsvAccountId(string $isvAccountId){
        $this->isv_account_id = $isvAccountId;
    }

    public function getEmail() : string{
        return $this->email;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getAvatarUrl() : string{
        return $this->avatar_url;
    }

    public function setAvatarUrl(string $avatarUrl){
        $this->avatar_url = $avatarUrl;
    }

    public function getDomainId() : int{
        return $this->domain_id;
    }

    public function setDomainId(int $domainId){
        $this->domain_id = $domainId;
    }

    public function getBankCardOwnerName() : string{
        return $this->bank_card_owner_name;
    }

    public function setBankCardOwnerName(string $bankCardOwnerName){
        $this->bank_card_owner_name = $bankCardOwnerName;
    }

    public function getDisplayName() : string{
        return $this->display_name;
    }

    public function setDisplayName(string $displayName){
        $this->display_name = $displayName;
    }

    public function getLoginPwdSalt() : string{
        return $this->login_pwd_salt;
    }

    public function setLoginPwdSalt(string $loginPwdSalt){
        $this->login_pwd_salt = $loginPwdSalt;
    }

    public function getLoginPwd() : string{
        return $this->login_pwd;
    }

    public function setLoginPwd(string $loginPwd){
        $this->login_pwd = $loginPwd;
    }

    public function getOpenId() : string{
        return $this->open_id;
    }

    public function setOpenId(string $openId){
        $this->open_id = $openId;
    }

    public function getMobile() : string{
        return $this->mobile;
    }

    public function setMobile(string $mobile){
        $this->mobile = $mobile;
    }

    public function getCreateLocation() : string{
        return $this->create_location;
    }

    public function setCreateLocation(string $createLocation){
        $this->create_location = $createLocation;
    }

    public function getExtInfos() : string{
        return $this->ext_infos;
    }

    public function setExtInfos(string $extInfos){
        $this->ext_infos = $extInfos;
    }

    public function getLoginPwdIntensity() : int{
        return $this->login_pwd_intensity;
    }

    public function setLoginPwdIntensity(int $loginPwdIntensity){
        $this->login_pwd_intensity = $loginPwdIntensity;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getVersion() : int{
        return $this->version;
    }

    public function setVersion(int $version){
        $this->version = $version;
    }

    public function getLoginPwdEncryption() : int{
        return $this->login_pwd_encryption;
    }

    public function setLoginPwdEncryption(int $loginPwdEncryption){
        $this->login_pwd_encryption = $loginPwdEncryption;
    }

    public function getGender() : int{
        return $this->gender;
    }

    public function setGender(int $gender){
        $this->gender = $gender;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getBirthday() : string{
        return $this->birthday;
    }

    public function setBirthday(string $birthday){
        $this->birthday = $birthday;
    }

    public function getWangwang() : string{
        return $this->wangwang;
    }

    public function setWangwang(string $wangwang){
        $this->wangwang = $wangwang;
    }

    public function getWeixin() : string{
        return $this->weixin;
    }

    public function setWeixin(string $weixin){
        $this->weixin = $weixin;
    }

    public function getOauthPlateform() : int{
        return $this->oauth_plateform;
    }

    public function setOauthPlateform(int $oauthPlateform){
        $this->oauth_plateform = $oauthPlateform;
    }


}

