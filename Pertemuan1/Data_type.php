<?php
    //declare variabel
    // $ nama_variabel;
    $value;
    $string_data_type="string";
    $int_data_type= 10;
    $float_data_type = 10.5;
    $boolean_data_type = true;
    //cara1 untuk array
    $myarr=[1,2,3,4,"integer", true, 12.3];
    //cara 2
    $myarr2= array(1,2,3,4,"integer", true, 12.3);

    //tipe data obj
    $myobj =[
        "nama"=> "Josh",
        "semester"=> 1,
        "mahasiswa_aktif" => true
    ];
    //output (ecgo=output nilai suatu data/variabel, )
    // kalo mau gabungin pake titik (.)->concat->menggabungkan sesuatu
    // echo $string_data_type."\n";
    // echo $int_data_type."\n";
    // echo $boolean_data_type;
    //kalo mau pake echo buat arry dia mesti spesifik

    //output kedua,"print_r->dia bisa buat array
    print_r($myarr);
    print_r($myobj);

    //var_dump -> adalah salah satu cara untuk mengoutput value beserta tipe datanya.
    var_dump($myarr);
?>