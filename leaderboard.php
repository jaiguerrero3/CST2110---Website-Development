<!--THIS PAGE CONTAINS THE LEADERBOARD, INCLUDING THE TABLE, WHICH I MADE IN
A FUNCTION AND THEN CALLED ON THIS PAGE. THIS IS BECAUSE THE FUNCTION WAS
VERY LONG AND ALSO REPETITIVE - SAME CODE FOR EVERY ROW.-->

<?php
    include 'functions.php';
    webTitle("Leaderboard");
    webNav("leaderboard.php", "Leaderboard", "index.php", "instructions.php", "register.php", "login.php", "Game", "How to Play", "Sign Up", "Log In");
?>

<html>
    <h1>LEADERBOARD</h1>
</html>

<?php
    leaderboard();
    webFooter();
?>