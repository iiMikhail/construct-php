<?php

	class Person {
		public $name;
		public $city;
		public $hobby;
	
		public function __construct($name, $city, $hobby) {
			$this->name = $name;
			$this->city = $city;
			$this->hobby = $hobby;
		}
		public function story() {
			echo "Hello, my name is " . $this->name . ", i'm from " . $this->city . " and i like " . $this->hobby . "";
		}
	}
	$person1 = new Person('Mikhail', 'Khabarovsk', 'web-develop');
	$person1->story();

?>