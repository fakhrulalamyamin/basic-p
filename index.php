<?php
/**
// Class 01
echo 'Hello from shikhun.net php course...';
print('Hello from shikhun.net php course...');


// Class 02 : Variable

$welcome_text = "Hello from shikhun.net basic php course";

echo $welcome_text . "\n";


$welcome_text = "Welcome to shikhun.net basic php course";

echo $welcome_text . "\n";

// Task One : Write 3 variable

$name = "Md Fakhrul Alam Yamin";

echo $name . "\n";

$birth_year = 2000;

echo $birth_year . "\n";

$address = "Kishorganj, Nilphamari";

echo $address . "\n";


// Class 03 : Constant

define('PI', 3.1416);

echo PI;


// Class 04 : Mathamatical Operation

$number1 = 100;
$number2 = 3;

echo $number1 + $number2 . "\n"; // add

echo $number1 - $number2 . "\n"; // substraction

echo $number1 * $number2 . "\n"; // multiplication

echo $number1 / $number2 . "\n"; // divition

echo $number1 ** $number2 . "\n"; // exponential

echo $number1 % $number2 . "\n"; // reminder or modulas


// Class 05 : Operators

// $name = 'Fakhrul';

// $name .= ' Yamin';

// echo $name;

var_dump(10 > 5); // true

echo '<br>';

var_dump(10 >= 5); // true

echo '<br>';

var_dump(10 < 5); // false

echo '<br>';

var_dump(10 <= 10); // true

echo '<br>';

var_dump(10 == '10'); // true

echo '<br>';

var_dump(10 != 9); // true

echo '<br>';

var_dump(10 === "10"); // false

echo '<br>';

var_dump(10 !== '10'); // true



// Class 06 : Conditions

$day = 'Saturday';

if ('Friday' === $day || 'Saturday' === $day) {
    echo 'Today is holiday!' . PHP_EOL;
} else {
    echo "{$day} is not holiday.";
}

$age = 20;

if ($age >= 13 && $age <= 19) {
    echo 'You are a teenager!' . PHP_EOL;
} else {
    echo "You aren't a teenager" . PHP_EOL;
}



// Class 07 : Multiple level condition and Array
$day = 'Thursday';

if ('Friday' === $day || 'Saturday' === $day) {
    echo 'Today is holiday!';
} elseif ('Thursday' === $day) {
    echo 'Hurrey! Tomorrow is holiday.';
} else {
    echo "{$day} is not holiday.";
}

echo PHP_EOL;

$my_details = ['Fahrul', 'Yamin', 21, 5.7];

var_dump($my_details);

// Class 08 : Associative Array

$my_details = [
    'first_name' => 'Fahrul',
    'last_name' => 'Yamin',
    'age' => 21,
    'height' => 5.7
];

var_dump($my_details);


// Class 09 : Multi Dimentional Array

$my_details = [
    'first_name' => 'Fahrul',
    'last_name' => 'Yamin',
    'age' => 21,
    'address' => [
        'present_address' => [
            'street_address' => 'House 1, Road 1',
            'upzilla' => 'Kishorganj',
            'district' => 'Nilphamari',
            'country' => 'Bangladesh'
        ],
        'parmanent_address' => [
            'street_address' => 'House 1, Road 1',
            'upzilla' => 'Kishorganj',
            'district' => 'Nilphamari',
            'country' => 'Bangladesh'
        ]
        ],
    'mobile' => [
        'country_prefix' => '+880',
        'unique_number' => '1765922612'
    ]
];

echo $my_details['address']['present_address']['country']; // Bangladesh


// Class 10 : Loops (While Loop)

$i = 1;

while( $i <= 10) {
    echo $i . ' x 7 = ' . $i * 7 . PHP_EOL;
    $i++;
}



// Class 11 : Loops (Do While Loop)

$i = 1;

do {
    echo $i . ' x 7 = ' . $i * 7 . PHP_EOL;
    $i++;
} while ( $i <= 10 );



// Class 12 : Loops (For Loop)

for ($i = 1; $i <= 10; $i++) {
    echo $i . ' x 8 = ' . $i * 8 . PHP_EOL;
}


// Class 12 : Loops (Foreach Loop)

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach($numbers as $key => $value) {
    echo $key . " : " . $value . ' x 5 = ' . $value * 5 . PHP_EOL;
}



// Class 13 : Function

function sum($num1, $num2) {
    return $num1 + $num2;
}

echo sum(20, 15);

*/

// Class 15 : 