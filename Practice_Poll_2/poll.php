<?php

require_once 'app/init.php';

if(!isset($_GET['poll'])) {
    header('Location: index.php');
} else {
    
    $id = (int)$_GET['poll'];
    
    // Get general poll information
    $pollQuery = $db->prepare("
        SELECT id, question
        FROM polls
        WHERE id = :poll
        AND DATE(NOW()) BETWEEN starts AND ends
    ");
    
    $pollQuery->execute([
        'poll' => $id
    ]);
    
    $poll = $pollQuery->fetchObject();
    
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test Poll 2</title>
        
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        
        <?php if(!$poll): ?>
            <p>That poll doesn't exist</p>
        <?php else: ?>
            <div class="poll">
                <div class="poll-question">
                    <?php echo $poll->question; ?>
                </div>
                <form action="vote.php" method="post">
                    <div class="poll-options">
                        <div class="poll-option">
                            <input type="radio" name="choice" value="1" id="c1">
                            <label for="c1">Choice 1</label>
                        </div>
                        <div class="poll-option">
                            <input type="radio" name="choice" value="2" id="c2">
                            <label for="c2">Choice 2</label>
                        </div>
                        <div class="poll-option">
                            <input type="radio" name="choice" value="3" id="c3">
                            <label for="c3">Choice 3</label>
                        </div>
                    </div>

                    <input type="submit" value="Submit answer">
                    <input type="hidden" name="poll" value="1">
                </form>
            </div>
    <?php endif; ?>
    </body>
</html>