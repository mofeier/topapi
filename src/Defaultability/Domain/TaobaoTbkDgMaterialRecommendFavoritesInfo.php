<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkDgMaterialRecommendFavoritesInfo {

    /**
        选品库收藏夹总数量
     **/
    public $total_count;

    /**
        选品库收藏夹详细信息
     **/
    public $favorites_list;


    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }

    public function getFavoritesList() : array{
        return $this->favorites_list;
    }

    public function setFavoritesList(array $favoritesList){
        $this->favorites_list = $favoritesList;
    }


}

