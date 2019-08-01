<?php
require_once('calculate.php');

if(isset($_GET['length'])) {
    $length = $_GET['length'];

    $whatIsAmount = new CalAmount($length);
    $amount = $whatIsAmount->getAmount();

    echo 'You need ' . $amount["rail"] . ' rail(s), and ' . $amount["post"] . ' post(s)';
} elseif (isset($_GET['rail']) && isset($_GET['post'])) {
    $rail = $_GET['rail'];
    $post = $_GET['post'];

    $newFence = new Fence($rail, $post);
    $fenceUnit = $newFence->getFenceUnits();
    $whatIsLength = new CalLength($fenceUnit);
    $result = $whatIsLength->getLength();

    echo $result . ' m';
}


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
    </form>
    <form action="display.php" method="get">
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
