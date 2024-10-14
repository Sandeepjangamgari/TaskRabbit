<?php
    require_once "includes/config_session.inc.php";
    require_once "includes/signup_view.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskRabbit</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- For login -->
    <!-- <div class="login">
        <form action="includes/login.inc.php" method="POST">
            
            <button>Login</button>
        </form> -->
    <!-- </div> -->
    <!-- For signup -->
    <!-- <div class="signup"> -->
        <form action="includes/signup.inc.php" method="POST" >
            <?php
                signup_inputs();
            ?>
            <button>Signup</button>
        </form>
        <!-- <fo"></form> -->
    <!-- </div> -->
    <?php
        check_errors();
    ?>
</body>
</html>