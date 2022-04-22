<?php
// require_once 'robot.php';
// require_once 'orang.php';

//autoload
spl_autoload_register(function ($class_name){
    include $class_name . '.php';
});

//$robot1 = new robot;
//$robot1->bersuara();
//echo $robot1->berat_robot();

// $robot1 = new robot;
// $robot1->set_suara('ngik ngik kung');
// echo 'bunyinya.. ' . $robot1->get_suara() . '<br>';

// $robot2 = new robot;
// $robot2->set_suara('trang trang trang');
// echo 'bunyinya.. ' . $robot2->get_suara() . '<br>';

$robot1 = new robot('taraktakdung',30);
// $robot2 = new robot('ngiungngiung',20);
$robothewan = new robot_hewan('huaaamss',24);

echo 'beratnya...' .$robot1->get_berat(). '<br>';
//echo 'beratnya...' .$robot2->get_berat();

echo $robothewan->testing() . '<br>';
// echo $robothewan->get_kekuatan();

echo orang::$suara;

//chaining

$robot = new robot('testing',12);
$robot->set_suara('oke mantap')->set_berat(140);

echo $robot->suara . ' - ' . $robot->berat;

?>