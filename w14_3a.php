//(a)    (i)    Create a PHP class named “RecycleItem” that contains the following:
//•    three attributes named “name”, “price” and “weight” that are only accessible within the class.
//•    A constructor method with three parameters named “name”, “price” and “weight” that are only accessible by any classes. 
//
The parameters “price” and “weight” hold default values of 0 and 0.1, respectively. Besides, the constructor will initialize the respective attribute with the parameter value.
//•    A method named “calculateTotal” that returns which are only accessible within the class. The method will calculate the total price of selling a particular recycled item by multiplying price and weight. 
//•    A toString method that are only accessible by any classes. The method will return a string that contains information such as name, weight, and total price.

//    (ii)    Write a PHP code to create an object of RecycleItem. Then, display the object’s information. 
  (15 marks)
 Award maximum 1 mark for class name
Award maximum 1 mark for attributes 
Award maximum 4 marks for constructor method
Award maximum 2 marks for calculate total method
Award maximum 3 marks for toString method
Award maximum 2 marks for creating object
Award maximum 2 marks for output

 <?php
 class  RecycleItem{ //1 mark
	 private $name, $price, $weight;//0.5+0.5 mark
	 public function __construct($name, $price=0, $weight=0.1){//4marks
		 $this->name=$name;
		 $this->price=$price;
		 $this->weight=$weight;
	 }
	 
	 private function calculateTotal(){//2marks
		 return ($this->price * $this->weight);
	 }
	 
	 public function __toString(){//1m
		 
		 return "Name: $this->name<br> //2m
				 Price: $this->price<br>
				Weight: $this->weight<br>
				Total price: $this->calculateTotal()";
	 }
 }//end class
  $paper= new RecycleItem("paper",1,10);//2 marks
  echo $paper;//2 marks
 ?>