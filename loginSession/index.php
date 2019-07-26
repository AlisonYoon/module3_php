<?php

$pw = 'sheep45';
$storedPw = password_hash($pw, PASSWORD_DEFAULT);
$login= false;

if(isset($_POST['pw'])) {
    $hash = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $login = password_verify($_POST['pw'], $storedPw);
}

if(isset($_POST['pw']) && $login) {
    echo "Welcome!";
} elseif (isset($_POST['pw']) && !$login) {   // if you just use "else" here, it will execute it as long as $_POST['pw'] is false,
                                                // which will always be false if user hasn't typed password yet.
    echo "Please check your password";
}

?>

<form action="index.php" method="post">
    ID <input type="text" name="id"><br>
    Password <input type="password" name="pw"><br>
    <input type="submit">
</form>
