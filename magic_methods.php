<?php
class Student {

    private $name;
    private $age;
    private $class;

    function __construct($name='',$age='', $class='')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop)
    {
        return $this->$prop . '<br>';
    }

    // function getName() {
    //     echo $this->name . '<br>';
    // }

    // function setName($name) {
    //     $this->name = $name;
    // }

    // function getAge() {
    //     echo $this->age . '<br>';
    // }

    // function setAge($age) {
    //     $this->age = $age;
    // }

    // function getClass() {
    //     echo $this->class . '<br>';
    // }

    // function setClass($class) {
    //     $this->class = $class;
    // }


}

$student1 = new Student('Salafee',28,'HSC');
echo $student1->name;
echo $student1->age;
echo $student1->class;
// $student1->getName();
// $student1->getAge();
// $student1->getClass();
// $student2->setName('Wania');
// $student2->setAge(3);
// $student2->setClass('One');
// $student2->getName();
// $student2->getAge();
// $student2->getClass();