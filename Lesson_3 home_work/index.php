<!-- The task 1    -->

<?php
$i = 0;
while($i<=100) {
	$i++;
	if($i % 3 == 0){
    echo $i."<br>";
	}
}
?>

<!-- The task 2    -->
<?php
$a = 0;
do{
    echo $a. "-Это ноль" ."\n";
    $a++;
    echo $a. " нечетное число" ."\n";
     $a++;
    echo $a. " четное число" ."\n";
     $a++;
    echo $a. " нечетное число" ."\n";
     $a++;
    echo $a. " четное число" ."\n";
     $a++;
    echo $a. " нечетное число" ."\n";
     $a++;
    echo $a. " четное число" ."\n";
     $a++;
    echo $a. " нечетное число" ."\n";
     $a++;
    echo $a. " четное число" ."\n";
     $a++;
    echo $a. " нечетное число" ."\n";
     $a++;
    echo $a. " четное число" ."\n";
    
}while($a<=9);
?>
<!-- The task 3    -->
<?php

$region = [
    "Московская область" => [ "Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => [ "Выборг", "Зеленогорск", "Сестрорецк"],
    "Рязанская область" => [ "Михайлов", "Касимов", "Сараи"],
    ];
     print_r ($region);

?>