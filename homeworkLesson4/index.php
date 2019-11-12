<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    
    <title>Gallery</title>
</head>
<body>
 <!--     Вывод файла   ---->
 <?php
 /*  $fp = fopen("text_1.txt", "r") or die ("Не удалось открыть файл ");
   while(!feof($fp))
   echo (fgets($fp, 1000))."<br>";
       fclose($fp);*/
   ?>

 
 
 
  <h1>Photo Gallery</h1>
   <section class="main">
    <div class="img">
     <img src="/img/big1cat.jpg" alt="" width="150" hight="100" class="gallery">
     <img src="/img/big2cat.jpg" alt="" width="150" hight="100" class="gallery">
     <img src="/img/big3cat.jpg" alt="" width="150" hight="100" class="gallery">
     <img src="/img/big4cat.jpg" alt="" width="150" hight="100" class="gallery">
     <img src="/img/big5cat.jpg" alt="" width="150" hight="100" class="gallery">
     <img src="/img/big6cat.jpg" alt="" width="150" hight="100" class="gallery">
     </div>
     <div class="img" id="center">
     <img src="/img/big1cat.jpg" alt="" width="150" hight="100" class="gallery">
     <img src="/img/big2cat.jpg" alt="" width="150" hight="100" class="gallery">
     <img src="/img/big3cat.jpg" alt="" width="150" hight="100" class="gallery">
     <img src="/img/big4cat.jpg" alt="" width="150" hight="100" class="gallery">
     <img src="/img/big5cat.jpg" alt="" width="150" hight="100" class="gallery">
     <img src="/img/big6cat.jpg" alt="" width="150" hight="100" class="gallery">
     </div> 
 <!--    <h2>Вывод файлов</h2> -->
     
<?php
  /* $files = glob('*.txt');
    print_r($files)."<br>";*/
  ?> 
  <?php
  # $files = glob('img/b*.jpg');
  #  print_r($files)."\n";
  ?> 
  
<!--   <h2>Вывод картинок</h2>  -->
  <?php
  $dir ='img/'; // сохраним в переменную путь к нашей папке
if(is_dir($dir)&&file_exists($dir)){ // проверим существует ли данный каталог и каталог ли это
   $images=scandir($dir); //если все ок, то получаем список файлов из каталога.
    for($i=0; $i <= count($images);$i++){ //запускаем перебор массива в цикле
        $image=$dir.$images[$i]; // получаем в переменную путь к файлу
       if(@exif_imagetype($image)){ // проверяем является ли файл картинкой
           echo '<div class="img">';
            echo '<img src="'.$image.'"width="150">'; // выводим картинку
            echo '</div>';
        }
        
    }
    
}       
?>     
   </section>
    
    <form action="upload.php" enctype="multipart/form-data" method="post"> 
<input name="picture" type="file" /><br><br>
<input type="submit" value="Загрузить" />
</form>
    
 
</body>
</html>