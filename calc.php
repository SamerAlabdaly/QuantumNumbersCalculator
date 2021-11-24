<?php

/*
 it's November the 12th, 7:38pm.
 i feel like i'm a legend bcuz it took me soo long to finish this shit.
 Feel free to play around with it.

  Sincerely, 𝒮𝒶𝓂𝑒𝓇 𝒜𝓁𝒶𝒷𝒹𝒶𝓁𝓎.
*/


$length = array('s' => 2, 'p' => 6,'d' => 10,'f' => 14);
$sum = array('s' => 1,'p' => 2, 'd' => 3, 'f' => 4);
$orbitalsCount = array(
 "s" => 1,
 "p" => 3,
 "d" => 5,
 "f" => 7
);
$orbitalsNums = array(
 "s" => array(1 => 0, 2 => 0),
 "p" => array(1 => "+1", 2 => 0, 3 => -1, 4 =>  "+1", 5 => 0, 6 => -1),
 "d" => array(1 => "+2", 2 => "+1", 3 =>  0, 4 => -1, 5 => -2, 6 => "+2", 7 => "+1", 8 => 0, 9 => -1, 10 => -2),
 "f" => array(1 => "+3", 2 => "+2", 3 =>  "+1", 4 =>  0, 5 => -1, 6 => -2, 7 => -3, 8 => "+3", 9 => "+2", 10 => "+1", 11 => 0, 12 => -1, 13 => -2, 14 => -3)
);

$stages = array(
 's' => array(array(1,2), array(3,4), array(11,12), array(19,20), array(37,38), array(55,56), array(87,88)),
 'p' => array(array(5,6,7,8,9,10), array(13,14,15,16,17,18), array(31,32,33,34,35,36), array(49,50,51,52,53,54), array(81,82,83,84,85,86)),
 'd' => array(array(21,22,23,24,25,26,27,28,29,30), array(39,40,41,42,43,44,45,46,47,48), array(71,72,73,74,75,76,77,78,79,80), array(103,104,105,106,107,108,109,110,111,112)),
 'f' => array(array(57,58,59,60,61,62,63,64,65,66,67,68,69,70), array(89,90,91,92,93,94,95,96,97,98,99,100,101,102))
);

function func($name,$atomic,$suplice,$result)
{
 $resultInTheNewWay = array($name => $atomic);
 array_splice($result, 0,$suplice);
 foreach ($result as $key => $value)
 {
  $resultInTheNewWay[$key] = $value;
 }
 return $resultInTheNewWay;
}

if(isset($_GET['numberInput']))
{
 $AtomicNumber = (int)$_GET['numberInput'];
 $result = array();
 for($i = 0;$AtomicNumber >= $i;$i++)
 {
  foreach ($stages as $key => $value)
  {
   foreach ($value as $key1 => $value1)
   {
    foreach ($value1 as $value2)
    {
     if($value2 == $i)
     {
      $result[strval($key1 + $sum[$key]).$key] += 1;
     }
    }
   }
  }
 }
 $hejra = false;
 if($result["4d"] == 4 || $result["4d"] == 9) {
  $result["5s"] -= 1;
  $result["4d"] += 1;
 }
 else if($result["3d"] == 4 || $result["3d"] == 9)
 {
  $result["3d"] += 1;
  $result["4s"] -= 1;
 }

 if ($result["1s"] == 2 && $AtomicNumber > 2 && $AtomicNumber <= 10)
 {
  $resultInTheNewWay = func("[He]",2,1,$result);
 }
 else if ($result['2p'] == 6 && $AtomicNumber > 10 && $AtomicNumber <= 18)
 {
  $resultInTheNewWay = func("[Ne]",10,3,$result);
 }
 else if (($result['3p'] == 6 && $AtomicNumber > 18 && $AtomicNumber <= 38) or $AtomicNumber == 42 or $AtomicNumber == 47)
 {
  $resultInTheNewWay = func("[Ar]",18,5,$result);
 }
 else if ($result['4p'] == 6 && $AtomicNumber > 38 && $AtomicNumber <= 54)
 {
  $resultInTheNewWay = func("[Kr]",38,9,$result);
 }
 else if ($result['5p'] == 6 && $AtomicNumber > 54)
 {
  $resultInTheNewWay = func("[Xe]",54,11,$result);
 }
 else if ($AtomicNumber <= 2)
 {
  $resultInTheNewWay = $result;
 }

 $LastShell = array("orbital" => array_key_last($result),"electrons"=>end($result));
 $n = substr($LastShell["orbital"],0,1);
 $l = $sum[substr($LastShell["orbital"],1)] - 1;
 $ml = $orbitalsNums[substr($LastShell["orbital"],1)][$LastShell["electrons"]];
 if ($LastShell["electrons"] / $orbitalsCount[substr($LastShell["orbital"],1)] <= 1)
  $ms = "+(1/2)";
 else if ($LastShell["electrons"] / $orbitalsCount[substr($LastShell["orbital"],1)] > 1)
  $ms = "-(1/2)";
}
