<?php

require_once 'User.php';

class Adult extends User implements EmailAble
{
    private $creditCardNumber = '3845096737582345';

    public function sendEmail(): string
    {
        // 1. Retrieve content
        // 2. Map to interests
        // 3. Build email
        // 4. Send email
    }
}