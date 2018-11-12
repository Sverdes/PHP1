<?php

//Operatori
$a = 5;
$b = ++$a;
$c = $a++;
echo "$a $b $c", PHP_EOL;



/*
$arr = [
  1 => [
    1 => 'unu',
    2 => 'doi'
  ],
  'doi'=> 'ceva',
  3 => 'altceva'
];

echo "Blablabla bla bla {$arr[1][1]} bla", PHP_EOL;


/*
//ARRAY
$arr1 = [
  1 => 'Unu',
  2 => 'Doi',
  3 => 'Trei'
];
$arr2 = [
  4 => 'Patru',
  5 => 'Cinci'
];

$arr3 = array_merge($arr1, $arr2);
$arr[] = 'Ceva';

print_r($arr3);



//$a[0] = 1;
//$a[1] = 3;
//$a[2] = 5;
//echo count($a).PHP_EOL;

/*
//Operatii cu string  / concatenare
$a = 'Hello ' . 'World';
echo $a[8];                   // - afiseaza r
echo strlen($a);              // - afiseaza r11

/*
//nowdoc

$str = <<<'ORICE'
    Lorem ipsum
     sit amet dolor
ORICE;
  echo $str;


/*
//heredoc
$str = <<<ORICE
Lorem ipsum
     sit amet dolor
ORICE;
  echo $str;



/*
$a = 8 - 6.4;
$b = 1.6;
$e = 0.0000000000001;
var_dump (($b - $a) > 0);



//FLOAT
// S     mantisa16bit     exp
//        1000        1e3
//        1200        1,2e2



/*
$a = 25;
$b = 0x19;
$c = 031;
$d = 0b11001;
echo "$a $b $c $d";



/*
$a = 5;
$ab = '5';
var_dump($a);
var_dump($ab)


//Eliberare memorie unset




//$a = 5;
//echo print($a).; // print  = returneaza 1



/*
$myValue = 1;
echo $myValue.PHP_EOL;
$myValue = $myValue + 10;
echo $myValue.PHP_EOL;
*/

/*
$a='3';
$a=$a.'3';  - //concatenare
echo $a.PHP_EOL;
*/

/*
echo 'Versiunea de Php:'.PHP_VERSION.PHP_EOL;
echo 'Éxecutabilul Php folosit:' .PHP_BINARY.PHP_EOL;
echo 'Sistemul de operare:'.PHP_OS.PHP_EOL;
echo 'Linia curenta'.__LINE__.PHP_EOL;
echo 'Fisierul curent:'.__FILE__.PHP_EOL;
echo 'Directorul curent:'.__DIR__.PHP_EOL;
/*



//define(CONSTANTAMEA, 'ceva');
//echo CONSTANTAMEA.PHP_EOL;


//$firstname='Ion';
//$firstName='Vasile';
//echo "$firstname, $firstName, $Firstname".PHP_EOL;




__LINE__ - Linia curenta din program
__FILE__ - calea si numele fisierului curent
__DIR__  - directorul in care se afla fisierul curent
*/
 ?>
