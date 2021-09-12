<?php
// Calculator With PHP
system("title Calculator");
echo "\n{1}.+";
echo "\n{2}.-";
echo "\n{3}.*";
echo "\n{4}./";
echo "\n{99}.Exit";
echo "\n\n";
$numbers = false;
while(true){
    echo "\n";
    $choose = (String)readline('>> ');
    if ($choose == '1'){
        if ($numbers == false) {
            echo "\n";
            $number = (int)readline('Enter Number: ');
            echo "\n";
            $number2 = (int)readline('Enter Next Number: ');
            $javab = $number + $number2;
            $numbers = true;
            echo "\n$javab";
            
        } else {
            echo "\n";
            $number3 = (int)readline('Enter Next Number: ');
            $javab = $javab + $number3;
            echo "\n$javab";
            continue;
        }

    } elseif ($choose == '2'){
        if ($numbers == false) {
            echo "\n";
            $number = (int)readline('Enter Number: ');
            echo "\n";
            $number2 = (int)readline('Enter Next Number: ');
            $javab = $number - $number2;
            $numbers = true;
            echo "\n$javab";
        } else {
            echo "\n";
            $number3 = (int)readline('Enter Next Number: ');
            $javab = $javab - $number3;
            echo "\n$javab";
            continue;
        }
    } elseif ($choose == '3'){
        if ($numbers == false) {
            echo "\n";
            $number = (int)readline('Enter Number: ');
            echo "\n";
            $number2 = (int)readline('Enter Next Number: ');
            $javab = $number * $number2;
            $numbers = true;
            echo "\n$javab";
        } else {
            echo "\n";
            $number3 = (int)readline('Enter Next Number: ');
            $javab = $javab * $number3;
            echo "\n$javab";
            continue;
        }
    } elseif ($choose == '4'){
        if ($numbers == false) {
            echo "\n";
            $number = (int)readline('Enter Number: ');
            echo "\n";
            $number2 = (int)readline('Enter Next Number: ');
            $javab = $number / $number2;
            $numbers = true;
            echo "\n$javab";
        } else {
            echo "\n";
            $number3 = (int)readline('Enter Next Number: ');
            $javab = $javab / $number3;
            echo $javab;
            continue;
        }
    } elseif ($choose == '99' || $choose == 'exit'){
        exit();
    } else {
        echo "Please, Choose Option\n";
        continue;
    }
}
?>