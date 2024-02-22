<?php
namespace mofeier\Topapi\Ability865\Domain;

class TaobaoOpenAccountTokenValidateTokenInfoExt {

    /**
        open account当前token info中open account id对应的open account信息
     **/
    public $open_account;

    /**
        oauthOtherInfo
     **/
    public $oauth_other_info;


    public function getOpenAccount() : TaobaoOpenAccountTokenValidateOpenAccount{
        return $this->open_account;
    }

    public function setOpenAccount(TaobaoOpenAccountTokenValidateOpenAccount $openAccount){
        $this->open_account = $openAccount;
    }

    public function getOauthOtherInfo() : TaobaoOpenAccountTokenValidateOAuthOtherInfo{
        return $this->oauth_other_info;
    }

    public function setOauthOtherInfo(TaobaoOpenAccountTokenValidateOAuthOtherInfo $oauthOtherInfo){
        $this->oauth_other_info = $oauthOtherInfo;
    }


}

