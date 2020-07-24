<?php

class abc{
    public function __construct(){
        echo 'This is __construct function ! <br>';
    }

    public function Hello(){
        echo 'This is hello function ! <br>';
    }

    public function __destruct(){
        echo 'This is __destruct function ! <br>';
    }
}

$obj = new abc;
$obj->hello();

?>
