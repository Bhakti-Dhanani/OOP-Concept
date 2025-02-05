<?php
require_once("Constant.php");

//this is SRP class student handle only one student details responsibility
class Student{
    private $Name;
    private $Age;
    private $Course;
    private $Year;
    
    public function __construct($Name, $Age, $Course = DEFAULT_COURSE, $Year=DEFAULT_YEAR){
        $this->Name = $Name;
        $this->Age = $Age;
        $this->Course = $Course;
        $this->Year = $Year;
    }
    public function getDetails(){
        return "Name: $this->Name, Age:$this->Age, Course:  $this->Course, Year:$this->Year \n";
    }
}
//This is also SRP class college handle college related activities
class college{
    private $Students = [];
    public function addStudent(Student $Student){
        $this->Students[] = $Student;

    }
    public function listStudents(){
        echo "list of student ".COLLEGE_NAME."\n";
        foreach($this->Students as $Student){
            echo $Student->getDetails();
        }
    }
}
//open-close principale extend student without modifying 
class GraduatedStudent extends Student{
    public  function __construct($Name, $Age, $Course, $Year, $Titel){
        parent::__construct($Name, $Age, $Course, $Year);
        $this->Titel = $Titel;
    }
    public function getDetails(){
        return parent::getDetails(). "this is the title : $this->$title";
    }
}
//interface/liskow
interface printable{
    public function addPrintable();
}
class printablStudent extends Student implements printable{
    public function addPrintable(){
        echo "printing details".$this->getDetails();
    }
}
//dependency inversion principle
class School{
    private $student;
    public function __construct(Student $student){
        $this->student = $student;
    }
public function enStudent{
    echo "Enroling student ".$this->student->getDetails();
}
}
//instance of the object 
$s1 = new Student("bhakti","21");
$s2 = new GraduatedStudent("neha","22","CSE","2025","Software Developer");
$c1 =new college();
$c1->addStudents($s1);
$c1->addStudents($s2);
$c1->listStudents();
$p1= new printablStudent("drashti","22");
$p1->addPrintable();
$sc = new School($s1);
$sc->enStudents();

?>