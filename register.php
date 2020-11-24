<!--THIS PAGE IS WHERE USERS CAN SIGN UP TO BE ABLE TO RECORD THEIR
SCORES ON THE LEADERBOARD.-->

<?php
    include 'functions.php';
    webTitle("Sign Up");
    webNav("register.php", "Sign Up", "index.php", "instructions.php", "leaderboard.php", "login.php", "Game", "How to Play", "Leaderboard", "Log In");
?>

<html>

    <h1>REGISTER</h1>

    <div class="register-container">
    <div class="register-container" id="register-info"><p>Creating an account allows you to record your 
        score on our leaderboard, as well as play against others. To create an account, please create a 
        username, enter your email address and use a secure password, and then click submit.</p>
    </div>

    <label for="username"><div id="label-text">Username</div></label>
    <input type="text" placeholder="Username" name="username" id="username" required>

    <label for="email"><div id="label-text">Email</div></label>
    <input type="text" placeholder="Email Address" name="email" id="email" required>

    <label for="password"><div id="label-text">Password</div></label>
    <input type="password" placeholder="Password" name="password" id="password" required>

    <label for="pwd-repeat"><div id="label-text">Repeat Password</div></label>
    <input type="password" placeholder="Repeat Password" name="pwd-repeat" id="pwd-repeat" required>

    <button type="submit" class="register-submit-button">Submit</button>

    <button type="log in" class="have-account-button">Already have an account? Click here to log in.</button>

    </div>

</html>

<?php
    webFooter();
?>