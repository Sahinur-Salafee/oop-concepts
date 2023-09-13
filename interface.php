<?php

interface School {

    public function studentData();
    public function classTeacherData($id,$subject);
    public function classData();
}



class LowerSecondaryStudents implements School {

    function studentData()
    {
        echo 'Students Data';
    }

    function classTeacherData($id, $subject)
    {
        
    }

    function classData()
    {
        
    }
}

interface classTenStudents extends School {
    function totalHigherExaminee();
}

interface classNineStudents {
    function studentsList();
}

class classNine implements classNineStudents {
    function studentsList()
    {
        $student = ['Jamal','kamal','sajib'];
        echo $student[0].'<br>';
        echo $student[1].'<br>';
        echo $student[2];
    }
}

class higherSecondaryExaminee implements classTenStudents {

    function studentData(){}
    function classTeacherData($id,$subject){}
    public function classData(){}
    function totalHigherExaminee(){}

}

$student1 = new higherSecondaryExaminee();
echo $student1 instanceof classNineStudents;

$student2 = new classNine();
echo $student2 instanceof classNine . '<br>';
$student2->studentsList();

interface Arraytics {

    public function wordPressDev();
    public function frontendDev();
}

class WPdev implements Arraytics {
    public function wordPressDev(){}
    public function frontendDev(){}
}

interface WpMet extends Arraytics {
    public function wordPressDev();
    public function frontendDev();
}

