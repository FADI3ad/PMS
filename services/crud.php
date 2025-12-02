<?php 






function create($filePath , $data) {

    $file = json_decode(file_get_contents($filePath),true);

    $file[] = $data;
    file_put_contents($filePath,json_encode($file,JSON_PRETTY_PRINT));


}