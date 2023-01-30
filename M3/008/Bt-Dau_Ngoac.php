<?php
/*
s * (s – a) * (s – b) * (s – c)            → Well
(– b + (b2 – 4*a*c)^0.5) / 2*a                  → Well
s * (s – a) * (s – b * (s – c)             → ???
s * (s – a) * s – b) * (s – c)             → ???
(– b + (b^2 – 4*a*c)^(0.5/ 2*a))     → ???
*/

$string = 's * (s - a) * (s - b) * (s - c)';
// $string_arr =  explode(' ', $string);
$string_arr = str_split($string);



// 1. Tạo một stack (từ lớp SplStack) rỗng (Stack chứa dấu ngoặc).
$stack = new SplStack();
// 2. Với mỗi ký hiệu sym trong đoạn (từ trái sang phải):
foreach($string_arr as $sym){
    // . Nếu sym là dấu ngoặc trái
    if($sym == '('){

        $stack->push($sym);
    }
    // 2.2. Nếu sym là dấu ngoặc phải:
    if($sym == ')'){

        if($stack->isEmpty()){
            echo 'Loi';
            break;
        }else{
            // 2.2.2. Lấy dấu ngoặc ở stack, đưa vào biến left
            $left = $stack->pop();
            // 2.2.3. Nếu left và sym không khớp được với nhau, return false.
            if($stack->isEmpty()){
                echo 'Loi';
                break;
            }
            echo 'Dung';
        }
    }
}

echo '<pre>';
print_r($string_arr);
echo '</pre>';

