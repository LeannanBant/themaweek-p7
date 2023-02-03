<?php
include "classes/person.php";

$umut = new Person("Umut",18,"M");
$umut->setGender("W");
//echo $umut->get_name();
//echo $umut->get_age();
//echo $umut->get_gender();

$demirel = new Person("Demirel",22,"M");
$Basel = new Person("Basel",33,"M");
$Hosari = new Person("Hosari",17,"W");

$Basel->getGegevens();

$Charlie = new Person("Charlie",25,"M");
$Charlie->setAge("26");

$Charlie->getGegevens();

?>