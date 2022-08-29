<?php 

    echo "Hellow world";

    print_r ($_SERVER['REMOTE_ADDR']);
    echo "</br>";

    //variable of php


    $number = 5;
    if($number == 5){
        echo "You are number five";
    }else{
        echo "You are something wrong";
    }

    echo "</br>";

    $number = 6;
    if($number === 5){
        echo "You are number five";
    }else if($number == 6){
        echo "You are number six";
    }
    else{
        echo "You are something wrong";
    }

    echo "</br>";

    // Student Show Result

    $result = 50;

    if($result >= 79){
        if($result >= 101){
            echo "Invalid Number";
        }else{
            echo "You are A+";
        }
    }else if($result >= 69){
        echo "You are A";
    }else if($result >= 59){
        echo "You are A-";
    }else if($result >= 49){
        echo "You are B";
    }else if($result >= 39){
        echo "You are C";
    }else if($result >= 33){
        echo "You are D";
    }else if($result <= 32){
        echo "You are F";
    }else{
        echo "Your Number something wrong!";
    }


echo "</br>";


    echo "</br>";

    $age = 18;
    $gender = "famele";
    if($age == 18 && $gender == "male"){
        echo "You are selected";
    }else{
        echo "error!";
    }

    echo "</br>";

    $age = 18;
    $gender = "famele";
    if($age == 18 || $gender == "male"){        // je kono akta mille kaj korbe
        echo "You are selected";
    }else{
        echo "error!  You are not 13 years old";
    }

    echo "</br>";

    // nestet if else

    $age = 18;
    $gender = "famele";
    if($age == 18){  
        if($gender == "male"){
            echo "You are selected";
        }else{
            echo "error!  You are not famele";
        }
    }else{
        echo "error!  You are not 13 years old";
    }

    echo "</br>";

    // swapping .php
    $a = 50;
    $b = 98;

    $ab = $a;
    $a = $b;
    $b = $ab;

    echo $a . "</br>";
    echo $b;


    echo "</br>";

    // switch keyword

    $arif = "hthjjml";

    switch($arif){
        case "html":
            echo " I love html";
        break;
        case "css":
            echo " I love css";
        break;
        case "java":
            echo " I love java";
        break;
        case "php":
            echo " I love php";
        break;
        default:
          echo "Something is wrong";

    }

    echo "</br>";

    // php for loop

    // for($i = 2; $i <= 10; $i+=2){
    //     echo "$i হলো জোড় নাম্বার । <br/>";
    // }
    // for($i = 1; $i <= 10; $i+=2){
    //     echo "$i হলো বিজোড় নাম্বার । <br/>";
    // }

    // foreach

    $colors = array("blue", "white", "green", "yellow");

    foreach($colors as $color){
        echo "$color <br/>";
    }


    // Arry 

        $numbers = [
            [77,84,84,03,83],
            [92,44,55,22,0],
            "My name is Abdur Rahman",
            [55,20,46,30,]
        ];

        foreach($numbers as $number){
         //  echo is_array($number);

           if (is_array($number)){
            foreach($number as $only_num){
                print_r ($only_num);
                echo "<br/>";
            }
           }else{
               echo $number . "<br/>";
           }
        }


        $fruits = [
            ["name" => "banana ", "price " =>  100],
            ["name" => "banana ", "price " =>  10],
            ["name" => "banana ", "price " =>  200],
            ["name" => "banana ", "price " =>  50]
        ];

        foreach($fruits as $fruit){
            foreach($fruit as $name => $price){
                echo $name;
                echo $price;
                echo "<br/>";
            } 
        }






    

?>