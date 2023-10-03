<?php
include 'helpers.php';
class Greetings{
    public static $message = "Hello World!";

    public function __construct(){
        echo self::$message;
    }

    public static function welcome(){
        echo "Hello World!";
    }
    public static function bye(){
        echo "Bye bye!";
    }

}

Greetings::welcome();
echo '<br>';
Greetings::bye();

d(Greetings::$message);
