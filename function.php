<?php
function display(){
    echo"this is our first php function <br>";
}
display();
display();
display();
display();
display();
display();
function add($a,$b,$c){
    $d=$a+$b+$c;
    echo"sum=".$d;
}
add(10,20,23);
echo"<br>";
function mul($a,$b,$c){
    $d=$a*$b*$c;
    echo"multiply=".$d;
}
mul(2,3,4)
?>