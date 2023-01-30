<?php
include_once "Stack.php";
include_once "Books.php";

$books = new Books(3);
$books->push("Tin hoc 12");
$books->push("Toan 12");
$books->push("Vat li 12");
$books->pop();
$books->pop();
echo $books->top();
var_dump($books->getStack());
