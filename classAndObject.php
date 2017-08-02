<?php

class machine {
	private $color = "red";
	private $name = "bmw";
	function printColor(){
		echo "<b>Машина</b>:<br>";
		$this->color = "green";
		echo "Цвет"." - ".$this->color;
		echo "<br>";
	}
	function printName(){
		$this->name = "porshe";
		echo "Фирма"." - ".$this->name;
		echo "<br>";
		echo "<br>";
	}
}

$obj1 = new machine();
$obj1->printColor();

$obj2 = new machine();
$obj2->printName();


class TV {
	private $diagonal = "102";
	private $name = "lg";
	function printDiagonal(){
		echo "<b>Телевизор</b>:<br>";
		$this->diagonal = "152";
		echo "Диагональ"." - ".$this->diagonal;
		echo "<br>";
	}
	function printName(){
		$this->name = "samsung";
		echo "Фирма"." - ".$this->name;
		echo "<br>";
		echo "<br>";
	}
}

$obj1 = new TV();
$obj1->printDiagonal();

$obj2 = new TV();
$obj2->printName();

class pen {
	private $length = "12";
	private $lineThickness = "0.6";
	function printlength(){
		echo "<b>Шариковая ручка</b>:<br>";
		$this->length = "10";
		echo "Длина"." - ".$this->length;
		echo "<br>";
	}
	function printlineThickness(){
		$this->lineThickness = "0.7";
		echo "Ширина линии"." - ".$this->lineThickness;
		echo "<br>";
		echo "<br>";
	}
}

$obj1 = new pen();
$obj1->printlength();

$obj2 = new pen();
$obj2->printlineThickness();

class duck {
	private $delegate = "Настоящие утки";
	private $weight = "4";
	function printdelegate(){
		echo "<b>Утка</b>:<br>";
		$this->delegate = "Древесные утки";
		echo "Представитель"." - ".$this->delegate;
		echo "<br>";
	}
	function printweight(){
		$this->weight = "6";
		echo "Вес"." - ".$this->weight."(кг)";
		echo "<br>";
		echo "<br>";
	}
}

$obj1 = new duck();
$obj1->printdelegate();

$obj2 = new duck();
$obj2->printweight();

class product {
	private $quantity = "4";
	private $price = "80";
	function printquantity(){
		echo "<b>Товар</b>:<br>";
		$this->quantity = "8";
		echo "Количество"." - ".$this->quantity;
		echo "<br>";
	}
	function printprice(){
		$this->price = "160";
		echo "Цена"." - ".$this->price."(р)";
		echo "<br>";
		echo "<br>";
	}
}

$obj1 = new product();
$obj1->printquantity();

$obj2 = new product();
$obj2->printprice();



?>