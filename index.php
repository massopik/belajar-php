<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Hello PHP !!</h1> <br>

    <?php 
        // echo "<h1>Belajar PHP</h1>";

        // $text = "halo semua !!";

        // // echo strlen("$text");

        // $kotak = array('anjing','kura-kura','babi');
        // $nama = ['opik','rendy','twinda'];
        // // print_r($kotak);
        // // echo $nama[2];
        // sort($kotak);
        // print_r($kotak);

        //assosiative array
        //  $data = array( "nama"=>"Taufik" ,
        //                 "umur"=> 24 ,
        //                 "pekerjaan" => "pengacara"
        //          );
        //  $data2 = array( "istri"=>"belum ada" ,
        //                 "teman"=> 10000
        //          );

        // // // print_r($data); 
        // // $data['nama'] = "Muhammad Taufik Faturrahman";    
        // // echo "namanya adalah " . $data['nama'] . "<br>";
        // // echo "pekerjaannya adalah " . $data['pekerjaan'];
        // //----------------------------------------------------------------

        // //print_r(array_values($data));
        // //print_r(array_keys($data));
        // print_r(array_merge($data, $data2));
        //-------------------MULTI DIMENSI ARRAY-------------------------------

        $data = array (
                    array("programmer", "24", "rajin"),
                    array("designer", "22", "malas"),
                    array("manage", "30", "kerajinan")
        );

        //00,01,02
        //10,11,12
        //20,21,22
        
        print_r($data[1][2]);

    ?>

</body>
</html>