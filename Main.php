<?php
    // shortcut run: ctrl + alt + n
    $a = 1;
    echo $a."\n";

    echo "Hello"." "."World"."\n";

    // cara comment 1
    # cara comment 2
    /*
        multiple lines comment
        multiple lines comment
        multiple lines comment
    */
    // shortcut untuk comment: ctrl + /

    $b = false;
    var_dump($b);

    $array1 = [1, 2.00, true, "hello", 5];
    $array2 = array(1, 2, 3, 4, 5);

    // array index start dari 0
    echo $array1[0]."\n";
    echo $array1[1]."\n";
    echo $array1[3]."\n";

    $size = sizeof($array1);
    echo $size."\n";
    for ($i = 0; $i < $size; $i++) {
        echo $array1[$i]."\n";
    }

    $i = 1;
    echo ++$i."\n"; // increment
    echo --$i."\n"; // decrement

    $i += 2; 
    $i = $i+2;
    $i *= 2;
    $i /= 2;
    $i %=2 ; // modulo: ngebalikin sisa pembagian, misalnya 3/2 hasilnya ada sisa 1

    // object memiliki key & value
    $object = (object) [
        "Name" => "John",
        "Age" => 20,
        "Address" => "Jalan Anggrek"
    ];
    echo "Name: ".$object->Name."\n";
    echo "Age: ".$object->Age."\n";
    echo "Address: ".$object->Address."\n";

    $score = 80;
    if ($score >= 90) {
        echo "A\n";
    } else if ($score >= 80) {
        echo "B\n";
    } else {
        echo "C\n";
    }

    $menu = 1;
    switch($menu) {
        case 1:
            echo "1\n";
            break;
        default:
            break;
    }

    // ternary
    $bool = true;
    echo $bool ? "True\n" : "False\n";

    function myMessage($name) {
        echo "Hello ".$name."\n";
    }
    myMessage("John");
?>