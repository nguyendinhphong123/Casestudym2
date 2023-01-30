<?php
class StopWatch {
    public $starTime;
    public $endTime;
    
    public function __construct(){
        $this->starTime =  microtime(true);
    }
    public function start(){
        $this->startTime = microtime(true);
    }
    public function stop(){
        $this->endTime = microtime(true);
    }
    public function getElapsedTime(){
        return $this->endTime - $this->starTime;
    }

    public function getstarTime(){
        return $this->starTime;
    }
    public function getendTime(){
        return $this->endTime;
    }
}
// Khoi tạo đối tượng
$stopWatch = new StopWatch();
//Gọi phương thức thiết lập giá trị thuộc tính
$stopWatch->start();

for($i = 0; $i < 500000; $i++){

}

$stopWatch->stop();
// In ra giá trị thuộc tính
echo "Thời gian đã trôi qua: " . $stopWatch->getElapsedTime();
