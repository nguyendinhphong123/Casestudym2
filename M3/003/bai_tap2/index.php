<?php
include_once 'Point2D.php';
include_once  'Point3D.php';

$point2d = new Point2D(5,8);
print_r ($point2d->getXY());
echo '<br>';
$point3d = new Point3D(5,8,9);
print_r($point3d->getXY());