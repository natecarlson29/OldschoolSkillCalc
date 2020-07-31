

<?php

if (!isset($comment)) {
    $comment = '';
}
if (!isset($errorMessageComment)) {
    $errorMessageComment = '';
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Group Capstone Project</title>
        <link rel="stylesheet" type="text/css" href="#" >
    </head>
    <body>
        <main class="commentSection">
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="add_comment">
                <h1>Leave a comment:</h1>
                <br>
                <div class="error"><?php xecho($errorMessageComment); ?></div>
                <br>
                <textarea rows="5" cols="50" name="comment"></textarea>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Post Comment"><br>
                </div>
            </form>
            <div class='commentsDisplay'>
                <h1> Comments </h1>
                <?php foreach ($skillsComments as &$comment) {
                    echo "<div class='commentContent'>"
                    . "<div class='commentDisplayText'>". $comment->getComText() . "</div>"
                    . "<div class='commentDisplayCommenter'> Written By: ". $comment->getCommenter() . "</div>"
                    . "<div class='commentDisplayTime'> On: ". $comment->getComTime() . "</div>"
                    . "</div>";
                }?>
            </div>
        </main>
    </body>
</html>
