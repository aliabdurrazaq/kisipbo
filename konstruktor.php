<?php 

class Myclass {
    public function __construct() {
        echo "konstruktor dipanggil";
    }
}

$obj = new myclass();


echo "<br>";

class parentclass {
    public function display() {
        echo "aku adalah penghafal quran";
    }
}

class childclass extends parentclass {
    public function display() {
        parent::display();
        echo "dan ingin menjadi imam besar madinah";
    }
}

$obj = new childclass();
$obj->display();

echo "<br>";

class hewan {
    protected $name;

    public function __construct($name) {
        $this->name= $name;
    }

    public function makesound() {
        echo "gukguk";

    }


}

class dog extends hewan {
    public function makesound(){
        echo $this->name . "nama anjing saya!";

    }
}

$dog = new dog("paul");
$dog->makesound();

echo "<br>";

class A {
    public function sayhello() {
        echo "hello from A";
    }
}

class B extends A {
    public function sayhello() {
        echo "hello from B";
    }
}

$obj = new B();
$obj ->sayhello();

echo "<br>";

$a = 10;

if ($a < 10) {
    echo "kurang dari 10";
 } elseif ($a == 10) {
        echo "sama dengan 10";
    } else {
        echo "lebih dari 10";
    }

echo "<br>";

foreach (range(0, 4) as $num) {
    echo $num . " ";
}

echo "<br>";

$z = 5;

switch ($z) {
    case 1:
        echo "satu";
        break;
    case 5:
        echo "lima";
        break;
    default:
        echo "tidak dikenal";        
}

echo "<br>";

for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        continue;
    }
    echo $i . " ";
}

echo "<br>";

$y = 10;

do {
    echo "nilai: $y ";
    $y--;
} while ($y > 7);

echo "<br>";

$x = 1;

while ($x <=3) {
    echo "angka; $x ";
    $x++;
}

echo "<br>";

$nilai = 85;

if ($nilai >= 90) {
    echo "A";
} elseif ($nilai >=80) {
    echo "B";
} elseif ($nilai >= 70) {
    echo "C";
} else {
    echo "D";
}

echo "<br>";

for ($i = 0; $i < 5; $i++) {
    if ($i == 3) {
        break;
    }
    echo $i . " ";
}




?>