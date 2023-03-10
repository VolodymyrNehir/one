

<?php
$y = 1;
global $y;

function run ($i){
    return $run = $i;
};


for ($i = 0;$i<10;$i++){
    static $e = 1;
    $e ++;
    echo run($e + $y);
}

$array = ['Oleg','Iryna','Volodymyr','Alex'];
if(in_array('Iry2na', $array)){
    echo 'found';
}
foreach($array as $name){
    echo $name;
}
$str = 'hello world';
echo strlen($str). '<br>';
echo $sub = substr($str,0,5);
echo $new_str = str_replace('hello',' js',$str);
$explode =  explode(' ',$str);
$reduce =  array_reduce($explode[0], $explode[1]);
print_r($new = str_split($explode[0] . $explode[1]));
print_r($re = array_reverse($new));



?>
<?php
class Cars {
    public $brend;
    public $model;
    public $years;

    const DVUGUN = '2.0';

    function __construct($brend,$model,$years){
        $this->brend = $brend;
        $this ->model = $model;
        $this->years = $years;
    }

    function __destruct(){
        echo 'done';
    }
    public function showCar(){
        return 'the'. $this->brend . 'model in'. $this->model. 'years'. $this->years;
    }
}
//$car = new Cars();
//$car->brend = 'bmw';
//$car->model = '530';
//$car->years = '2009';
//echo $car->showCar();
class Bmw extends Cars {
    public $modeficashen;

    function __construct($mo,$model,$brend){
        $this->modeficashen = $mo;
        parent::__construct($model);
    }

}

//$m5 = new Bmw('m5');
//print $m5->modeficashen;
//
//$car2 = new Cars('opel', 'vectra','2000');
//echo $car2->showCar();
//print Cars::DVUGUN;


interface MyCars {
    public function hello();
}

interface MyCar {
    public function car();
};

class Opel implements MyCars,MyCar {
    public function hello(){
        return "hello ";
    }
    public function car(){
        return "Opel";
    }
}
$opel = new Opel();
echo $opel->hello();
echo $opel->car();

trait Logo{
    public function shw($string){
        echo $string;
    }
}

class Hi {
    use Logo;
}
$hell = new Hi();
$hell->shw('hello');


abstract class Fop {
    public $name;
    public $live;
}

class Vova extends Fop {
    function __construct($name, $live){
        $this->name = $name;
        $this->live = $live;
    }
}

$fopVova = new Vova('Vova','Lviv');
echo $fopVova->name;
echo $fopVova->live;

?>



<?php

date_default_timezone_set('Europe/Kiev'). "<br>";
echo date('Y:m:d', time() - 3600 *24);
echo date('H:i:s');
?>