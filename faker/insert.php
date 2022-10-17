<?php

    require ('vendor/autoload.php');
    $faker = Faker\Factory::create('en_PH');

    $conn = mysqli_connect("localhost","root","Jm202080461","records_app");

    if(!$conn)
    {   
    die(mysqli_connect_error());
    }  

    for ($i=0; $i < 100; $i++){   

    $sql = "INSERT INTO recordsapp.employeee(name,contactnum,email,address,city,country,postal)
    values('".$faker->name."','".$faker->$number."','".$faker->$email."','".$faker->$address."','".$faker->$city."','".$faker->$country."','".$faker->$postcode."')";     
    mysqli_query($conn, $sql);}

?>