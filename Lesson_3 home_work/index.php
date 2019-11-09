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


<!-- The task 4    -->
<?php
  function transliterate($st) 
  { 
    $pattern = ['а', 'б', 'в', 'г', 'д', 'е', 'е', 
                'ж', 'з', 'и', 'й', 'к', 'л', 'м', 
                'н', 'о', 'п', 'р', 'с', 'т', 'у', 
                'ф', 'х', 'ч', 'ц', 'ш', 'щ', 'ъ', 
                'ы', 'ь', 'э', 'ю', 'я', 
                'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Е', 
                'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 
                'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 
                'Ф', 'Х', 'Ч', 'Ц', 'Ш', 'Щ', 'Ъ', 
                'Ы', 'Ь', 'Э', 'Ю', 'Я']; 
    $replace = ['a', 'b', 'v', 'g', 'd', 'e', 'yo', 
                'zh', 'z', 'i', 'y', 'k', 'l', 'm', 
                'n', 'o', 'p', 'r', 's', 't', 'u', 
                'f', 'h', 'ch', 'ts', 'sh', 'shch', '\'', 
                'y', '', 'e', 'yu', 'ya', 
                'A', 'B', 'V', 'G', 'D', 'E', 'Yo', 
                'Zh', 'Z', 'I', 'Y', 'K', 'L', 'M', 
                'N', 'O', 'P', 'R', 'S', 'T', 'U', 
                'F', 'H', 'CH', 'Ts', 'Sh', 'Shch', '\'', 
                'Y', '', 'E', 'Yu', 'Ya']; 
 
    return str_replace($pattern, $replace, $st); 
  } 
  echo transliterate("Это задание номер четыре."); 
?> 

<!-- The task 5    -->

<?php
$str = "У меня сегодня вечером занятия по PHP";
$str = str_replace(' ', '_', $str);
echo $str;
?>


<!-- The task 6    -->

<?php
$i = 0;
$array_menu = array();

$array_menu[$i]['url']='/';
$array_menu[$i++]['name']='Главная';

$array_menu[$i]['url']='/#/';
$array_menu[$i++]['name']='О компании';

$array_menu[$i]['url']='/#/';
$array_menu[$i++]['name']='Продукция';



$array_menu[$i]['url']='/#/';
$array_menu[$i++]['name']='Прейскурант цен';

echo "<ul>\n";
for ($i=0;$i<count($array_menu);$i++)
{
       echo ($_SERVER["REQUEST_URI"] == $array_menu[$i]['url']) ? '<li class="active">': '<li>';
       echo "<a href=\"".$array_menu[$i]['url']."\">".$array_menu[$i]['name']."</a></li>\n";
}
echo "</ul>";