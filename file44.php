<?php

require "vendor/autoload.php";

use Person\Worker;

class Student extends Worker
{
    //this student class inherits everything of the worker class
    public $school;
    
    public function setSchool($school)
    {
        $this->school = $school;
    }

    public function getSchool()
    {
        return $this->school;

    }
}

$s1 = new Student("daniel","male",15);
$s1->setSchool("Ashesi");
echo $s1->getSchool() . PHP_EOL;
echo $s1->getName();
