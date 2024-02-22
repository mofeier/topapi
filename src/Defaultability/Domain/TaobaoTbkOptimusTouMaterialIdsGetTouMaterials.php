<?php
namespace mofeier\Topapi\Defaultability\Domain;

class TaobaoTbkOptimusTouMaterialIdsGetTouMaterials {

    /**
        物料集合名称
     **/
    public $material_name;

    /**
        物料id
     **/
    public $material_id;

    /**
        物料类型，1: 商品；2:权益
     **/
    public $material_type;

    /**
        物料主题类型, 1促销活动;2热门主题;3精选榜单;4行业频道等;5其他
     **/
    public $subject;

    /**
        开始时间，Unix时间戳
     **/
    public $start_time;

    /**
        结束时间，Unix时间戳
     **/
    public $end_time;


    public function getMaterialName() : string{
        return $this->material_name;
    }

    public function setMaterialName(string $materialName){
        $this->material_name = $materialName;
    }

    public function getMaterialId() : int{
        return $this->material_id;
    }

    public function setMaterialId(int $materialId){
        $this->material_id = $materialId;
    }

    public function getMaterialType() : int{
        return $this->material_type;
    }

    public function setMaterialType(int $materialType){
        $this->material_type = $materialType;
    }

    public function getSubject() : int{
        return $this->subject;
    }

    public function setSubject(int $subject){
        $this->subject = $subject;
    }

    public function getStartTime() : int{
        return $this->start_time;
    }

    public function setStartTime(int $startTime){
        $this->start_time = $startTime;
    }

    public function getEndTime() : int{
        return $this->end_time;
    }

    public function setEndTime(int $endTime){
        $this->end_time = $endTime;
    }


}

