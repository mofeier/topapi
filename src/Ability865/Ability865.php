<?php
namespace mofeier\Topapi\Ability865;

use mofeier\Topapi\TopApiClient;
use mofeier\Topapi\Ability865\Request\TaobaoOpenAccountTokenValidateRequest;
use mofeier\Topapi\Ability865\Request\TaobaoOpenAccountTokenApplyRequest;

class Ability865 {
    public $client;
    function __construct(TopApiClient $client) {
        $this->client = $client;
    }
    /**
        open account token验证
    **/
    public function taobaoOpenAccountTokenValidate(TaobaoOpenAccountTokenValidateRequest $request) {
        return $this->client->execute("taobao.open.account.token.validate", $request->toMap(), $request->toFileParamMap());
    }
    /**
        申请免登Open Account Token
    **/
    public function taobaoOpenAccountTokenApply(TaobaoOpenAccountTokenApplyRequest $request) {
        return $this->client->execute("taobao.open.account.token.apply", $request->toMap(), $request->toFileParamMap());
    }
}