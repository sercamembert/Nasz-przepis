<?php
    session_start();
?>

<header class="header1">
    
 <nav id="bright">
    <div class="header" id="header">
        <div class="grid-wrapper">
            <div class="grid-item"><a href="index.php"> <img src="img/logo.png" alt="logo" class="image"></a></div>
            <div class="grid-item"><span class="color-hover" id="przepisy"><i class="fa-solid fa-book"></i>&nbsp;Przepisy</span></div>
            <div class="grid-item"><a href="index.php#section-about" class="footer-link"><span class="color-hover"><i class="fa-solid fa-circle-question"></i>&nbsp;O nas</span></a></div>
            <div class="grid-item"><span class="color-hover" id="find"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;Szukaj</span></div>
            <div class="grid-item"><span class="color-hover">&nbsp;
            <?php
if(isset($_SESSION["useruid"])){
    echo "<a href='profile.php' class='color-hover footer-link' ><i class='fa-solid fa-user'></i> Profil</a><br>";
}else{
    echo "<a href='signup.php' class='color-hover footer-link' ><i class='fa-solid fa-user'></i> Rejestracja";
    // echo "<a href='login.php'>Zaloguj</a><br>";
}
?> 
        </a></span></div>
            <div class="grid-item" id><button class="add" id="add">Dodaj przepis +</button></div>
            <div class="grid-item">
            <?php
            if(isset($_SESSION["useruid"])){
                echo "<a href='includes/logout.inc.php' class='color-hover footer-link' ><i class='fa-solid fa-right-from-bracket'></i>&nbsp;Wyloguj</a><br>";
            }else{
            }
            ?> 
            </div>
            <div class="grid-item"><i class="fa-regular fa-lightbulb light-size" id="theme"></i></div>
        </div>
    </div>
 </nav> 

</header>
<section>
    <div class="add-container" id="add-container">
        <div class="add-close-container"><i class="fa-solid fa-xmark" id="add-close"></i></div>
        <div class="add-title">
        <input type="text" name="title" placeholder="Wpisz tytuł przepisu..." class="add-input" id="add-input">
        </div>
        <div class="add-main">
        <textarea id="add-main" class="add-main-input" placeholder="Opisz danie; podaj składniki i przygotowanie krok po kroku ..."></textarea>
        <div class="icons"><i class="fa-solid fa-image" alt="dodaj zdjęcia"></i> <i class="fa-regular fa-clipboard" alt="schowek"></i></div>
        <p class="add-error" id="add-error"></p>
        </div>
        <div class="submit">
                <button class="add" id="add-btn"> Dodaj przepis +</button>
            </div>
    </div>
</section>
<section>
    <div class="find-container" id="find-container">
        <div class="close-container"><i class="fa-solid fa-xmark" id="find-close"></i></div>
        <div class="find-main">
            <i class="fa-solid fa-magnifying-glass"></i>&nbsp;<input type="text" class="find-input" placeholder="Szukacz czegoś specjalnego?" id="find-input">
            <br>
            <p class="required" id="not-find">&nbsp;</p>
        </div>
    </div>
</section>
<nav>
<div class="sidebar">
    <header><a href="#header"> <img src="img/logo.png" alt="logo" class="image-sidebar"></a></header>
    <ul>
        <li><a href="#section-2"><div class="center-box"><img src="img/dish.png" alt="danie-glowne">&nbsp;Dania główne</div></a></li>
        <li><a href="#section-3"><div class="center-box"><img src="img/soup.png" alt="danie-glowne">&nbsp;Zupy</div></a></li>
        <li><a href="#section-4"><div class="center-box"><img src="img/salad.png" alt="danie-glowne">&nbsp;Sałatki</div></a></li>
        <li><a href="#section-5"><div class="center-box"><img src="img/cake.png" alt="danie-glowne">&nbsp;Ciasta</div></a></li>
        <li><a href="#section-6"><div class="center-box"><img src="img/cupcake.png" alt="danie-glowne">&nbsp;Przekąski</div></a></li>
        <li><div class="arrow-close"><i class="fa-solid fa-arrow-left" id="close"></i></div></li>
    </ul>
    <div class="sadebar-socials">
        <div class="sadebar-item"><a href="https://www.facebook.com/" class="footer-link"><i class="fa-brands fa-square-facebook color-hover"></i></a></div>
        <div class="sadebar-item"><a href="https://www.instagram.com/" class="footer-link"><i class="fa-brands fa-instagram color-hover"></i></a></div>
        <div class="sadebar-item"><a href="https://pl.pinterest.com/" class="footer-link"><i class="fa-brands fa-square-pinterest color-hover"></i></a></div>
        <div class="sadebar-item"><a href="https://www.tiktok.com/pl-PL/" class="footer-link"><i class="fa-brands fa-tiktok color-hover"></i></a></div>
    </div>
</div>
</nav>