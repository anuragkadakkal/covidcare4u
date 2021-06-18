<?php
require __DIR__ ."/vendor/autoload.php";
use Google\Cloud\Storage\StorageClient;
class storage
{
    private $projectId;
    //private $storage;

    public function __construct()
    {
        putenv("GOOGLE_APPLICATION_CREDENTIALS=key.json"); 
        $this->projectId = "covidcare4u-d9aeb";
        $storage = new StorageClient([
            'projectId' => $this->projectId
        ]);
    }

    function createBucket($bucketName, $options = [])
    {
        $storage = new StorageClient();
        $bucket = $storage->createBucket($bucketName, $options);
        echo $bucket->name()." Created";
    }

    function listBuckets()
    {
        $storage = new StorageClient();
        foreach ($storage->buckets() as $bucket) {
            printf('Bucket: %s' . "<br>", $bucket->name());
    }

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
}


}
?>