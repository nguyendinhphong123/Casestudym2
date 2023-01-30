<?php
class Books implements Stack {
    protected $stack;
    protected $limit;

    public function __construct($limit){
        $this->stack = [];
        $this->limit = $limit;
    }
    // dua phan tu vao danh sach
    public function push(string $item){
        if(count($this->stack) > $this->limit){
            throw new Exception("Stack full");
        }else{
             array_push($this->stack, $item);
        }
    }
    public function pop(){
        if($this->isEmpty()){
            throw new Exception("Empty stack");
        }else{
        return array_pop($this->stack);
        }
    }
    public function top(){
        return end($this->stack);
    }
    public function isEmpty(){
        return empty($this->stack);
    }
    public function getStack(){
        return $this->stack;
    }
    // Kiem tra day
    public function isFull(){

    }
}