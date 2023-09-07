<?php
 // student: stuID, stuName, cgpa;
 // constructor
 // create object
 
 class student{
	// student: stuID, stuName, cgpa;
	private $stuID, $stuName, $cgpa;	 
	// constructor 
	public function __construct($f1, $f2, $f3) {
		 $this->stuID= $f1;
		 $this->stuName=$f2;
		 $this->cgpa=$f3;
	}
	public function getID(){
		return  $this->stuID;
	}	
	public function setID($id){
		 $this->stuID=$id;
	}	
	public function display(){
		echo "<br>ID: ". $this->stuID.
			"<br>Name: ". $this->stuName.
			"<br>cgpa: ". $this->cgpa."<br>";
	}
}
 // create object
 $peter = new student("WWWW1","v2","v3");    echo $peter->getID();
 $peter->setID("DIT0001");                   echo $peter->getID();
 //output
 $peter->display();
?>