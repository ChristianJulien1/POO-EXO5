<?php

class Zombie {
    protected static $zombies = array();

    protected $name;

    public function __construct($name) {
        $this->name = $name;
        self::$zombies[] = $this;
    }

    public static function displayZombies() {
        foreach (self::$zombies as $zombie) {
            echo $zombie->name . "\n";
        }
    }
}

?>
