<?php

session_start();
$pw = '12345';
$storedPw = password_hash($pw, PASSWORD_DEFAULT);

if(isset($_POST['pw'])) {
    $hash = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $login = password_verify($storedPw, $hash);
}
//$isCool = password_verify($_POST['pw'], $hash); //It needs to be guarded because it doesn't have data yet before user submit data


//if($hash === $hashFromDatabase) {
//    echo "Welcome " . $_POST['id'];
//} else {
//    echo "Please check your password";
//}
//
//if($isCool) {
//    echo "Welcome " . $_POST['id'];
//} else {
//    echo "Please check your password";
//}

if(isset($_POST['id']) && $_POST['id'] === 'makki') {
    if(isset($_POST['pw']) && $_POST['pw'] === $hash) {
        echo "Welcome Makki!";
    } else {
        echo "Please check your password again";
    }
} else {
    echo "Please sign up";
}




?>

<form action="index.php" method="post">
    ID <input type="text" name="id"><br>
    Password <input type="password" name="pw"><br>
    <input type="submit">
</form>
