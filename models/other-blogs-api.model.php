<?php 
   
    $rouvenJSON = file_get_contents('http://www.041er-blj.ch/2020/rohaenggi/blog/api.php');
    $rouvenPosts = json_decode($rouvenJSON);
