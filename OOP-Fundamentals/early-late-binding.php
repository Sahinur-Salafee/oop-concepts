<?php

class Planet {
    
    static function echoName() {
        // echo self::getName();
        echo static::getName(); // late static binding
    }

    static function getName() {
        return 'Planet';
    }
}

class Earth extends Planet {

    static function getName()
    {
        return 'Earth';
    }
}

Earth::echoName(); // return planet