<?php 
  
// writing content on gfg.txt 
//echo file_put_contents("file.txt", "Sameer",FILE_APPEND); 
$url = 'https://media.geeksforgeeks.org/img-practice/courses/ML_Jun29_Thumbnail_1.png'; 

 file_put_contents('images/flower.jpg', file_get_contents($url))
?> 