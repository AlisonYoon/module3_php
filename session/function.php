<?php

session_start();

if(isset($_SESSION['name']) && $_SESSION['name'] === 'sam') {
    echo 'Come on in, guy!';
} else {
    echo 'Nothing around here';
}

?>