<?php
//parameter ปกติ
$data2=0;
//parameter array
$data[0]=5;
$data[1]=10;
$data[2]=20;
$data[3]=30;
$data[4]=40;
//สร้าง parmeter array รวม
$cars = array("Volvo", "BMW", "Toyota");
//associative array
$age= array ("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//Two-dimensional Arrays
$cars2 = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15),
);

//print ปกติ
echo $data2;
echo "<br>";
//print array
echo $data[0];
echo "<br>";
echo $data[1];
echo "<br>";
echo $data[2];
echo "<br>";
echo $data[3];
echo "<br>";
echo $data[4];
echo "<br>";

for($i=0;$i<5;$i++){
    echo $data[$i]."<br>";
}

for($c=0;$c<3;$c++){
    echo $cars[$c]."<br>";
}
$count_car=count($cars);
for($c=0;$c<3;$c++){
    echo $cars[$c]."<br>";
}
echo " Peter is" . $age['Peter'] . "years old. <br>";
echo " Ben is" . $age['Ben'] . "years old. <br>";
echo " Jop is" . $age['Joe'] . "years old. <br>";


echo $cars2[0][0].": In stock: ".$cars2[0][1].", sold: ".$cars2[0][2].".<br>";
echo $cars2[1][0].": In stock: ".$cars2[1][1].", sold: ".$cars2[1][2].".<br>";
echo $cars2[2][0].": In stock: ".$cars2[2][1].", sold: ".$cars2[2][2].".<br>";
echo $cars2[3][0].": In stock: ".$cars2[3][1].", sold: ".$cars2[3][2].".<br>";

for($row=0; $row <3 ;$row++){
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}

sort($cars);
echo($cars);
/*
การบ้านครั้งที่ 2
rsot()
asot()
ksor()
arsor()
krsor()
*/
?>