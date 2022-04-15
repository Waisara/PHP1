<?php

function hello (){
    echo"Hello <br>";
}
function goodbye(){
    echo"Goodbye <br>";
}

for($i=0;$i<11;$i++){
    if($i<10){
        hello(); 
    } else{
        goodbye();
    }
   
}
?>