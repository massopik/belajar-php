<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

    <h1>LOOPING</h1>

    <?php
    
    //-------------Pengulangan----------------
    //for(variableawal(mulai); batas (syarat); perubahan)

    $hewan = ["anjing","kucing","cicak"];

    //---------------------for----------------------
/* 
    for ($i = 0; $i < count($hewan); $i++) {
        echo $hewan[$i];
        echo "<br>";
    }
*/
    //---------------foreach------------------------
/*
    foreach($hewan as $h) {
        echo $h;
        echo '<br>';
    }
*/
/*
    $data= ['nama' => 'Muhammad Taufik Faturrahman',
            'umur' => '24',
            'sifat' => 'pembangkang'];

        foreach($data as $key => $value) {
            echo $key . "<br>";
            echo $value . "<br>";
        }
*/

    //----------------------while---------------

    $i = 0;
/*
    while ($i < count($hewan)) {
        echo $hewan[$i]."<br>";
        $i++;
    }
*/
//-----------------------do while------------------
    do {
        echo $hewan[$i]."<br>";
        $i++;
    }while ($i < count($hewan));

    ?>
</body>
</html>