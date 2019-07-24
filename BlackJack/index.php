<?php require 'game.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Blackjack game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="container">
    <div class="player">
        <h4>Player 1</h4>
        <?php $p1Score = deal(); ?>
    </div>

    <div class="player">
        <h4>Player 2</h4>
        <?php $p2Score = deal(); ?>
    </div>

    <div class="result"><?php echo calcWinner($p1Score, $p2Score); ?></div>
</div>
</body>
</html>