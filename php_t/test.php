<?php
	

// $x = 10;
// $y = $x;
// $y = 20;

// echo $y;
// echo $x;


// $x = 10;
// $y = &$x;
// $y = 20;
// echo $y;
// echo $x;

class Pet {
	public $type = "unknown";
	public $name;

	function __construct($type, $name){
		$this->type = $type;
		$this->name = $name;
		// function Pet -  синоним конструктора.Достаточно назвать метод именем класса
	}

	function say($word){
		echo $this->name . " said $word";
		$this->drawline();
	}

	function drawline(){
		echo "<hr>";
	}

	function __destruct(){
		// echo $this->name . " removed";
		echo "Object deleted\n";
	}
}


$cat = new Pet("cat", "Murzik");
$dog = new Pet("dog", "Tuzik");

$cat->say("Myau");
$dog->say("Gav");



// echo $cat->type;
// echo $dog->name;

// echo gettype($cat);
// echo is_object($dog);



// class SuperClass {
// 	function functionName(){
// 		echo "<p>Вызвана функция " . __FUNCTION__;
// 	}

// 	function className(){
// 		echo "<p>Используем класс " . __CLASS__;
// 	}

// 	function methodName(){
// 		echo "<p>Вызван метод " . __METHOD__;
// 	}

// 	function numberLine(){
// 		echo "<p>You r on line " . __LINE__;
// 	}

// 	function dir(){
// 		echo "<p>Directory of file " . __DIR__;
// 	}

// 	function traitF(){
// 		echo "<p>The name of trait is " . __TRAIT__;
// 	}

// 	function nameSpac(){
// 		echo "<p>The name of space " . __NAMESPACE__;
// 	}
// }

// $obj = new SuperClass();

// $obj->functionName();
// $obj->className();
// $obj->methodName();
// $obj->numberLine();
// $obj->dir();
// $obj->traitF();
// $obj->nameSpac();
// echo PHP_OS;
// echo 'Current PHP version: ' . phpversion();