<?php
function ageCalculator($age)
{
//date in mm/dd/yyyy format
    echo "please enter your birthday";
//    $birthDate = $_POST;
    $age = $_POST['number0'];

//    $user = $_POST[$birthDate];
    if (is_numeric(str_replace('.', '/', $user))) {
        $birthDate = is_numeric('mm/dd/yyyy');
        $user = sprintf('int', $birthDate);
        echo $user;
    } else {
        echo 'wrong';
    }
$age = $_POST['number0'];
//$birthDate = "12/30/1998";
    $birthDate = explode("/", $birthDate);
    $age = (date("md", date("U",
        mktime(0, 0, 0, $birthDate[0], $birthDate[1],
            $birthDate[2]))) > date("md")
        ? ((date("Y") - $birthDate[2]) - 1)
        : (date("Y") - $birthDate[2]));
    echo "Age is:" . $user;
}
//
//function ageCalculator($age){
//    if (empty($age)){
//        $birthdate = new DateTime('$age');
//        $today = new DateTime('today');
//        $age = $birthdate ->diff($today)->y;
//        return $age;
//    }
//    else
//        return null;
//}$age= 1998-12-30;
//echo ageCalculator($age);