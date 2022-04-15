<?php

function area ($base,$high){
    $result = 1/2*$base*$high;
    return $result;
}
$a =2; $b =3;
$triangle1 = area($a,$b);
echo "Area 1 = $triangle1 <br>";

?>