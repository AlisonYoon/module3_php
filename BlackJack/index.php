<?php require 'game.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blackjack game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="container">
    <div class="display-card">
       <?php displayCards($mainDeck, $playerCards); ?>
    </div>

    <div class="player-seat">
        <div class="player">Tom :
            <?php echo $results[0]; ?>
        </div>

    </div>

    <div class="player-seat">
        <div class="player">Jerry :
            <?php echo $results[1]; ?>
        </div>

    </div>

    <div class="result-board">
        <?php winnerIs($playerCards); ?>
    </div>

</div>
</body>
</html>