<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>ตรวจสอบรุ่นนักวิ่ง</h1>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" name="mainForm">
	กรุณากรอกปีเกิด (พ.ศ.) <input type="text" name="txtBirth" />
    <input type="submit" value="ค้นหา" />
<form>
<?php
	$birthYear =  (isset($_POST['txtBirth'])) ? $_POST['txtBirth'] : '';
	$currentYear = date("Y")+543 ;

    if($birthYear != ""){
    
      $age = $currentYear - $birthYear;
      echo "<h2>อายุของนักกีฬา : $age </h2>";
      echo "<hr/>";
      echo "<h4>รายการรุ่นที่สามารถลงได้ :</h4>";
        if($age<20){ 
          echo "<p>- อายุต่ำกว่า 20 ปี</p>";
          echo "<p>- ไม่จำกัดอายุ</p>";

        }else if($age>=20 && $age<30) {
          echo "<p>- อายุ 20 ปีขึ้นไป แต่ไม่เกิน 30 ปี</p>";
          echo "<p>- ไม่จำกัดอายุ</p>";
        }else {
          echo "<p>- ไม่จำกัดอายุ</p>";
        }
     }
?>
</body>
</html>