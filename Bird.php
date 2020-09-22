<?php

class Bird {
    public $habitat;
    public $food;
    public $nesting = "tree";
    public $conservation;
    public $song = "chirp";
    public static $flying = "yes";
  
    public static $egg_num = 0;
    public static $instance_count = 0;

// NOTE: This was the only way I could figure out how to make null coalescing operator work.
    public function can_fly() {
        $flying_string = static::$flying ?? "is stuck on ground";
        return $flying_string;
    }
  
//  Using Ternary Operator
//    public function can_fly() {
//        $flying_string = (static::$flying == "yes") ? "can fly" : "is stuck on ground";
//        return $flying_string;
//    }
}

class YellowBelliedFlyCatcher extends Bird {
    public $name = "yellow-bellied flycatcher";
    public $diet = "mostly insects.";
    public $song = "flat chilk";
// NOTE: Had to set this static property to "can fly" for null coalescing operator to work.
    public static $flying = "can fly";
    public static $egg_num = "3-4, sometimes 5";
}

class Kiwi extends Bird {
    public $name = "kiwi";
    public $diet = "omnivorous";
// NOTE: Had to set this static property to null for null coalescing operator to work.
    public static $flying = null;
}

// NOTE: Couldn't make this function work unless I put it outside the Bird class.
function create() {
    $create_bird = new Bird;
    Bird::$instance_count++;
    return $create_bird;
}
