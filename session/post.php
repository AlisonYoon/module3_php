<!DOCTYPE html>
<?php

if(isset($_POST['firstName']) && $_POST['firstName'] === 'sam') {
    echo 'Nearly there, ' . $_POST['lastName'];
}

$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
if($hash === $hashFromDatabase) {
    //login
} else {
    //don't login
}
$isCool = password_verify($_POST['password'], $hashFromDatabase);

if($isCool) {
    //login
} else {
    //redirect to login page
}


?>

<html>
<body>
<form action="post.php" method="post">
    First Name: <input type="text" name="firstName"><br>
    Last Name : <input type="text" name="lastName"><br>
    <input type="submit">

</form>
</body>
</html>
