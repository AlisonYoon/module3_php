<?php
require_once('calculate.php');

function printResult() {

    if(isset($_GET['length'])) {
        if($_GET['length'] === '') {
            echo '<p class="result-msg">Please let me know how long you want your fence to be.</p>';
        } else {
            $length = $_GET['length'];

            $whatIsAmount = new CalAmount($length);
            $amount = $whatIsAmount->getAmount();

            echo '<p class="result-msg">' . 'For <span>' . $length .  ' m</span> fence, ' . 'You need <span>' . $amount["rail"] . ' rail(s)</span>, and <span>' . $amount["post"] . '</span> post(s).</p>';
        }
    } elseif (isset($_GET['rail']) && isset($_GET['post'])) {
        if($_GET['rail'] === '' || $_GET['post'] === ''){
            echo '<p class="result-msg">Please let me know how many rails and posts you have.</p>';
        } else {
            $rail = $_GET['rail'];
            $post = $_GET['post'];

            $newFence = new Fence($rail, $post);
            $fenceUnit = $newFence->getFenceUnits();
            $whatIsLength = new CalLength($fenceUnit);
            $result = $whatIsLength->getLength();

            echo '<p class="result-msg">With <span>' . $rail . ' Rail(s)</span> and <span>' . $post . ' Post(s)</span>, Your fence can be <span>' .$result . ' m</span></p>';

        }
    }
}


?>

<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Inconsolata:400,700&display=swap');
        body {
            font-family: 'Inconsolata', monospace;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 90vh;
        }
        .result-msg {
            font-size: 1.5rem;
        }
        form div{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input {
            display: block;
            margin: 12px 0;
            padding: 5px;
            font-size: 1.1rem;
        }
        p span {
            color: #0B9B9B;
            font-weight: 700;
        }
        input[type=submit] {
            padding: 5px 0;
            font-size: 1.1rem;
            border: 4px solid #F29A42;
            text-transform: uppercase;
            width: 100px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BUILD A FENCE</h1>
        <form action="display.php" method="get">
            <div>
                <label for="length">How many posts and rails do I need?</label>
                <input type="text" name="length" placeholder="Type Length">
                <input type="submit">
            </div>
        </form>
        <form action="display.php" method="get">
            <div>
                <p>How long can I build a fence?</p>
                <label for="rail">Rail</label>
                <input type="text" name="rail" placeholder="Rail Amount">
                <label for="post">Post</label>
                <input type="text" name="post" placeholder="Post Amount">
                <input type="submit">
            </div>
        </form>
        <div>
            <?php printResult(); ?>
        </div>
    </div>
</body>
</html>
