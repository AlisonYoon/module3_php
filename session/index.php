<?php


if(isset($_GET['firstName']) && $_GET['firstName'] === 'sam') {
    echo 'get off the computer, ' . $_GET['lastName'];
}

?>

<html>
<body>
<form action="index.php" method="get">
    First Name: <input type="text" name="firstName"><br>
    Last Name : <input type="text" name="lastName"><br>
    <input type="submit">

</form>
</body>
</html>
