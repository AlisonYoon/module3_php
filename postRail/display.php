<?php
require_once('calculate.php');

?>

<html>
<body>
    <h1>Build a fence</h1>
    <form action="display.php" method="get">
        <div>
            <label for="length">How many posts and rails do I need?</label>
            <input type="text" name="length">
            <input type="submit">
        </div>
        <div>
            <p>How long can I build a fence?</p>
            <label for="rail">Rail</label>
            <input type="text" name="rail">
            <label for="post">Post</label>
            <input type="text" name="post">
            <input type="submit">
        </div>

    </form>
</body>
</html>
