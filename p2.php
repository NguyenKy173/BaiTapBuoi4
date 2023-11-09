<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Tham số bất định 
    echo "<h3>Tham số bất định</h3>";
    function myTest(...$args)
    {
        foreach ($args as $arg) {
            echo $arg;
        }
    }
    myTest(1, 2, 3);
    echo "<br>";

    //Theo mặc định, bất kỳ biến nào được sử dụng bên trong hàm đều bị giới hạn ở phạm vi local.
    $x = 'hello';
    function myFunc()
    {
        global $x;
        $x .= 'World';
    }
    myFunc();
    echo $x;
    echo "<br>";

    // //Hàm ẩn danh
    // echo "<h3>Hàm ẩn danh</h3>";
    // echo"<br>";
    // $say = function($name){
    //     echo "Hello" . $name;
    // }
    // $say("World");
    //Anonymous function được sử dụng như callback function.
    echo "<h3>Anonymous function được sử dụng như callback function.</h3>";
    function hia($name)
    {
        echo $name();
    }
    hia(function () {
        echo "Hello";
    });
    echo "<br>";

    //Array_map
    echo "<h3>Array_map()</h3>";
    function cube($n)
    {
        return ($n * $n * $n);
    }
    $a = array(1, 2, 3, 4, 5);
    $b = array_map("cube", $a);
    print_r($b);
    echo "<br>";

    //Array_map() và anonymous function
    echo "<h3>Array_map() và anonymous function</h3>";
    $c = array(1, 2, 3, 4, 5);
    $d = array_map(function ($m) {
        return $m * $m * $m;
    }, $c);
    print_r($d);
    echo "<br>";

    //Closure
    echo "<h3>Closure</h3>";
    $x = 1;
    $y = 2;
    $myClosure = function ($z) use ($x, $y) {
        return $x + $y + $z;
    };
    echo $myClosure(3);
    echo "<br>";

    //Arrow function : là một cú pháp ngắn gọn hơn cả anonymous function
    echo "<h3>Arrow function</h3>";
    $e = 1;
    $t = 2;
    $my = fn($h) => $e + $t + $h;
    echo $my(5);

    ?>
</body>

</html>