<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function PHP</title>
</head>
<body>
    <h1>FUNCTION PHP</h1>

    <?php
    
    //-------------------fungsi-----------------
/*
    function panggil(){
        echo '--------------------';
        echo 'BELAJAR FUNGSI';
        echo '--------------------';
    }
    panggil();
*/
    
    //------------------parameter----------------
/*
    function print_text($text, $angka){
        $text = 'tes '. $text . " " . $angka;
        echo '--------------------';
        echo $text;
        echo '--------------------';
    }

    function jarak(){
        echo '<br>';
    }

    print_text('Belajar', 1);
    jarak();
    print_text('Function',2);
    jarak();
    print_text('PHP',3);
    jarak();
*/
    //----------------return----------------
/*
    function menghitung($x, $y){
        $z = $x + $y;
        return $z;
    }

    $hasil = menghitung (3,4)*10;
    echo 'Hasil dari penjumlahan '. $hasil;
*/
    //-----------------scope-------------------
/*
    $a = 2;
    $b = 5;

    function menghitung (){
        //global $a,$b;
        //$c = $a+$b;

        $c = $GLOBALS['a']+$GLOBALS['b'];
        return $c;
    }

    echo menghitung();
*/
    //---------------------anonymous function--------------
/*
    $ngetik = function(){
        echo 'selamat datang';
    };

    $ngetik();
*/
/*
    $ngetik = function($text){
        echo $text;
    };

    $greeting = $ngetik;

    $greeting('Selamat datang kalian !!');
*/
    //-------------callback function------------

    function berteriak($callback){
        echo 'HALOOOOOOOOOO<br>';
        //$callback();

        if(is_callable($callback)){
            call_user_func($callback,'selamat datang');
        }else{
            echo 'dia bukan fungsi';
        }
    }

    // berteriak(function(){
    //     echo 'saya anonymous function';
    // });

    $manggil = function($text){
        echo $text;
    };

    berteriak($manggil);

    ?>
</body>
</html>