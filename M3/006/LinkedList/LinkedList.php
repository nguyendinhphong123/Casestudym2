<?php
class LinkedList {
    public $firstNode;
    public $lastNode;

    public function __construct(){
        $this->firstNode = null;
        $this->lastNode = null;
    }

    function insertfirstNode($data){
        $node = new Node($data);
        $node->link = $this->firstNode;
        $this->firstNode = $node;

        if(!$this->lastNode){
            $this->lastNode = $node;
        }
    }

    function insertLastNode($data){
        $node = new Node($data);
        if(!$this->firstNode){
            $this->insertfirstNode($data);
        }else{
            $this->lastNode->link = $node;
            $this->lastNode = $node;
        }
    }
}