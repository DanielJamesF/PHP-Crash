<?php
/* --------- Object Orientated Programming --------- */

/*
    From PHP5 onwards you can write PHP in either a procedural or object orientated way.
    OOP consists of classes that can hold "properties and "methods".
    Objects can be created from classes.
*/

class User {
    // Propertoes are attributes that belong to a class

    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // Method is afunction that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }
}

// Instatiate a user object
$user1 = new User();
$user2 = new User();

$user1->set_name('Daniel');
$user2->set_name('James');

// var_dump($user1);
var_dump($user2);