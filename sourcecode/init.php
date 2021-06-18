<?php 
    require "vendor/autoload.php";

    use Google\Cloud\Vision\VisionClient;
    $vision = new VisionClient(['keyFile'=> json_decode(file_get_contents("key.json"),true)]);

    $familyPhotoResource = fopen("dl.jpeg", "r");

    $image = $vision->image($familyPhotoResource,['TEXT_DETECTION']);
    $result = $vision->annotate($image);
    var_dump($result);