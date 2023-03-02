<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
</head>
<body>
<?php
 include_once 'header.php';
?>
<section class="signup-form">
    <div class="form-container">
    <p class="signup-title">Zaloguj się</p>
    <form action="includes/login.inc.php" method="post">
    <input type="text" name="uid" placeholder="Login/email" class="signup-input"><br>
    <input type="password" name="pwd" placeholder="Hasło" class="signup-input">

        <div class="errors-login">
            <div class="errors-login-container">
        <div class="have-acc"><a href="signup.php"> Zarejestruj się</a></div>     
        <div class="error-mesage">
        <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p class='signup-error'>Wypełnij wszystkie pola!</p>";
        }
        else if($_GET["error"] == "wronglogin"){
            echo "<p class='signup-error'>Nieprawidłowy login lub hasło!</p>";
        }
    }
?>
        </div>
        </div>       
        </div>
        
        <button type="submit" name="submit" class="signup-btn"><i class="fa-solid fa-user"></i>&nbsp;Zaloguj się</button><br>
    </form>
    
    

</div>
</section>



<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="js/theme.js"></script>
<script src="js/login-error.js"></script>
</body>
</html>