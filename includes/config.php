<?php

    require 'vendor/autoload.php';
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\Auth;
    session_start();

    $factory = (new Factory())
    ->withServiceAccount(__DIR__.'/animalrescue-9469c-firebase-adminsdk-lihu3-a401517a0f.json')
    ->withDatabaseUri('https://animalrescue-9469c-default-rtdb.asia-southeast1.firebasedatabase.app/');

    $database = $factory->createDatabase();
    $auth = $factory->createAuth();

    

?>