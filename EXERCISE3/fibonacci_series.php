
<?php

$num = $_POST['num'];

     $num;
     $fnum = 0;
     $snum = 1;

    echo "Fibonacci Series for $num: " . "$fnum " . " " . " $snum ";

    for ($i = 2; $i < $num; $i++) {  
            $next_num = $fnum + $snum;  
            $fnum = $snum;
            $snum = $next_num;
            echo $next_num . ", ";
        }

// Fibonacci series in php
// $first_num = 0;  
// $second_num = 1;  
// $n = 56; // Number of elements you want in the series
// echo "Fibonacci Series upto $n is: $first_num, $second_num";  

// for($i = 2; $i < $n; $i++) {  
//     $next_num = $first_num + $second_num;  
//     echo ", $next_num";  
//     $first_num = $second_num;  
//     $second_num = $next_num;  
// }  
?>

<!-- $num = $_POST['num'];

//     if(isset($_POST['submit'])) {
//         $num = $_POST['number'];
//         $s1 = 0; $s2 = 1; $i = 0;
//         echo "<br> Fibonacci series for <b>" . $num . "</b> are: <b>" . $s1 . "   ,   " . $s2. " </b>";
//         while($i < $num - 2) {
//             $nterm = $s1 + $s2;
//             $s1 = $s2;
//             $s2 = $nterm;
//             echo "<b>  ,   ". $nterm. " </b>  ";
//             $i++;
//         }
//     }
?> -->