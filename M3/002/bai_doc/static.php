<?php
class Foo {
    public static string $my_static = 'foo';

    public function staticValue(){
      
        return seft::$my_static;
    }
}
class Bar extends Foo {
    public function fooStatic(): string{
        return parent::$my_static;
    }
}
print Foo::$my_static . "\n";

$foo = new Foo();
print $foo->staticValue() . "\n";
print $foo->my_static . "\n";      // Undefined "Property" my_static 

print $foo::$my_static . "\n";

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";