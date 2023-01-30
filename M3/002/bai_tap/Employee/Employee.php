<?php
namespace Employee;
class Employee {
    public $ho = '';
    public $ten = '';
    public $ngay_sinh = '';
    public $dia_chi = '';
    public $vi_tri = '';
    public function __construct($ho,$ten,$ngay_sinh,$dia_chi,$vi_tri){
        $this->ho = $ho;
        $this->ten = $ten;
        $this->ngay_sinh = $ngay_sinh;
        $this->dia_chi = $dia_chi;
        $this->vi_tri = $vi_tri;
    }
    public function getInfo(){
        return [
            "ho" => $this->getho(),
            "ten" => $this->getten(),
            "ngay_sinh" => $this->getngay_sinh(),
            "dia_chi" => $this->getdia_chi(),
            "vi_tri" => $this->getvi_tri(),
        ];
    }
    

}
