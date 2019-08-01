<?php

require_once 'User.php';


class Child extends User implements EmailAble
{

    public function sendEmail(): string
    {
        // 1. Retrieve child-friendly content
        // 2. Map to interests
        // 3. Build email
        // 4. Send email
    }

    // Method from parent class can be overridden like this,
    // means we can't depend on the method signature of a method that
    // is inherited
    public function sayInterests(int $number)
    {
        return 'I\m only ' . $number . '!!!!';
    }
}