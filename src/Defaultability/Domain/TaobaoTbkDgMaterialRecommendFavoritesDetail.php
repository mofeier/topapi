<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialRecommendFavoritesDetail {

    /**
        选品库收藏夹id
     **/
    public $favorites_id;

    /**
        选品库收藏夹标题
     **/
    public $favorites_title;


    public function getFavoritesId() : int{
        return $this->favorites_id;
    }

    public function setFavoritesId(int $favoritesId){
        $this->favorites_id = $favoritesId;
    }

    public function getFavoritesTitle() : string{
        return $this->favorites_title;
    }

    public function setFavoritesTitle(string $favoritesTitle){
        $this->favorites_title = $favoritesTitle;
    }


}

