<?php
// echo ord('a');
// echo "\n";
// echo chr(97);
// echo "\n";
// echo ord('A');
// echo "\n";
// echo chr(65);

//ascii code 
$ascii="Hello dost, I realy realy love you";
for($i=0;$i<strlen($ascii);$i++){
    echo ord($ascii[$i])." ";
}
echo "\n";
echo "\n";
$numbers= array(72, 101, 108, 108, 111, 32, 100, 111, 115, 116, 44, 32, 73, 32, 114, 101, 97, 108, 121, 32, 114, 101, 97, 108, 121, 32, 108, 111, 118, 101, 32, 121, 111, 117 );
foreach($numbers as $number){
    echo chr($number);
}

?>