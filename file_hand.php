<?php
    $file = 'extras/users.txt';
    if(file_exists($file)){
        $handle = fopen($file, 'r');
        $contents = fread($handle. filesize($file));
           
    }
