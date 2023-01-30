<?php
class Point3D extends Point2D {
    public float $z;

    public function __construct(float $x, Float $y, float $z) {
        parent::__construct( $x,$y);
        $this->z = $z;
    }
    public function getZ(): float {
        return $this->z;
    }
    public function setZ(float $z): void {
        $this->z = $z;
    }
    public function setXYZ(float $xyz): void {
        $this->x * $this->y * $this->z = $xyz;
    }
    public function getXYZ(): array {
        return [$this->x * $this->y * $this->z];
    }
    public function toString(): string {
        echo 'Đây là lớp 3D';
    }
}