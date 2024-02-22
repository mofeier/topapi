<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialOptionalUpgradeTmallRankInfo {

    /**
        榜单排行描述
     **/
    public $tmall_rank_text;

    /**
        榜单url
     **/
    public $tmall_rank_url;


    public function getTmallRankText() : string{
        return $this->tmall_rank_text;
    }

    public function setTmallRankText(string $tmallRankText){
        $this->tmall_rank_text = $tmallRankText;
    }

    public function getTmallRankUrl() : string{
        return $this->tmall_rank_url;
    }

    public function setTmallRankUrl(string $tmallRankUrl){
        $this->tmall_rank_url = $tmallRankUrl;
    }


}

