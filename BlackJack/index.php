<?php require 'game.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Blackjack game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="container">
    <div class="player-seat">
        <div class="player">Tom</div>
        <?php $p1Score = $results[0]; ?>
    </div>

    <div class="player-seat">
        <div class="player">Jerry</div>
        <?php $p2Score = $results[1]; ?>
    </div>

    <div class="result"><?php echo winnerIs($p1Score, $p2Score); ?></div>
</div>
</body>
</html>