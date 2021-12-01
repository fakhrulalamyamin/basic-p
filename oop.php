<?php 
/*
// Class 01 : Class, Method, Object
class Person {
    public $name = 'Yamin';
    public $age = 21;

    public function hello($num) {
        echo "{$num} is a beautiful number.";
    }
}

$obj = new Person;
echo $obj -> age;
echo $obj -> hello(12);


// Class 02 : $this keyword

class Student {
    public $name;
    public $age;
    public $cgpa;

    // Getter
    public function get_name() {
        return $this -> name;
    }
    
    public function get_age() {
        return $this -> age;
    }
    
    public function get_cgpa() {
        return $this -> cgpa;
    }

    // Setter
    public function set_name($name) {
        $this -> name = $name;
    }
    
    public function set_age($age) {
        $this -> age = $age;
    }
    
    public function set_cgpa($cgpa) {
        $this -> cgpa = $cgpa;
    }
}

$yamin = new Student;

$yamin -> set_name('Yamin');
$yamin -> set_age(21);
$yamin -> set_cgpa(3.5);

echo $yamin -> get_name() . PHP_EOL;
echo $yamin -> get_age() . PHP_EOL;
echo $yamin -> get_cgpa() . PHP_EOL;



// Class 03 : Inheritence

class Boro_bari {
    public $members = 4;
    public $male = 2;
    public $female = 2;

    public function bongsho() {
        return 'YoYo Bongsho';
    }
}

class Choto_bari extends Boro_bari {
    public $parent_access = true;
}

$family = new Choto_bari;

echo $family -> female;



// Class 04 : Access Modifier

// Public Property can be accessed from anywhere
// Private property can be accessed from only the class
// Proteched property can be accessed from the class and interited class

class Random {
    public $num1 = 200;
    private $num2 = 400;
    protected $num3 = 600;

    private function olele() {
        return $this -> num2;
    }

    public function kulu() {
        return $this -> olele();
    }
}

class Yoyo extends Random {
    public function khaice()
    {
        return $this->num3;
    }
}

$obj = new Random;

// echo $obj -> kulu();

echo (new Yoyo) -> khaice();



// Class 05 : Class Constant

class Test {
    protected const NAME = 'Yamin';

    public function omg()
    {
        return self::NAME;
    }
}

class Test2 extends Test {
    public function omg2()
    {
        return self::NAME;
    }
}

// echo Random::NAME;

$random = new Test2;
echo $random -> omg2();


// Class 06 : Preventing Method overwriting in child class

class Test {
    public final function any_name()
    {
        return "My name is Yamin";
    }
}

class Test2 extends Test {
    public function any_name()
    {
        return "Yes it is changed";
    }
}

$random = new Test2;

echo $random -> any_name(); // it throw an error.



// Class 07 : Magic method __construct
// Class 08 : Magic method __toString

class Student {
    public $name;
    public $age;

    public function get_name()
    {
        return $this->name;
    }

    public function get_age()
    {
        return $this->age;
    }

    private function set_name($name)
    {
        $this->name = $name;
    }

    private function set_age($age)
    {
        $this->age = $age;
    }

    function __construct($name, $age)
    {
        $this->set_name($name);
        $this->set_age($age);
    }

    public function __toString()
    {
        // echo "Hello, {$this->get_name()}. Your age is {$this->get_age()}";
        return "Hello, " . $this->get_name() . ". Your age is " . $this->get_age() . ".";
    }
}

$random = new Student('Yamin', 21);

// echo $random -> get_name();
// echo $random -> get_age();

echo $random;


// Class 09 : pass data to parent class from child class

class Student {
    public $name;

    function __construct($name = 'Yamin')
    {
        $this->name = $name;
    }
}

$random = new Student;

echo $random -> name;

class Student {
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}

class Test extends Student {
    public $age;

    function __construct($name, $age)
    {
        $this->age = $age;
        parent::__construct($name);
    }
}

$hello = new Test('Yamin', 21);

echo $hello -> name;
*/

// Class 10 : Static method and property

class Foo {
    public static $name = 'Yamin';

    protected static function hello()
    {
        return 'I am a static method made by ' . self::$name;
    }
}

class Test extends Foo {
    public function yes() {
        return parent::hello();
    }
}

echo (new Test)-> yes();