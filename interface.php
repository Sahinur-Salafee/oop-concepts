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

class higherSecondaryExaminee implements classTenStudents {

    function studentData(){}
    function classTeacherData($id,$subject){}
    public function classData(){}
    function totalHigherExaminee(){}

}

$student1 = new higherSecondaryExaminee();
echo $student1 instanceof classNineStudents;