<?php 

    putenv("GOOGLE_APPLICATION_CREDENTIALS=key.json"); 
    require __DIR__ ."/vendor/autoload.php";

    use Google\Cloud\Storage\StorageClient;
    $projectId = "covidcare4u-d9aeb";
    $storage = new StorageClient([
        'projectId' => $projectId
    ]);

    function uploadObject($bucketName, $objectName, $source)
    {
        $storage = new StorageClient();
        $file = fopen($source, 'r');
        $bucket = $storage->bucket($bucketName);
        $object = $bucket->upload($file, [
            'name' => $objectName
        ]);
        printf('Uploaded %s to gs://%s/%s' . PHP_EOL, basename($source), $bucketName, $objectName);
    }

    function downloadObject($bucketName, $objectName, $destination)
    {
        $storage = new StorageClient();
        $bucket = $storage->bucket($bucketName);
        $object = $bucket->object($objectName);
        $object->downloadToFile($destination);
        printf('Downloaded gs://%s/%s to %s' . PHP_EOL,
            $bucketName, $objectName, basename($destination));
    }

    
    $bName = "covidcare4ubucket";
/*
    $bucket = $storage->createBucket($bucketName);
    echo "Bucket ".$bucket->name()."created";
*/  
    if(isset($_POST['btns']))    
    {
        uploadObject($bName,"abcd/".$_FILES['filename']['name'],$_FILES['filename']['tmp_name']);
    }

    if(isset($_POST['btn']))    
    {
        downloadObject($bName,"aadhar.jpg","notess.jpg");
    }


?>
<html>
    <head>
        <title>
            GCP Cloud Storage
        </title>
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name ="filename"><br>
            <input type="submit" name="btn">
        </form><br><hr>
        <a href="https://storage.cloud.google.com/covidcare4ubucket/aadhar.jpg" download="" target="_blank">Image</a><br>
        <a href="https://storage.cloud.google.com/covidcare4ubucket/abcd/driving.pdf" download="" target="_blank">Aadhar</a>
    </body>
 </html>