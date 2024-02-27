<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marciniak Szkolenia </title>

    <!-- Popins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Roboto Condensed -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">


    <script src="https://kit.fontawesome.com/42ee4be07a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<?php
		$con = mysqli_connect('localhost', 'root', '', 'wedkowanie');
		$kw = "SELECT tytul, zdjecie, opis FROM aktualnosci";		
		?>

<body>

<!-- NAV -->

<nav class="nav">
    <div class="wrapper nav-bar">

        <div class="logo">
            <a href=""><div class="logo-img"></div></a>
            <button href="" class="burger-icon"><i class="fa-solid fa-bars"></i></button>
        </div>
        <div class="menu ">
            <a href="#abaout" >o firmie</a>
            <a href="#service" >oferta</a>
            <a href="#news" >aktualności</a>
            <a href="./referents.html" >referencje</a>
            <a href="#cooperation" >współpraca</a>
            <a href="#info" class="contact"><i class="fa-solid fa-phone"></i>kontakt</a>
        </div>
    </div>
</nav>

<!-- HEADER -->

<header class="header">
<div class="header-arrow">
    <a href="#abaout" >
        <i class="fa-solid fa-angles-down"></i>
    </a>
</div>
<div class="wrapper">
    <div class="header-nav">
        <button class="header-btn-bhp" >BHP</button>
        <button class="header-btn-montage">Montaż</button>
        <button class="header-btn-tools">Maszyny</button>
    </div>

</div>



    <div class="slaider slaider-one">   
        <div class="wrapper">
            <div class="text">
                <div class="heding-area">
                    <h1>Szkolenia</h1><br>
                    <h2>bhp</h2>
                </div>
                <div class="text-area">
                    <p>Szkolenia BHP są kluczowe dla firmy, 
                        zapewniając bezpieczeństwo pracowników 
                        i spełniając wymogi prawne. Dodatkowo 
                        poprawiają wydajność i wizerunek firmy.</p>

                </div>
            </div>

        </div>
    </div>   

    <div class="slaider slaider-two ">
        <div class="wrapper">
            <div class="text">
                <div class="heding-area">
                    <h1>Szkolenia</h1><br>
                    <h2>Monterskie</h2>
                </div>
                <div class="text-area">
                    <p>Szkolenia montażystów rusztowań są kluczowe dla firmy, 
                        gwarantując bezpieczny montaż i spełniając przepisy prawne. 
                        Dodatkowo zwiększają wydajność i pozytywny wizerunek firmy.</p>

                </div>
            </div>
        </div>
    </div>   

    <div class="slaider slaider-three">
        <div class="wrapper">
            <div class="text">
                <div class="heding-area">
                    <h1>Szkolenia</h1><br>
                    <h2>Narzędziowe</h2>
                </div>
                <div class="text-area">
                    <p>ESzkolenia z obsługi narzędzi są niezbędne dla firmy, 
                        zapewniając bezpieczne korzystanie z narzędzi oraz 
                        spełniając wymogi prawne. Dodatkowo podnoszą wydajność 
                        pracowników i wizerunek przedsiębiorstwa.
                    </p>

                </div>
            </div>

        </div>
    </div> 

</header>

<!-- ABAOUT -->

<section class="abaout" id="abaout">
        <div class="abaout-content wrapper">
            <div class="abaout-content__photo-box">
                <div class="abaout-content__photo-box--img"></div>
                <div class="abaout-squer"></div>
            </div>
            <div class="abaout-content__text-box">
                <p class="prefix">O firmie</p>
                <h2>Szkolenia Marciniak</h2>
                <p>Firma, działająca od 1995 roku, początkowo specjalizowała się w 
                    obsłudze księgowo-biurowej, a później rozszerzyła swoją działalność o 
                    szkolenia z zakresu BHP. <br><br>
                    W 2008 roku, po uzyskaniu upoważnienia Instytutu
                     Mechanizacji Budownictwa i Górnictwa Skalnego w Warszawie, rozpoczęła 
                     szkolenia montażystów rusztowań, 
                    a od 2011 roku szkolenia dla operatorów drobnego sprzętu drogowego.</p>
                <div class="btn-bar">
                    <a href="./certificate.html"><button class="abaout-btn abaout-btn__one"> Centyfikaty <i class="fa-solid fa-chevron-right"></i></button></a>
                    <a href="#info"><button class="abaout-btn abaout-btn__two"> Kontakt <i class="fa-solid fa-phone"></i></button></a>
                </div>
            </div>
        </div>

</section>

<!-- Cooperation -->

<section class="cooperation" id="cooperation">
    <div class="wrapper">
        <p class="prefix">Współprace</p>
        <div class="cooperation-bar">
            <div class="cooperation-bar__box cooperation-bar__box--one"></div>
            <div class="cooperation-bar__box cooperation-bar__box--two"></div>
            <div class="cooperation-bar__box cooperation-bar__box--three"></div>
        </div>
    </div>
</section>

<!-- News -->




<section class="news" id="news">
    <div class="wrapper">
        <p class="prefix">Aktualności</p>
        <div class="news-bar">
        <?php
                    $res = mysqli_query($con, $kw);
                    while($tab = mysqli_fetch_row($res)) {
                    echo "<img>"
                    echo "<h3>$tab[0]</h3>"
                    echo "<p>$tab[1]<p>";
                    
                    <div class="card">
                    <div class="card__img card__img--one">  
                        <div class="magnifier">
                            <i class="fa-solid fa-magnifying-glass-arrow-right"></i>
                        </div>
                    </div>
                    
                    <h3>Szkolenie monterskie - termin</h3>
                    <p>W m-cu lutym 2024 roku planuję rozpoczęcie następnego szkolenia dla montażystów rusztowań;
                        O terminie egzaminu będę informował w trakcie trwania szkolenia
                    </p>
                    <button><a href="">Zobacz<i class="fa-solid fa-chevron-right"></i></a></button>
                </div>
                }
                ?>
           
            
            
        </div>
    </div>
</section>

<!-- Service -->

<section class="service" id="service">
    <div class="wrapper">
        <p class="prefix">Oferta</p>
        <div class="service-content">
            <div class="service-content__box-two">

                <div class="service-row">
                    
                    <div class="service-bar service-bar__one">
                        <div class="service-bar-title">
                            <h3>Szkolenie bhp</h3>
                        </div>
                        <div class="service-bar-text">
                            <ul>
                                <li>okresowe dla pracowników , pracodawców i osób kierujących,</li>
                                <li>okresowe dla służb bhp,</li>
                                <li>okresowe dla pracodawców,</li>
                                <li>doradztwo z zakresu bhp,</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-bar service-bar__two">
                        <div class="service-bar-title">
                            <h3>Obsługa firm w zakresie BHP</h3>
                        </div>
                        <div class="service-bar-text">
                            <ul>
                                <li>prowadzenie zadań służby BHP w firmac</li>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="service-row">

                    <div class="service-bar service-bar__three">
                        <div class="service-bar-title">
                            <h3>Szkolenia z obsługi maszyn drogowych</h3>
                        </div>
                        <div class="service-bar-text">
                            <ul>
                                <li>Szkolenie operatorów przecinarek do nawierzchni dróg klasa III – wszystkie typy,</li>
                                <li>Szkolenie operatorów zagęszczarek i ubijaków wibracyjnych - instruktaż stanowiskowy,</li>
                                <li>Szkolenie operatorów narzędzi udarowych ręcznych - instruktaż stanowiskowy, </li>
                            </ul>
                        </div>
                     </div>
                    <div class="service-bar service-bar__for">
                        <div class="service-bar-title">
                            <h3>Szkolenia z obsługi maszyn i urządzeń budowlanych
                            </h3>
                        </div>
                        <div class="service-bar-text">
                            <ul>
                                <li>Szkolenie montażystów rusztowań budowlano-montażowych metalowych – montaż i demontaż</li>
                            </ul>
                            <p>(uprawnienia państwowe wystawione w książeczce wg wzoru podanego w ROZPORZĄDZENIU MINISTRA GOSPODARKI z dnia 21 września 2001r., opublikowane w Dz. U. Nr 118 z dnia 15 października 2001r. poz. 1263)</p>
                        </div>
                    </div>

                </div>



            </div>
            <div class="service-content__box-one">
                <div class="acordeon-box">
                    <button class=" acordeon-title title-one"><p>Opis szkoleń</p><i class="fa-solid fa-chevron-right"></i></button>
                    <div class=" acordeon-content content-one dispairing">
                        <p>Uczestnik kursu powinien przedstawić dowód osobisty i posiadane uprawnienia wydane 
                            przez Sieć Badawczą ŁUKASIEWICZ Instytut Mechanizacji Budownictwa i Górnictwa Skalnego.
                            Do wystawienia faktury konieczne są następujące informacje i dokumenty: <br>
                            -Aktualny wypis z KRS-u lub wypis z Rejestru Działalności Gospodarczej,<br>
                            -REGON,<br>
                            -NIP,<br>
                            Należność za szkolenie winna być uregulowana gotówką bądź przelewem do dnia 
                            egzaminu. Osoby fizyczne nie kierowane przez pracodawców zobowiązane są do uregulowania 
                            należności za kurs w pierwszym tygodniu trwania szkolenia. Warunkiem dopuszczenia do 
                            egzaminu teoretycznego przed komisją egzaminacyjną jest zaliczenie kursu na podstawie 
                            obecności na wszystkich zajęciach oraz zdania egzaminu praktycznego z wynikiem pozytywnym. 
                            
                        </p>
                    </div>
                </div>
                <div class="acordeon-box">
                    <button class=" acordeon-title title-two"><p>Wymagania</p><i class="fa-solid fa-chevron-right"></i></button>
                    <div class="acordeon-content content-two dispairing">
                        <p>Warunkiem przyjęcia na kurs jest : - ukończone 18 lat, - wykształcenie 
                            co najmniej podstawowe, - wskazane doświadczenie
                             w obsłudze techniczno-eksploatacyjnej maszyn określonej specjalności. 
                        </p>
                    </div>
                </div>
                <div class="acordeon-box">
                    <button class="acordeon-title title-three"><p>Wymagane dokumenty</p><i class="fa-solid fa-chevron-right"></i></button>
                    <div class=" acordeon-content content-three dispairing">
                        <p>Uczestnik szkolenia winien przedstawić dowód osobisty, pesel, 
                            aktualne zaświadczenie lekarskie o zdolności do pracy na stanowisku 
                            operatora wybranej maszyny, książeczkę operatora w przypadku posiadania 
                            innych uprawnień Sieć Badawczą
                             ŁUKASIEWICZ Instytut Mechanizacji Budownictwa i Górnictwa Skalnego.
                        </p>
                    </div>
                </div>
                <div class="acordeon-box">
                    <button class=" acordeon-title title-for"><p>Dokument wydawany</p><i class="fa-solid fa-chevron-right"></i></button>
                    <div class=" acordeon-content content-for dispairing">
                        <p>Po ukończonym kursie i pozytywnym egzaminie uczestnik kursu 
                            otrzymuje książeczkę operatora z wpisem dotyczącym rodzaju 
                            i klasy uprawnień. Osoby, które nie uzyskają pozytywnego wyniku 
                            egzaminu otrzymują zaświadczenie o ukończeniu szkolenia. 
                            <br><br>
                            W PRZYPADKU ZAINTERESOWANIA PROSIMY O KONTAKT TELEFONICZNY LUB WYPEŁNIENIE FORMULARZA KONTAKTOWEGO W ZAKŁADCE KONTAKT
                        </p>
                    </div>
                </div>
                
            </div>
         </div>
</section>


<!-- Kontakt -->

<section class="info" id="info">
    <div class="wrapper">
        <div class="info-content">

            <div class="info-contact">
                <i class="bg-icon fa-regular fa-envelope"></i>
                <div class="info-contact-text">
                    <h2>Kontakt</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Enim repellat illum quas 
                    odio libero laboriosam vel eligendi deleniti 
                    exercitationem ab.
                    </p>
                    <div class="icon-bar">


                        <p><i class="fa-solid fa-at"></i>szkolenia@marciniak.info.pl</p>
                        <p><i class="fa-solid fa-phone"></i>695 924 306</p>
                        
                    </div>
                </div>

            </div>

            <div class="form-contact">

                <form action="https://formsubmit.io/send/put your email here" method="POST">

                    <div class="input-box-one">

                        <input
                        id="name"
                        name="name" 
                        type="name">
                        <label for="name">Imię i Nzanwisko</label>

                    </div>


                    <div class="input-box-one">

                        <input
                        id="mail"
                        name="mail" 
                        type="mail">
                        <label for="mail">Twój e-mail</label>

                    </div>


                    <div class="input-box-two">


                        <textarea 
                        name="msg" 
                        id="msg" 
                        cols="30" 
                        rows="10">
                        </textarea>
                        <label for="msg">Twoja wiadomośc</label>
                        

                    </div>

                    <input name="_redirect" type="hidden" id="name" value="./thx.html" href="./thx.html">

                    <input class="
                    submit-btn" value="Wyślij" type="submit">
                    </button>
                </form>

            </div>

        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2450.0742112135067!2d16.1098294!3d52.1147785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4705d0a10bfa7643%3A0x18fbe464c6e07e2d!2sS%C5%82odowa%201%2C%2064-200%20Wolsztyn!5e0!3m2!1spl!2spl!4v1707757880993!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</section>


<!-- Footer -->

<section class="footer">
    <div class="wrapper">
        <div class="footer-content">
            <div class="logo"></div>
            <a href="./formrules.html">Regulamin formularza</a>
            <a href="./privacypolicy.html">Polityka prywatności</a>
        </div>
        <div class="autor-bar">
            <a>Copyright © marciniak.info.pl - 2018</a>
            <a href="">Created by | Jakub Ajchler tel: 574 350 530</a>
        </div>
    </div>

</section>



<script src="./js/main.js"></script>
</body>
</html>