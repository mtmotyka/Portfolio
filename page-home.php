<?php
/*
* Template Name: Home Page
*/
get_header(); ?>
<div class="lines">
    <div class="lines-blue">
        <div id="line_0" class="line" style="top:550px"></div>
        <div id="line_1" class="line" style="top:70px"></div>
        <div id="line_2" class="line" style="top:20px"></div>
        <div id="line_3" class="line" style="top:390px"></div>
        <div id="line_4" class="line" style="top:55px"></div>
        <div id="line_5" class="line" style="top:90px"></div>
        <div id="line_6" class="line" style="top:700px"></div>
    </div>
    <div class="line" id="line-0-white"></div>
    <div class="line" id="line-1-white"></div>
    <div class="line" id="line-2-white"></div>
    <div class="line" id="line-3-white"></div>
    <div class="line" id="line-4-white"></div>
    <div class="line" id="line-5-white"></div>
    <div class="line" id="line-6-white"></div>
</div>

<section class="home-section-1 container" id="home">
    <div class="inner-home">
        <span><h1 class="glitch" data-text="mateusz">mateusz</h1></span>
        <h5>FRONT-END DEVELOPER</h5>
        <h6>EX UX DESIGNER</h6>
        <a href="#" class="btn_custom_blue circle btn_big">START</a>
    </div>
</section>

<section class="home-section-2 container" id="about">
    <div class="row">
        <div class="col-md-5">
            <h1>Trochę <br> o mnie</h1>
        </div>
        <div class="col-md-7">
            <p>Jestem Mateusz, Front-End Developer i ex UX Designer. Specjalizuje się w tworzeniu stron internetowych. Od ponad pół roku pracuję jako Dev. Dzięki rocznemu doświadczeniu jako UX Designer, mogę również spojrzeć na stronę nie tylko okiem Deva i wdrożyć ją z myślą o użytkownikach.</p>
            <p>Aktualnie jestem skupiony na doszlifowywaniu wiedzy z zakresu JavaScriptu, aby mieć mocne fundamenty przed rozpoczęciem nauki Reacta.</p>
        </div>
    </div>
</section>

<section class="home-section-3 container" id="skills">
    <div class="row">
        <div class="col-md-6">
            <div class="cloud-tag"></div>
        </div>
        <div class="col-md-6">
            <h1>UMIEJĘTNOŚCI <br> I WIEDZA</h1>
            <p>Jako Front-End Developer, mam opanowanego HTMLa oraz CSSa, których znajomość oceniam na bardzo dobrą. W projektach wykorzystuję również preprocesora CSS - SCSS. Aktualnie wciąż uczę się JavaScriptu, a jego znajomość oceniam na ponad przeciętną. W swojej pracy wykorzystuję również doświadczenia UXa, dzięki czemu nie mam problemu z operowaniem na wszelkiego rodzaju programach graficznych, głównie firmy Adobe.</p>
        </div>
    </div>
</section>

<section class="home-section-4 container" id="experience">
    <h1>DOŚWIADCZENIE</h1>
   <div class="cv-single">
    <div class="row">
            <div class="col-sm-3 date-col">
                <p class="date">09.2019-current</p>
            </div>
            <div class="col-sm-9 job-col">
                <p class="company">ADream Group</p>
                <p class="position">Front-End Developer</p>
                <p class="desc">Po niecałym roku jako UX Designer stwierdziłem, że nie zadowala mnie to co robię, a od zawsze miałem parcie na programowanie. Postanowiłem zmienić stanowisko na Front-End Developera i od września 2019 roku zajmuje się już tylko tym. Podczas kodowania stron często korzystam ze swojego dośwadczenia UXa, dzięki czemu strony są jeszcze lepsze w odbiorze.</p>
            </div>
        </div>
   </div>
   <div class="cv-single">
    <div class="row">
            <div class="col-sm-3 date-col">
                <p class="date">11.2018-09.2019</p>
            </div>
            <div class="col-sm-9 job-col">
                <p class="company">ADream Group</p>
                <p class="position">UX Designer</p>
                <p class="desc">W listopadzie 2018 roku dostałem się na staż w Agencji Interaktywnej ADream na stanowisko UX Designer. Po 3 miesiącach rozpocząłem pracę na pełen etat na tym samym stanowisku. W pracy głównie zajmowałem się tworzeniem makiet pod nowe strony, a od czasu do czasu współprowadziłem warsztat z klientami.</p>
            </div>
        </div>
   </div>
   <div class="cv-single">
    <div class="row">
            <div class="col-sm-3 date-col">
                <p class="date">10.2015-06.2019</p>
            </div>
            <div class="col-sm-9 job-col">
                <p class="company">Wyższa Szkoła Zarządzania i Bankowości w Krakowie</p>
                <p class="position">Studia na kierunku informatyka</p>
                <p class="desc">W 2015 roku rozpocząłem studia na kierunku informatyka. Kończyłem je na specjalizacji animacja i grafika komputerowa, jednak jak się później okazało to nie to co chciałem robić. W czerwcu 2019 roku obroniłem pracę inżynierską i uzyskałem tytuł inżyniera</p>
            </div>
        </div>
   </div>
</section>

<section class="home-section-5 container" id="contact">
    <div class="row">
        <div class="col-md-6 contact-text">
            <h1>KONTAKT</h1>
            <p>Potrzebujesz strony? Chcesz porozmawiać o współpracy? Napisz do mnie. </p>
            <p class="social">Znajdziesz mnie również na:</p>
            <div class="social-icons">
                <a href="#" class="social-icon linked-ico"></a>
                <a href="#" class="social-icon bit-ico"></a>
                <a href="#" class="social-icon behance-ico"></a>
            </div>
        </div>
        <div class="col-md-6 contact-form">
            <?php echo do_shortcode('[contact-form-7 id="8" title="Formularz kontaktowy"]'); ?>
        </div>
    </div>
</section>

<?php get_footer();