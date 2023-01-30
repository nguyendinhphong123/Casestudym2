<?php
class Node {
    public $data;
    public $link;

    public function __construct($data) {
        $this->data = $data;
        $this->link = null;
    }
}
class LinkedList extends Node  {
    public $count = 0;
    public $firstNode;
    public $lastNode;

    public function __construct(){
        $this->firstNode = null;
        $this->lastNode = null;
    }
    //Them mot phan tu moi vao danh sach
    public function add($index,$data){
        if ($index == 0) {
            $this->addFirst($data);
        } else {
            $node = new Node($data);
            $current = $this->firstNode;
            $previous = $this->firstNode;

            for ($i = 0; $i < $index; $i++) {
                $previous = $current;
                $current = $current->link;
            }
            $previous->link = $node;
            $node->link = $current;
            $this->count++;
        }
        echo "Them thanh cong";
    }
    // Them mot phan tu moi vao dau danh sach
    public function addFirst(){
        $node = new Node($data);
        if (!$this->firstNode) {
            $this->firstNode = $node;
            $this->lastNode = $node;
        } else {
            $node->link = $this->firstNode;
            $this->firstNode = $node;
        }
        $this->count++;
        echo "Them vao dau thanh cong";
    }
    // Them mot phan tu moi vao cuoi danh sach
    public function addLast(){
        if (!$this->firstNode) {
            $this->addFirst($data);
        } else {
            $node = new Node($data);
            $this->lastNode->link = $node;
            $this->lastNode = $node;
            $this->count++;
            echo "Them vao cuoi thanh cong";
        }
    }
    // Xoa mot phan tu tai mot vi tri
    public function remove($index){
        $current = $this->firstNode;
        $previous = $this->firstNode;

        while ($current->data != $index) {
            if ($current->link == null) {
                return null;
            } else {
                $previous = $current;
                $current = $current->link;
            }
        }

        if ($current == $this->firstNode) {
            if ($this->count == 1) {
                $this->lastNode = $this->firstNode;
            }
            $this->firstNode = $this->firstNode->link;
        } else {
            if ($this->lastNode == $current) {
                $this->lastNode = $previous;
            }
            $previous->link = $current->link;
        }
        $this->count--;
        echo "Xoa tai vi tri: " . $index . " thanh cong";
    }
    // Truy mot phan tu trong danh sach
    public function get($index){
        $current = $this->firstNode;
        $count = 0;

        while ($current != null) {
            if ($count == $index) {
                return $current->data;
            }
            $count++;
            $current = $current->link;
        }
        return false;
    }
    // Tra ve so luong cac phan tu trong danh sach
    public function size(){
        return $this->count;
    }
    // In cac phan tu trong danh sach
    public function printList(){
        $listData = [];
        $current = $this->firstNode;

        while ($current != null) {
            array_push($listData, $current->data);
            $current = $current->link;
        }
        return $listData;
    }
    // Sao chep danh sach ra mot danh sach khac
    public function clone(){
        return $copy = $this->printList();
    }
    // Kiem tra phan tu o có trong danh sach khong
    public function contains(){
        if ($this->firstNode !== null) {
            $current = $this->firstNode;
            while ($current->link !== null) {
                if ($current->data === $obj) {
                    return true;
                }
            }
        }
        return false;
    }
    // Tra ve vi tri
    public function indexOf(){
        return array_search($obj, $this->printList());
    }
}


$linkedList = new LinkedList();
$linkedList->add(1,'phong');
$linkedList->add(2,'nho');
$linkedList->addFirst('Khang');
$linkedList->addLast('Huyen');
var_dump($linkedList->firstNode);