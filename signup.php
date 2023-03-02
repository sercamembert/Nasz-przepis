<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css">
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
    <p class="signup-title">Zarejestruj się</p>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Imie" class="signup-input"><br>
        <input type="text" name="email" placeholder="Email" class="signup-input"><br>
        <input type="text" name="uid" placeholder="Login" class="signup-input"><br>
        <input type="password" name="pwd" placeholder="Hasło" class="signup-input"><br>
        <input type="password" name="pwdrepeat" placeholder="Powtórz hasło" class="signup-input"><br> 
        <div class="errors-login">
            <div class="errors-login-container">
        <div class="have-acc"><a href="login.php"> Zaloguj się</a></div>     
        <div class="error-mesage">
        <?php
        if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p class='signup-error'>Wypełnij wszystkie pola</p>";
        }
        else if($_GET["error"] == "invaliduid"){
            echo "<p class='signup-error'>Nieprawidłowy login</p>";
        }
        else if($_GET["error"] == "invalidemail"){
            echo "<p class='signup-error'>Nieprawidłowy adres e-mail</p>";
        }
        else if($_GET["error"] == "passwordsdontmatch"){
            echo "<p class='signup-error'>Hasła nie są takie same</p>";
        }
        else if($_GET["error"] == "stmtfailed"){
            echo "<p class='signup-error'>Coś poszło nie tak, spróbuj ponownie</p>";
        }
        else if($_GET["error"] == "usernametaken"){
            echo "<p class='signup-error'>Nazwa jest zajęta</p>";
        }
        else if($_GET["error"] == "none"){
            echo "<p class='signup-error'>Konto zostało utworzone</p>";
        }
    }
?>
        </div>
        </div>       
        </div>
        
        <button type="submit" name="submit" class="signup-btn"><i class="fa-solid fa-user"></i>&nbsp;Zarejestruj się</button><br>
    </form>
    
    

</div>
</section>


<script src="js/theme.js"></script>
</body>
</html>