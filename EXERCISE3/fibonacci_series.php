
<?php

if(isset($_POST['num'])){
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
}
?>

