<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Logika Di PHP</h1>

    <?php

    //--------------tipe data boolean------------
/*
    $hasil1=true;
    $hasil2=false;
*/

    //----------------if else--------------------
    //operator logika == === > >= <= < != && ||
/*
    $password = '1234';
    $password2 = '1234';

    if($password == $password2){
        echo 'anda berhasil masuk';
    } else {
        echo 'password salah';
    }
*/

    
//----------------else if-----------------------------
//---------------nested if------------------
//    $uang_programmer = 1000;
//    $keyboard = 3000;
//    $uang_teman = 4000;

    /*
    if ($uang_programmer >= $keyboard){
        echo 'dibeli';
    }elseif($uang_teman >= $keyboard){
        echo 'dibeli oleh designer ';

        if($uang_teman >= $keyboard * ($uang_teman / $keyboard)){
            echo (floor($uang_teman / $keyboard));
        }

    }else{
        echo 'engga cukup';
    }
*/
/*
if($uang_programmer>= $keyboard || $uang_teman >= $keyboard){
    echo 'bisa beli';
}else{
    echo 'tidak bisa beli';
}
*/

//switch case
    $nama = 'taufik';

    switch ($nama) {
        case 'ahmad';
            echo 'namanya ahmad';
            break;
        case 'rio';
            echo 'namanya rio';
            break;
        case 'taufik';
            echo 'namanya taufik';
            break;
        default:
            echo 'tidak ada yang benar';
    }

    ?>

</body>
</html>