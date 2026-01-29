<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="urav">Введите уравнение</label>
        <input type="text" name="urav" id="">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    if(!empty(isset($_GET['urav']))){
        $urav = $_GET['urav'];
        $arr = explode(' ', $urav);
        print_r($arr);
    }

    $str= "x * 9 = 56";
    $arr_char = explode(" ",$str);
    $x_place = strpos ($str,'x');
    if ($x_place == 0){
        $x_pos = 'left';
        $operand = $arr_char[2];
    }

    else{
     $x_pos = 'right';
    $operand = $arr_charp[4];
    } 
    $operator = $arr_char [1];
    $result = $arr_char [4];
    switch ($operator){
    
        case '*':
            $x = $result/$operand;
            break;
        case '+':
            $x= $result-$operand;
             break;
            case '-':
                if ($x_pos == 'left')
                    $x= $result+$operand;
                else 
                    $x= $operand-$result;
                 break;
                case '/':
                    if($x_pos == 'left')
                        $x= $result*$operand;
                    else
                        $x=$operand/$result;
                
                
    } echo $x;

?>







