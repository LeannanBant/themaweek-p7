<?php

class Person
{
public $name;
private $age;
protected $gender;
public $isStudent;
public $avarageGrade;

function __construct(string $name, int $age, string $gender)
{
$this->name = $name;
$this->age = $age;
$this->gender = $gender;
//echo "A new Person-object has been created.";
//echo "The property name of this object is: $name";
}
    function setGender(string $gender) {
        $this->gender = $gender;
    }
    function get_gender() {
        return $this->gender;
    }
    function setName(string $name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function setAge(int $age) {
        $this->age = $age;
    }
    function get_age() {
        return $this->age;
    }
    function setIsStudent(bool $isStudent) {
        $this->isStudent = $isStudent;
    }
    function getIsStudent() {
        return $this->isStudent;
    }
    function setAvarageGrade(double $avarageGrade) {
        $this->avarageGrade = $avarageGrade;
    }
    function getAvarageGrade() {
        return $this->avarageGrade;
    }



}


