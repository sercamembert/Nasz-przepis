<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/recipes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
</head>
<body>
<?php
 include_once 'header.php';
?>
    <section>
        <div class="rate-recipe-container" id="rate-recipe-container">
            <div class="close-rate">
            <i class="fa-solid fa-xmark" id="rate-close"></i>
            </div>
            <div class="stars">
            <i class="fa-regular fa-star" id="1-star"></i>
            <i class="fa-regular fa-star" id="2-star"></i>
            <i class="fa-regular fa-star" id="3-star"></i>
            <i class="fa-regular fa-star" id="4-star"></i>
            <i class="fa-regular fa-star" id="5-star"></i>
            </div>
            <div class="comment">
                <textarea id="comment" class="comment-input" placeholder="Wpisz komentarz..."></textarea>
            </div>
            <div class="submit">
                <button class="add" id="rate-btn"> Prześlij opinię <i class="fa-solid fa-angles-right"></i></button>
            </div>
        </div>
    </section>
    <section  id="recipe-1-sec">
        <div class="main-container-recipes">
            <div class="main-recipes-wrapper">
                <div class="main-container-recipes-grid-item">
                    <div class="main-container-recipes-img">
                        <div class="main-container-recipes-img-describe">
                            <span class="recipes-img-describe"><i class="fa-solid fa-clock"></i>&nbsp;60min</span>
                            <span class="recipes-img-describe"><i class="fa-solid fa-face-smile"></i>&nbsp;Łatwe</span>
                            <span class="recipes-img-describe"><i class="fa-solid fa-user"></i>&nbsp; dla 4 os.</span>
                        </div>
                    </div>
                    <div class="main-container-recipes-buttons">
                        <button class="recipes-button rate" id="rate"><i class="fa-regular fa-star"></i>&nbsp;Oceń przepis</button>
                        <button class="recipes-button fav"><i class="fa-solid fa-share-nodes"></i>&nbsp;Udostępnij</button>
                        <button class="recipes-button print" id="printButton"><i class="fa-solid fa-print"></i></i>&nbsp;Drukuj</button>
                    </div>
                </div>
                <div class="main-container-recipes-grid-item">
                    <div class="component-list-recipe-title"><i class="fa-solid fa-clipboard-list"></i>&nbsp;Lista składników</div>
                        <div class="components-container">
                            <div class="components-main">
                                <div class="component"><input id="checkbox1" type="checkbox" class="checkboxes"/><label for="checkbox1" id="check-label">Cebula</label></div>
                                <div class="component"><input id="checkbox2" type="checkbox" class="checkboxes"/><label for="checkbox2" id="check-label">Czosnek ząbki</label></div>
                                <div class="component"><input id="checkbox3" type="checkbox" class="checkboxes"/><label for="checkbox3" id="check-label">Naturalnie smaczne Lasagne Knorr</label></div>
                                <div class="component"><input id="checkbox4" type="checkbox" class="checkboxes"/><label for="checkbox4" id="check-label">Mięso mielone wołowe</label></div>
                                <div class="component"><input id="checkbox5" type="checkbox" class="checkboxes"/><label for="checkbox5" id="check-label">Czerwone wino</label></div>
                                <div class="component"><input id="checkbox6" type="checkbox" class="checkboxes"/><label for="checkbox6" id="check-label">Koncentrat pomidorowy</label></div>
                                <div class="component"><input id="checkbox7" type="checkbox" class="checkboxes"/><label for="checkbox7" id="check-label">Makaron Lasagne</label></div>
                                <div class="component"><input id="checkbox8" type="checkbox" class="checkboxes"/><label for="checkbox8" id="check-label">Mleko</label></div>
                                <div class="component"><input id="checkbox9" type="checkbox" class="checkboxes"/><label for="checkbox9" id="check-label">Mąka</label></div>
                                <div class="component"><input id="checkbox10" type="checkbox" class="checkboxes"/><label for="checkbox10" id="check-label">Masło</label></div>
                                <div class="component"><input id="checkbox11" type="checkbox" class="checkboxes"/><label for="checkbox11" id="check-label">Ser żółty</label></div>
                                <div class="component"><input id="checkbox12" type="checkbox" class="checkboxes"/><label for="checkbox12" id="check-label">Gałka muszkatołowa</label></div>
                                <div class="component"><input id="checkbox13" type="checkbox" class="checkboxes"/><label for="checkbox13" id="check-label">Oliwa</label></div>
                                <div class="component"><input id="checkbox14" type="checkbox" class="checkboxes"/><label for="checkbox14" id="check-label">Woda</label></div>

                            </div>
                            <div class="components-weight">
                                <div class="component right">2 sztuki</div>
                                <div class="component right">2 sztuki</div>
                                <div class="component right">1 opakowanie</div>
                                <div class="component right">500 gramów</div>
                                <div class="component right">150 mililitrów</div>
                                <div class="component right">1 łyżka</div>
                                <div class="component right">1 opakowanie</div>
                                <div class="component right">500 mililitrów</div>
                                <div class="component right">3 łyżki</div>
                                <div class="component right">60 gramów</div>
                                <div class="component right">150 gramów</div>
                                <div class="component right">1 szczypta</div>
                                <div class="component right">3 łyżki</div>
                                <div class="component right">400 mililitrów</div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <main>
      <section class="step-list-sec" id="recipe-2-sec">
        <div class="step-main-container">
            <div class="step-container">
                <div class="step">
                    <span class="step-coutn">Krok 1</span><br>
                    Cebule i czosnek pokrój w drobną kostkę, wrzuć na rozgrzaną oliwę. Jak tylko się przesmażą dodaj mielone mięso i smaż powoli.
                </div>
                <div class="step">
                    <span class="step-coutn">Krok 2</span><br>
                    Wlej wino i poczekaj, aż odparuje.
                </div>
                <div class="step">
                    <span class="step-coutn">Krok 3</span><br>
                    Fix Knorr wymieszaj w 400 mililitrach wody i wlej do mięsa. Całość duś powoli około 20 minut, mięso powinno być miękkie, a sos gęsty.
                </div>
                <div class="step">
                    <span class="step-coutn">Krok 4</span><br>
                    W tym czasie przygotuj sos beszamel. W rondelku rozpuść masło i wsyp mąkę. Mieszaj, aż mąka połączy się z tłuszczem.
                </div>
                <div class="step">
                    <span class="step-coutn">Krok 5</span><br>
                    Teraz wlej mleko i energicznie mieszaj tak, aby rozbić wszystkie grudki. Sos zagotuj, dopraw szczyptą soli oraz gałką muszkatołową. Na końcu dodaj do gorącego sosu połowę startego sera (najlepszy będzie o wyrazistym smaku). Mieszaj, aż ser się roztopi.
                </div>
                <div class="step">
                    <span class="step-coutn">Krok 6</span><br>
                    Najlepiej w kwadratowym lub prostokątnym naczyniu żaroodpornym układaj lasagne. Najpierw posmaruj dno sosem beszamel, następnie układaj surowy makaron tak, aby płaty pokryły dno i lekko zachodziły jeden za drugi.
                </div>
                <div class="step">
                    <span class="step-coutn">Krok 7</span><br>
                    Następnie ponownie posmaruj makaron sosem beszamel. Później nałóż warstwę mięsa, następnie połóż drugą warstwę makaronu i beszamelu. Czynność powtarzaj do wyczerpania mięsa. Ostatnią warstwę przykryj makaronem i polej po wierzchu obficie pozostałym beszamelem. Na końcu posyp serem i piecz w piekarniku rozgrzanym do 180 °C przez 30 minut.
                </div>
            </div>
            <div class="img-slider">
                <div class="slider-img-container" style="background-image: url(/img/lasagne-z-sosem-bolognese-krok-1.png);"></div>
                <div class="slider-img-container" style="background-image: url(/img/lasagne-z-sosem-bolognese-krok-4.png);"></div>
                <div class="slider-img-container" style="background-image: url(/img/lasagne-z-sosem-bolognese-krok-7.png);"></div>
            </div>
        </div>
      </section>
    </main>

<?php
include_once 'footer.php';
?>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="js/theme.js"></script>
<script src="js/print.js"></script>
<script src="js/rate-window.js"></script>
</body>
</html>