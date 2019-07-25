<!DOCTYPE html>
<?php


if(isset($_GET['firstName']) && $_GET['firstName'] === 'sam') {
    echo 'get off the computer, ' . $_GET['lastName'];
}

if(isset($_GET['address']) && $_GET['address'] === '52') {
    echo '<br>' . 'your address is: ' . $_GET['address'];
}

?>

<html>
<body>
<form action="index.php" method="get">
    First Name: <input type="text" name="firstName"><br>
    Last Name : <input type="text" name="lastName"><br>
    Address : <input type="text" name="address"><br>
    <input type="submit">

</form>
</body>
</html>
