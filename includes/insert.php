<?php

    require ('vendor/autoload.php');
    $faker = Faker\Factory::create('en_PH');

    $conn = mysqli_connect("localhost","root","Jm202080461","recordsapp");

    if(!$conn)
    {   
    die(mysqli_connect_error());
    }  

    for ($i=0; $i < 20; $i++){   
    $userIdNumber = rand(1,100);
    $sql = "INSERT INTO recordsapp.employeee(lastname,firstname,office_id,address) values('".$faker->lastName."','".$faker->firstName."','".$faker->$userIdNumber."','".$faker->$address."')";     
    mysqli_query($conn, $sql);}

?>