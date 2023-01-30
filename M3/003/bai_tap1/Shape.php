<?php
class Shape {
    public string $name;
    public function __construct(string $name) {
        $this->name = $name;
    }
    public function show(): string {
        return "I am a shape. my name is  $this->name";
    }
}