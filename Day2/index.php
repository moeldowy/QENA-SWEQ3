<?php
/* Array declration
$x=array();
$y=[];*/
//front + back + DB() extra (API(json) or xml(xml code))
// [0]=>"ahmed"
//  Key=>Value
//indexed array
$names=["ahmed","mohammed","ali"];
//echo $names[0];
// please print all array element we called array $names
//var_dump($names);
//echo $names; false code
//echo count($names);
/*$namesCount=count($names);
for($i=0;$i<$namesCount;$i++){
    echo $names[$i]."<br>";
}*/
/*foreach ($names as $name){
    echo $name."<br>";
}*/

//associtive array
/*$family1=["Father"=>"ahmed","Son"=>"mohammed","sibling"=>"ali"];
//var_dump($family);
//echo $family[0];//false code
//echo $family["Father"];
//=> Fat arrow
//-> object arrow
foreach ($family1 as $key=>$member){
    echo "$key: $member"."<br>";
}*/
$family2=["Father"=>"ahmed","Sons"=>["son1"=>"mohammed","son2"=>"mahmoud"],"sibling"=>"ali"];
//echo $family2["Sons"]["son2"];
$family2=["Father"=>"ahmed","Sons"=>["mohammed","mahmoud"],"sibling"=>"ali"];
/*
 * global scoop [global]
 * local scoop
 * function (parameters) scoop
 * static scoop
 * */
$age=25;//global scoop
/*function addOneYear($age){
    //$age=22;
    //global $age;
    return $age +1;
}
echo addOneYear(35);*/
function addOneYear(){
    static $age=22;
    //global $age;
    $age++;
    return $age;

}
// Cron Job (Server Timer) -> run php script [echo addOneYear()."<hr>";]
echo addOneYear()."<hr>";//call in 2021
echo addOneYear()."<hr>";//call in 2022
echo addOneYear()."<hr>";//call in 2023
