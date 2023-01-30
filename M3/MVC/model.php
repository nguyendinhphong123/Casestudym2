<?php

// Thong tin nguoi dung

class Person {
    public $name;
    public $age;
    public $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
}

class Model {
    public function listPerson() {
        return [
            0 => new Person( 'Nguyen Van A', '20', 'Ha Noi'),
            1 => new Person( 'Nguyen Van B', '22', 'Sai Gon'),
            2 => new Person( 'Nguyen Van C', '23','Da Nang')
        ];
    }
}