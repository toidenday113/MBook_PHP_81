<?php 
    /*echo "Chào bạn đến với lập trình PHP<br>";
    echo "Xin chào Việt Nam Xin đẹp"; */

    // Khai báo biến

    $a = "Chào Bạn"; // string
    echo 'Trước $a: '. gettype($a);
    $a = 2; // int
    echo ' - Sau $a: ' . gettype($a);

    define("HANG_SO", 10); // Khai báo hằng số, không thay đổi giá trị trong quá trình thực thi chương trình
    echo "<br>";
    echo HANG_SO;
    echo "<br>";
?>