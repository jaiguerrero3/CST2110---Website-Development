<!--THIS PAGE IS MY HOME PAGE, WHICH WILL CONTAIN THE PLACEHOLDER FOR THE GAME. -->

<?php
    include 'functions.php';
    webTitle("Game");
    webNav("index.php", "Game", "instructions.php", "leaderboard.php", "register.php", "login.php", "How to Play", "Leaderboard", "Sign Up", "Log In");
?>

<html>
    
    <div id="scrolling-title-1">
        <marquee behavior="scroll" direction="left" height:="" loop="" scrollamount="8" scrolldelay="85" width="100%">
            <span style="font-size: 20px;color:#FFFFFF">
                Welcome to the Mental Arithmetic Challenge!</span></marquee>
            </div>

    <div id="scrolling-title-2">
        <marquee behavior="scroll" direction="left" height:="" loop="" scrollamount="8" scrolldelay="87" width="100%">
            <span style="font-size: 20px;color:#FFFFFF">
                Sign up/log in to record your score, and click 'How to Play' for game instructions!</span></marquee>
            </div>

    <div id="scrolling-title-2">
        <marquee behavior="scroll" direction="left" height:="" loop="" scrollamount="8" scrolldelay="95" width="100%">
            <span style="font-size: 20px;color:#FFFFFF">
                You can also check your rank in our leaderboard!</span></marquee>
            </div>

    <div id="scrolling-title-1">
        <marquee behavior="scroll" direction="left" height:="" loop="" scrollamount="8" scrolldelay="95" width="100%">
            <span style="font-size: 20px;color:#FFFFFF">
                Enjoy the game!</span></marquee>
            </div>
    
    <!--PLACEHOLDER FOR GAME-->

    <canvas id="canvas" width="700" height="700">Game</canvas>

</html>

<?php
    webFooter();
?>