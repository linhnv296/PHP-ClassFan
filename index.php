<?php
include 'fan.php';
$quat1 = new Fan();
echo $quat1->toString()."<br>";
$quat1->setSpeed(3);
$quat1->setColor("yellow");
$quat1->setRadius(10);
$quat1->isOn("on");
echo $quat1->toString();