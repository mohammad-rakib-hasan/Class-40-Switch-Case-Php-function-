<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    // $marks = 75;

// if($marks>=80){
//     echo "The Grade is A+";
// }

// elseif($marks>=70){
//     echo "The grade is A";
// }


// switch($marks){

//     case 80;
//     echo "The grade is A+";
//     break;

//     case 70;
//     echo "The grade is A";
//     break;

//     case 60;
//     echo "The grade is A-";
//     break;

//     default:
//     echo "The grade is F";
//     break;
// }
// $rakib = "sjgj";

// switch($rakib){
//     case "car";
//     echo "Long tour";
//     break;

//     case "bike";
//     echo "Hang out";
//     break;

//     case "cycle";
//     echo "Field";
//     break;

//     default:
//     echo "stay home";
//     break;
// }

function sum ($number1, $number2){
    $x = $number1;
    $y = $number2;

    $result = $x+$y;
    // echo $result;
    return $result;
}

$sumValue = sum (900, 100); 

$number3 = 500;

$secondSumValue = $sumValue+$number3;

echo $secondSumValue;

    ?>
</body>
</html>