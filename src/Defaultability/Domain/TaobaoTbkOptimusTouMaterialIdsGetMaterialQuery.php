<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkOptimusTouMaterialIdsGetMaterialQuery {

    /**
        页码，默认1，取值范围1~100
     **/
    public $page_no;

    /**
        物料主题类型, 1促销活动;2热门主题;3精选榜单;4行业频道等;5其他
     **/
    public $subject;

    /**
        物料类型，1: 商品；2:权益
     **/
    public $material_type;

    /**
        每页物料id数量，默认20，取值范围1~100
     **/
    public $page_size;


    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getSubject() : int{
        return $this->subject;
    }

    public function setSubject(int $subject){
        $this->subject = $subject;
    }

    public function getMaterialType() : int{
        return $this->material_type;
    }

    public function setMaterialType(int $materialType){
        $this->material_type = $materialType;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }


}

