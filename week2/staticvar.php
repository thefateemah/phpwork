<?php

function myNum(){
 static $x = 0;
 echo $x;
 $x++;
}
myNum();
echo "<br>";
myNum();
echo "<br>";
myNum();
?>