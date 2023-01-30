<?php
require_once "Node.php";
require_once "LinkedList.php";

$linkedList = new LinkedList();
$linkedList->insertfirstNode(10);
$linkedList->insertfirstNode(20);
$linkedList->insertfirstNode(50);
$linkedList->insertLastNode(40);
var_dump($linkedList->firstNode);