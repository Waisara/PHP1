<?php
$FirstName = $_POST ['FirstName'];
$Password = $_POST ['Password'];
$Comment = $_POST ['Comment'];
?>
<!DOCTYPE html>
<html>
    <header>
        <title> </title>
</header>
<body>
    <form action = "formget.php" method ='POST'>
        First Name : <input type="text" name="firstname"><br>
        Password : <input type="text" name="Password"><br>
        Comment : <textarea name="Comment"></textarea><br>
        <input type="submit" value="SEND"><br>
</form>


</body>
</html>

<?php 
if(isset($FirstName)){
    echo "<h3>ข้อมูลที่รับเข้ามา</h3>";
    echo $FirstName;
    echo'<br>';
    echo $Password;
    echo'<br>';
    echo $Comment;
    echo'<br>';
}//End isset
else {
    echo "ไม่มีข้อมูล";
}
?>