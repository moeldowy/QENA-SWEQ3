<?php
//to comment one line use // before line
/* to comment block of code use /* before first line and *`/ after end of block*/

//echo("hello 1");
//print("welcome 1");
//print"welcome 2";
//echo is faster than print and echo can output multi elements but print can output just one element

//echo'hello 2 $name';
// variable properties are
// [declare place in memory + assign value + change (value + status + datatypes) + unset value ]
//constantproperties are
//[declare place in memory + assign value]
//php loose writing
$x= "ali";
/* datatypes
1- scalar datatypes [string - integer - boolean ...]
2- Compound Datatypes [array - object]
3- Special Datatypes [resource(file) + NULL]
*/

//echo"$x<hr>";
//echo gettype($x);

/*const NAME="mohammed";
const NAME="ali";
echo NAME;*/
$age="25";
//echo gettype($age);//return datatype
//settype($age,"integer");//settype method for change datatype
$age=(integer)"25";// casting method  for change datatype
//echo "<br>";
//echo gettype($age);//return datatype

function sum($x,$y){
    return $x+$y;
}
//echo sum(1,4);

function calc1(){
    return 1+5;
}
echo calc1();

echo"<hr>";

function calc2(){
    echo 1+5;
}//it return null
echo calc2();
echo"<hr>";
//echo gettype(calc1());
//echo gettype(calc2());
//echo (integer)calc2()+5;
$age=50;
/*if($age<10){
    echo "Yes my age is less than 50 years";
}else{
    echo "no";
}*/
/*for($i=0;$i<$age;$i++){
    echo"$i";
}*/
/*switch ($age){
    case 5:
        echo "age is 5";
        break;
    case 10:
        echo "age is 10";
        break;
    case 20:
        echo "age is 20";
        break;
    default:
        echo "none of above";
}*/
$name;
/*if(is_scalar($name)){
    echo"yes";
}else{
    echo "no";
}*/
$name=5;
if(empty($name)){
    echo" is empty";
}else{
    echo"none empty";
}
echo"<hr>";
if(isset($name)){
    echo" yes isset";
}else{
    echo"none isset";
}