<?php
class MyDate {
    public $day;
    public $month;
    public $year;
    // Phuong thuc khoi tao dung de thiet lap cac gia tri thuoc tinh
    public function __construct($day,$month,$year){
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    // Tra ve gia tri thuoc tinh day
    public function getDay (){
        return $this->day;
    }
    // Tra ve gia tri thuoc tinh month
    public function getMonth (){
        return $this->month;
    }
    // Tra ve gia tri thuoc tinh year
    public function getYear (){
        return $this->year;
    }
    // Thiet lap thuoc tinh day
    public function setDay ($day){
        $this->day = $day;
    }
    // Thiet lap thuoc tinh month
    public function setMonth ($month){
        $this->month = $month;
    }
    // Thiet lap thuoc tinh year
    public function setYear ($year){
        $this->year = $year;
    }
    // Thiet lap thuoc tinh day,month,year
    public function setDate ($ts_day,$ts_month,$ts_year){
        $this->day = $ts_day;
        $this->month = $ts_month;
        $this->year = $ts_year;
    }
    // Tra ve chuoi ngay thang
    public function toString (){
        return $this->day.'/'.$this->month.'/'.$this->year;
    }
}

// Khoi tao doi tuong
$MyDate1 = new MyDate(22,12,1997);
// Goi phuong thuc thiet lap gia tri thuoc tinh day
$MyDate1->setDay(10);
// Goi phuong thuc thiet lap gia tri thuoc tinh month
$MyDate1->setMonth(01);
// Goi phuong thuc thiet lap gia tri thuoc tinh year
$MyDate1->setYear(2023);

// In ra gia tri cac thuoc tinh
    echo '<br>';
    echo "Ngay: " . $MyDate1->getDay();
    echo '<br>';
    echo "Thang: " . $MyDate1->getMonth();
    echo '<br>';
    echo "Nam: " . $MyDate1->getYear();

    //Goi phuong thuc thiet lap gia tri day,month,year
    $MyDate1->setDate(20,19,2023);

    // Goi phuong thuc tra ve chuoi day,month,year
    echo '<br>';
   echo $MyDate1->toString();


    echo '<pre>';
    print_r($MyDate1);
    echo '</pre>';