<?php


$acceptN=$acceptP=$acceptE=$acceptS1=$acceptS2=$acceptPh=$acceptCom=$acceptCI=$acceptR=$acceptZip=$acceptU=false;
$acceptCom=true;
$acceptN=$acceptP=$acceptE=$acceptS1=$acceptS2=$acceptPh=$acceptCom=$acceptCI=$acceptR=$acceptZip=$acceptU=true;
$acceptCom=false;
$accepteness=array($acceptN,$acceptP,$acceptE,$acceptS1,$acceptS2,$acceptPh,$acceptCom,$acceptCI,$acceptR,$acceptZip,$acceptU);
foreach ($accepteness as $val) {
    if (!$val == true) {
        echo $val;
        echo"<h1>stop</h1>";
        break;
    }
}