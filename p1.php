<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //viết hàm bằng function
    echo"<h3>Viết hàm bằng function</h3>";
    $x =4;
    function foo($x) { 
        $x = 0 ;
        print "\$x inside function is $x.";
    }
    foo($x);
    echo"<br>";
    print "\$x outside function is $x.";
    echo"<br>";

    //Hàm có tham số và trả về kết quả
    echo"<h3>Viết hàm có tham số và trả về kết quả</h3>";
    function area($swith,$height){
        return $swith * $height;
    }
    echo "Area: " .area(10, 20);
    echo "<br>";

    //Hàm có tham số tuỳ chọn
    echo"<h3>Viết hàm có tham số tuỳ chọn</h3>";
    function myKey($u,$y =" Earth "){
        echo $u . $y;
    }
    myKey("Hello");
    //Đối số được đặt tên
    echo"<h3>Đối số được đặt tên</h3>";
    function myName($a , $b =2 , $c = 4){
        echo "$a,$b,$c";
    }
    myName(c : 3 , a: 1);
    echo "<br>";

    //Danh sách các tham số biến: hàm có thể được khai báo với nhiều đối số hơn
    //func_get_arg
    echo"<h3>Danh sách các tham số biến</h3>";
    function myTest(){
        $f = func_get_arg(0);
        $g = func_get_arg(1);
        $h = func_get_arg(2);
        echo $f . $g .$h;
    }
    myTest("hi","ha","ho");

    //func_num_args: nhận số lượng đối số được truyền vào
    //func_get_args: trả về một mảng chứa tất cả các đối số đó.
    echo"<h3>func_num_args và func_get_args</h3>";
    function myTest2(){
        $num = func_num_args();
        $args = func_get_args();
        for($i = 0 ; $i < $num;$i++){
            echo $args[$i];
        }
            
        
    }
    myTest2("ho","ha","he");
    ?>
</body>
</html>