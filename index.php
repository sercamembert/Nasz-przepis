<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
</head>
<body>

<?php
 include_once 'header.php';
?>
<section id="all">
<main>
<section class="sec-1 bright">
    <div class="sec-1-container">
        <div class="grid-wrapper-sec-1">
            <div class="info-grid-item item-title">Przepis dnia:</div>
            <div class="info-grid-item item-title">Polecane artykuły:</div>
           <div class="info-grid-item item-3" style="background-image: url(img/lasagne.png);">
           <a href="lasagne.php" class="img-link">
                <div class="info-grid">
                    <div class="info-grid-item-main-describe"> <p style="font-size: 1.5vw;font-weight:700;"> Lasagne bolognese</p></div>
                    <div class="info-grid-item-main-describe"><i class="fa-solid fa-clock"></i>&nbsp;60min</div>
                    <div class="info-grid-item-main-describe"><i class="fa-solid fa-face-smile"></i>&nbsp;Łatwe</div>
                    <div class="info-grid-item-main-describe"><i class="fa-solid fa-user"></i>&nbsp; dla 4 os.</div>
                </div>
           </a>
            </div>
            <div class="info-grid-item item-4">
                <div class="item-4-container">
                    <div class="sec-main-item" style="background-image: url(img/4przepisy/pierogi-dynia.png);"><div class="sec-main-info">Pierogi z dynią</div></div>
                    <div class="sec-main-item" style="background-image: url(img/4przepisy/ciasto-czekoladowe-ze-sliwkami.png)"><div class="sec-main-info">Ciasto czekoladowe</div></div>
                    <div class="sec-main-item" style="background-image: url(img/4przepisy/kapusniak-z-boczkiem-i-kielbasa.png)"><div class="sec-main-info">Kapuśniak z kiełbasą</div></div>
                    <div class="sec-main-item" style="background-image: url(img/4przepisy/cynamonowe-racuchy-ze-sliwka.png)"><div class="sec-main-info">Racuchy z jabłek</div></div>
                </div>
            </div>
        </div>
        <nav>
        <div class="dish-types">
            <div class="dishes"><a href="#section-2" class="dish-link"> <img src="img/dish.png" alt="danie-glowne"><br>Dania główne</a></div>
            <div class="dishes"><a href="#section-3" class="dish-link"><img src="img/soup.png" alt="Zupy"><br>Zupy</a></div>
            <div class="dishes"><a href="#section-4" class="dish-link"><img src="img/salad.png" alt="Sałątki"><br>Sałatki</a></div>
            <div class="dishes"><a href="#section-5" class="dish-link"><img src="img/cake.png" alt="Ciasta"><br>Ciasta</a></div>
            <div class="dishes"><a href="#section-6" class="dish-link"><img src="img/cupcake.png" alt="Przekąski"><br>Przekąski</a></div>
        </div>
    </div>
 </nav>
</section>
</main>
<section class="sec-dish bright" id="section-2">
    <div class="sec-dish-container">
       <div class="title-container"><img src="img/dish.png" alt="danie-glowne">&nbsp;Dania główne</div>
            <div class="main-container-sec-dish">
                <div class="item-grid-sec-dish">
                    <div class="main-recipe-2" style="background-image: url(img/dania-glowne/kotleciki-z-jajkami.png);"></div>
                    <p class="sec-dish-image-describe"><span class="match">Kotleciki z jajek a la carbonara</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;45min</p>
                </div>
                    <div class="item-grid-sec-dish">
                        <div class="main-recipe-2" style="background-image: url(img/dania-glowne/fingersy-z-kurczaka.png);"></div>
                        <p class="sec-dish-image-describe"><span class="match">Fingersy z kurczaka</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;15min</p>
                    </div>
                        <div class="item-grid-sec-dish">
                            <div class="main-recipe-2" style="background-image: url(img/dania-glowne/zapiekanka-ziemniaczana-z-kielbasa.png);"></div>
                            <p class="sec-dish-image-describe"><span class="match">Zapiekanka ziemniaczana z kiełbasą&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;60min</p>
                        </div>
                            <div class="item-grid-sec-dish">
                                <div class="main-recipe-2" style="background-image: url(img/dania-glowne/de-volaille.png);"></div>
                                <p class="sec-dish-image-describe"><span class="match">Kotlety De Volaille</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;45min</p>
                            </div>
                                <div class="item-grid-sec-dish">
                                    <div class="main-recipe-2" style="background-image: url(img/dania-glowne/kotlety-losos.png);"></div>
                                    <p class="sec-dish-image-describe"><span class="match">Kotlety rybne z łososia</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;45min</p>
                                </div>
                            <div class="item-grid-sec-dish">
                                <div class="main-recipe-2" style="background-image: url(img/dania-glowne/kotlety-po-kaszubsku.png);"></div>
                                <p class="sec-dish-image-describe"><span class="match">Kotlety po kaszubsku</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;30min</p>
                            </div>
                        <div class="item-grid-sec-dish">
                            <div class="main-recipe-2" style="background-image: url(img/dania-glowne/curry-z-kurczaka.png);"></div>
                            <p class="sec-dish-image-describe"><span class="match">Curry z kurczaka</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;60min</p>
                        </div>
                    <div class="item-grid-sec-dish">
                        <div class="main-recipe-2" style="background-image: url(img/dania-glowne/piers-z-kurczaka-pieczona.png);"></div>
                        <p class="sec-dish-image-describe"><span class="match">Pierś z kurczaka pieczona</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;45min</p>
                    </div>
                <div class="item-grid-sec-dish">
                    <div class="main-recipe-2" style="background-image: url(img/dania-glowne/tradycyjny-schabowy-z-panierka.png);"></div>
                    <p class="sec-dish-image-describe"><span class="match">Tradycyjny schabowy z panierką</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;30min</p>
                </div>
            </div>
        <div class="check-other-recipes">
            <button class="add other">Sprawdź inne przepisy&nbsp;<i class="fa-solid fa-angles-right"></i></button>
             
        </div>
    </div>
</section>
<section class="sec-dish bright" id="section-3">
    <div class="sec-dish-container">
        <div class="title-container"><img src="img/soup.png" alt="Zupy">&nbsp;Zupy</div>
            <div class="main-container-sec-dish">
                <div class="item-grid-sec-dish">
                    <div class="main-recipe-2" style="background-image: url(img/zupy/zupa-rybna.png);"></div>
                    <p class="sec-dish-image-describe"><span class="match">Zupa rybna</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;45min</p>
                </div>
                    <div class="item-grid-sec-dish">
                        <div class="main-recipe-2" style="background-image: url(img/zupy/barszcz-czerwony-z-kurczakiem.png);"></div>
                        <p class="sec-dish-image-describe"><span class="match">Barszcz czerwony z kurczakiem</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;30min</p>
                    </div>
                        <div class="item-grid-sec-dish">
                            <div class="main-recipe-2" style="background-image: url(img/zupy/pejzanka.png);"></div>
                            <p class="sec-dish-image-describe"><span class="match">Pejzanka</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;60min</p>
                        </div>
                            <div class="item-grid-sec-dish">
                                <div class="main-recipe-2" style="background-image: url(img/zupy/zupa-pak-choi.png);"></div>
                                <p class="sec-dish-image-describe"><span class="match">Zupa pak choi</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;45min</p>
                            </div>
                                <div class="item-grid-sec-dish">
                                    <div class="main-recipe-2" style="background-image: url(img/zupy/rosol.png);"></div>
                                    <p class="sec-dish-image-describe"><span class="match">Rosół z kury</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;90min</p>
                                </div>
                            <div class="item-grid-sec-dish">
                                <div class="main-recipe-2" style="background-image: url(img/zupy/pomidorowa.png);"></div>
                                <p class="sec-dish-image-describe"><span class="match">Pomidorowa z makaronem</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;60min</p>
                            </div>
                        <div class="item-grid-sec-dish">
                            <div class="main-recipe-2" style="background-image: url(img/zupy/barszcz-bialy-a-la-krupnik.png);"></div>
                            <p class="sec-dish-image-describe"><span class="match">Barszcz biały a la krupnik</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;30min</p>
                        </div>
                    <div class="item-grid-sec-dish">
                        <div class="main-recipe-2" style="background-image: url(img/zupy/barszcz-ukrainski-z-mrozonymi-warzywami.png);"></div>
                        <p class="sec-dish-image-describe"><span class="match">Barszcz Ukraiński </span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;30min</p>
                    </div>
                <div class="item-grid-sec-dish">
                    <div class="main-recipe-2" style="background-image: url(img/zupy/zupa-grochowa-z-boczkiem.png);"></div>
                    <p class="sec-dish-image-describe"><span class="match">Zupa grochowa z boczkiem</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;60min</p>
                </div>
            </div>
        <div class="check-other-recipes">
            <button class="add other">Sprawdź inne przepisy&nbsp;<i class="fa-solid fa-angles-right"></i></button>
             
        </div>
    </div>
</section>
<section class="sec-dish bright" id="section-4">
    <div class="sec-dish-container">
        <div class="title-container"><img src="img/salad.png" alt="Sałątki">&nbsp;Sałatki</div>
            <div class="main-container-sec-dish">
                <div class="item-grid-sec-dish">
                    <div class="main-recipe-2" style="background-image: url(img/sałatki/salatka-ryzowa-z-tunczykiem.png);"></div>
                    <p class="sec-dish-image-describe"><span class="match">Sałatka ryżowa z tuńczykiem</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;30min</p>
                </div>
                    <div class="item-grid-sec-dish">
                        <div class="main-recipe-2" style="background-image: url(img/sałatki/salatka-z-czerwona-fasola-i-niebieskim-serem.png);"></div>
                        <p class="sec-dish-image-describe"><span class="match">Sałatka z czerwoną fasolą</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;30min</p>
                    </div>
                        <div class="item-grid-sec-dish">
                            <div class="main-recipe-2" style="background-image: url(img/sałatki/salatka-srodziemnomorska-z-ryzem.png);"></div>
                            <p class="sec-dish-image-describe"><span class="match">Sałatka śródziemnomorska z ryżem</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;60min</p>
                        </div>
                            <div class="item-grid-sec-dish">
                                <div class="main-recipe-2" style="background-image: url(img/sałatki/salatka-gyros-2.png);"></div>
                                <p class="sec-dish-image-describe"><span class="match">Sałatka gyros</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;45min</p>
                            </div>
                                <div class="item-grid-sec-dish">
                                    <div class="main-recipe-2" style="background-image: url(img/sałatki/blyskawiczna-salatka-jarzynowa-3.png);"></div>
                                    <p class="sec-dish-image-describe"><span class="match">Błyskawiczna sałatka jarzynowa</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;15min</p>
                                </div>
                            <div class="item-grid-sec-dish">
                                <div class="main-recipe-2" style="background-image: url(img/sałatki/wykwintna-salatka-sledziowa-z-majonezem-3.png);"></div>
                                <p class="sec-dish-image-describe"><span class="match">Sałatka śledziowa z jajkiem</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;30min</p>
                            </div>
                        <div class="item-grid-sec-dish">
                            <div class="main-recipe-2" style="background-image: url(img/sałatki/salatka-we-wloskim-stylu-z-czosnkowym-sosem.png);"></div>
                            <p class="sec-dish-image-describe"><span class="match">Sałatka we włoskim stylu</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;30min</p>
                        </div>
                    <div class="item-grid-sec-dish">
                        <div class="main-recipe-2" style="background-image: url(img/sałatki/salatka-z-kurczakiem-i-ryzem.png);"></div>
                        <p class="sec-dish-image-describe"><span class="match">Sałatka z kurczakiem i ryżem</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;45min</p>
                    </div>
                <div class="item-grid-sec-dish">
                    <div class="main-recipe-2" style="background-image: url(img/sałatki/salatka-fusilli.png);"></div>
                    <p class="sec-dish-image-describe"><span class="match">Sałatka fusilli</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;40min</p>
                </div>
            </div>
        <div class="check-other-recipes">
            <button class="add other">Sprawdź inne przepisy&nbsp;<i class="fa-solid fa-angles-right"></i></button>
             
        </div>
    </div>
    </section>
<section class="sec-dish bright" id="section-5">
    <div class="sec-dish-container">
        <div class="title-container"><img src="img/cake.png" alt="Ciasta">&nbsp;Ciasta</div>
            <div class="main-container-sec-dish">
                <div class="item-grid-sec-dish">
                    <div class="main-recipe-2" style="background-image: url(img/ciasta/babka_pomaranczowa.png);"></div>
                    <p class="sec-dish-image-describe"><span class="match">Babka pomarańczowam</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;20min</p>
                </div>
                    <div class="item-grid-sec-dish">
                        <div class="main-recipe-2" style="background-image: url(img/ciasta/tarta_cytrynowa_z_beza.png);"></div>
                        <p class="sec-dish-image-describe"><span class="match">Tarta cytrynowa z bezą</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;60min</p>
                    </div>
                        <div class="item-grid-sec-dish">
                            <div class="main-recipe-2" style="background-image: url(img/ciasta/milky-way-gotowe.png);"></div>
                            <p class="sec-dish-image-describe"><span class="match">Ciasto mleczna kanapka</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;70min</p>
                        </div>
                            <div class="item-grid-sec-dish">
                                <div class="main-recipe-2" style="background-image: url(img/ciasta/kopiec-kreta-gotowy.png);"></div>
                                <p class="sec-dish-image-describe"><span class="match">Kopiec kreta</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;60min</p>
                            </div>
                                <div class="item-grid-sec-dish">
                                    <div class="main-recipe-2" style="background-image: url(img/ciasta/murzynek.png);"></div>
                                    <p class="sec-dish-image-describe"><span class="match">Murzynek z kremem</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;60min</p>
                                </div>
                            <div class="item-grid-sec-dish">
                                <div class="main-recipe-2" style="background-image: url(img/ciasta/budyniowiec.png);"></div>
                                <p class="sec-dish-image-describe"><span class="match">Budyniowiec</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;90min</p>
                            </div>
                        <div class="item-grid-sec-dish">
                            <div class="main-recipe-2" style="background-image: url(img/ciasta/tarta-z-borowkam.png);"></div>
                            <p class="sec-dish-image-describe"><span class="match">Tarta z białą czekoladą i borówkami</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;15min</p>
                        </div>
                    <div class="item-grid-sec-dish">
                        <div class="main-recipe-2" style="background-image: url(img/ciasta/krucha-tarta-z-jablkami.png);"></div>
                        <p class="sec-dish-image-describe"><span class="match">Krucha tarta z jabłkami</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;65min</p>
                    </div>
                <div class="item-grid-sec-dish">
                    <div class="main-recipe-2" style="background-image: url(img/ciasta/tarta-czekoladowa.png);"></div>
                    <p class="sec-dish-image-describe"><span class="match">Tarta czekoladowa</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;80min</p>
                </div>
            </div>
        <div class="check-other-recipes">
            <button class="add other">Sprawdź inne przepisy&nbsp;<i class="fa-solid fa-angles-right"></i></button>
             
        </div>
    </div>
</section>
<section class="sec-dish bright" id="section-6">
    <div class="sec-dish-container">
        <div class="title-container"><img src="img/cupcake.png" alt="Przekąski">&nbsp;Przekąski</div>
            <div class="main-container-sec-dish">
                <div class="item-grid-sec-dish">
                    <div class="main-recipe-2" style="background-image: url(img/przekąski/paszteciki-z-serem-feta.png);"></div>
                    <p class="sec-dish-image-describe"><span class="match">Paszteciki z serem feta</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;30min</p>
                </div>
                    <div class="item-grid-sec-dish">
                        <div class="main-recipe-2" style="background-image: url(img/przekąski/kajzerki-ze-szpinakiem-i-pieczarkami.png);"></div>
                        <p class="sec-dish-image-describe"><span class="match">Kajzerki ze szpinakiem i pieczarkami</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;45min</p>
                    </div>
                        <div class="item-grid-sec-dish">
                            <div class="main-recipe-2" style="background-image: url(img/przekąski/parowki-w-ciescie-z-warzywami.png);"></div>
                            <p class="sec-dish-image-describe"><span class="match">Parówki w cieście francuskim</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;30min</p>
                        </div>
                            <div class="item-grid-sec-dish">
                                <div class="main-recipe-2" style="background-image: url(img/przekąski/chipsy-z-tortili.png);"></div>
                                <p class="sec-dish-image-describe"><span class="match">Chipsy z tortilli</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;60min</p>
                            </div>
                                <div class="item-grid-sec-dish">
                                    <div class="main-recipe-2" style="background-image: url(img/przekąski/placki-ziemniaczane-po-goralsku.png);"></div>
                                    <p class="sec-dish-image-describe"><span class="match">Placki ziemniaczane po góralsku</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;30min</p>
                                </div>
                            <div class="item-grid-sec-dish">
                                <div class="main-recipe-2" style="background-image: url(img/przekąski/kanapki-z-pieczona-wolowina-i-piklami.png);"></div>
                                <p class="sec-dish-image-describe"><span class="match">Kanapki z pieczoną wołowiną</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;15min</p>
                            </div>
                        <div class="item-grid-sec-dish">
                            <div class="main-recipe-2" style="background-image: url(img/przekąski/koktajlowe-roladki.png);"></div>
                            <p class="sec-dish-image-describe"><span class="match">Roladki z ciasta francuskiego</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;45min</p>
                        </div>
                    <div class="item-grid-sec-dish">
                        <div class="main-recipe-2" style="background-image: url(img/przekąski/frytki-batat.png);"></div>
                        <p class="sec-dish-image-describe"><span class="match">Grillowane frytki z batatatów</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;35min</p>
                    </div>
                <div class="item-grid-sec-dish">
                    <div class="main-recipe-2" style="background-image: url(img/przekąski/francuskie_rogaliki_z_jablkami.png);"></div>
                    <p class="sec-dish-image-describe"><span class="match">Francuskie rogaliki z jabłkami</span>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;10min</p>
                </div>
            </div>
        <div class="check-other-recipes">
            <button class="add other">Sprawdź inne przepisy&nbsp;<i class="fa-solid fa-angles-right"></i></button>
             
        </div>
    </div>
</section>
<section class="sec-newsletter bright" id="section-newsletter">
    <div class="newsletter-container">
        <div class="newsletter-title">
            <p><i class="fa-solid fa-envelope-open-text"></i>&nbsp;NEWSLETTER</p><br>
            <span> Bądź na bierząco - otrzymuj powiadomienia o nowych przepisach</span>
        </div>
        <div class="newsletter-buttons">
            <input type="text" name="name" id="news-name" class="news-input-1" placeholder="Wpisz imię..."">
            <input type="text" name="email" id="news-email" class="news-input-2" placeholder="Wpisz adres e-mail...">
            <button type="submit" class="newsletter-button" id="newsBtn"><span class="news-btn-span">Zapisz się</span></button>
        </div>
        <div class="newsletter-buttons" style="margin-top: 0;">
            <span class="required" id="required1"></span>
            <span class="required" id="required2"></span>
            <span class="required" id="required3"></span>
        </div>
    </div>
</section>
<section class="about-site bright" id="section-about">
    <div class="about-container">
        <div class="about-title"> <img src="img/logo.png" alt="whisk-icon"><br>Nasz przepis - o nas</div>
        <div class="about-info">
            <p>
                Gotowanie to nasza pasja ! Pasja, która łączy, sprawia ogromną radość, generuje mnóstwo pozytywnych doświadczeń – jedyna w swoim rodzaju.
                Setki godzin spędzonych w kuchni to setki niezapomnianych chwil. Każdy przygotowywany posiłek to nowe wyzwanie – zawsze chcemy dążyć do idealnego smaku, ale także efektu wizualnego. 
                Pasję tę postanowiliśmy przekuć w blog kulinarny. Przeważyła chęć podzielenia się naszymi doświadczeniami oraz potrzeba poznania waszych opinii. To pozwoli na jeszcze lepsze doprecyzowanie naszych sprawdzonych przepisów.
                Zaznaczamy, że przedstawione na blogu przepisy nie są publikowane w celu przypisania im naszego osobistego autorstwa. Są to w znakomitej większości przepisy dobrze każdemu znanych potraw – nie wymyśliliśmy ich ! W większości przypadków skorzystaliśmy z wielu propozycji przygotowania potraw ogólnie dostępnych w książkach kucharskich, na blogach kulinarnych, trafiliśmy na nie w gazetach lub zostały nam podpowiedziane przez bliskich czy znajomych.
                W efekcie powstał ten zbiór znanych, sprawdzonych i starannie wyselekcjonowanych przepisów.
            </p>
        </div>
    </div>
</section>
<?php
 include_once 'footer.php';
?>
</section>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="js/scroll-animation.js"></script>
<script src="js/walidacja-email.js"></script>
<script src="js/close-find.js"></script>
<script src="js/find.js"></script>
<script src="js/sidebar-animation.js"></script>
<script src="js/theme.js"></script>
<script src="js/add-window.js"></script>

</body>
</html>
