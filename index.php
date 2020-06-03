<!DOCTYPE html>
<html lang="ca">
    <head>
        <title>Fibo - El petit comerç a un clic</title>

        <meta name="description" content="El petit comerç a un clic">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        
        <link rel="icon" href="img/fibo-icon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header id="site-header" class="site-header header-background-hidden site-header-with-hidden-nav-mobile">
            <div class="content-site-header">
                <a id="logo-site-header" href="#hero" class="logo-site-header logo-hidden link-with-scroll">
                    <img src="img/logo-white.svg" alt="Logo Fibo">
                </a>
                <img id="menu-icon" class="menu-icon" src="img/menu-icon.svg" alt="Menu Icon">
                <nav id="nav-site-header" class="nav-site-header">
                    <ul class="content-nav-site-header">
                        <li class="nav-item-site-header white-list-item nav-item-show-line"><a class="link-with-scroll" href="#welcome-section"><span>Què és Fibo?</span></a></li>
                        <li class="nav-item-site-header white-list-item nav-item-show-line"><a class="link-with-scroll" href="#benefits-section"><span>Beneficis Fibo</span></a></li>
                        <li class="nav-item-site-header blue-list-item"><a class="link-with-scroll" href="#more-info-section"><span>Vols ser venedor?</span></a></li>
                        <li class="nav-item-site-header white-list-item nav-item-show-line"><a class="link-with-scroll" href="#newsletter-section"><span>Com comprar?</span></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="site-main">
            <div id="hero" class="hero">
                <div class="content-hero">
                    <h1 class="fibo-main-heading"><img class="logo-hero" src="img/logo-hero.svg" alt="Fibo | El petit comerç a un clic"></h1>
                    <p class="slogan-hero">El petit comerç a un clic!</p>
                    <div class="hero-buttons">
                        <a class="link-with-scroll" href="#more-info-section">Demana informació</a>
                        <a class="link-with-scroll" href="#newsletter-section">Subscriu-te al newsletter</a>
                    </div>
                </div>
                <a id="arrow-down-button" class="arrow-down-button link-with-scroll" href="#welcome-section"><img src="img/arrow-down.svg" alt="Arrow Down Button"></a>
            </div>
            <section id="welcome-section" class="welcome-section">
                <div class="content-welcome-section content-section">
                    <h2 class="welcome-heading">Benvingut a <img src="img/logo-blue.svg" alt="Logo Fibo"></h2>
                    <p><span class="paragraph-decorator"></span>Davant d'un mercat dinàmic i canviant, ens hem proposat buscar una manera senzilla per <em>digitalitzar els negocis tradicionals</em>.</p>
                    <p>És per això que ha sorgit Fibo, una plataforma que pretén <em>revolucionar la venda online</em> tal com la coneixem.</p>    
                    <p><em>Fibo és una plataforma destinada a connectar consumidors amb el comerç local</em>.</p>
                </div>
            </section>
            <section id="benefits-section" class="benefits-section blue-background">
                <div class="content-benefits-section content-section">
                    <h2 class="benefits-heading floating-heading">Beneficis Fibo<span class="cursor-icon"></span></h2>
                    <ul class="list-benefits">
                        <li class="list-item-benefit">
                            <p>1</p>
                            <h3>Afegim el teu negoci a Fibo</h3>
                            <p>Tinguis o no botiga online podràs donar-te a conèixer venent a Fibo</p>
                        </li>
                        <li class="list-item-benefit">
                            <p>2</p>
                            <h3>Fàcil gestió de la teva botiga</h3>
                            <p>L'equip de Fibo està a la teva disposició les 24h</p>
                        </li>
                        <li class="list-item-benefit">
                            <p>3</p>
                            <h3>Augmenta la teva visibilitat</h3>
                            <p>Formaràs part d'una xarxa professional de venedors</p>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="features-section" class="features-section">
                <div class="content-features-section content-section">
                    <ul class="list-features">
                        <li class="list-item-feature">
                            <h2>Sense inversió</h2>
                            <p>Davant de l'actual situació d'excepcionalitat des de Fibo volem oferir l'alta de la botiga i la digitalització sense cap cost per ajudar a tots aquells afectats tant temps com sigui necessari.</p>
                        </li>
                        <li class="list-item-feature">
                            <h2>Més tràfic de clients</h2>
                            <p>Gràcies a internet podràs mantenir el teu negoci obert les 24h del dia i escalar la visibilitat del teu negoci sense limitacions.</p>
                        </li>
                        <li class="list-item-feature">
                            <h2>Kit de digitalització</h2>
                            <p>Per complementar la plataforma Fibo, en col·laboració amb MKS Marketing Solutions facilitem la transformació del teu negoci. Des de formació, fotografies, suport tècnic, màrqueting, etc.</p>
                        </li>
                        <li class="list-item-feature">
                            <h2>Nosaltres invertim per tu</h2>
                            <p>En formar part de l'entorn Fibo no t'hauràs de preocupar per la captació de nous clients, nosaltres de manera activa realitzarem campanyes que augmentaran la teva visibilitat.</p>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="more-info-section" class="more-info-section blue-background">
                <div class="content-more-info-section content-section">
                    <h2 class="more-info-heading floating-heading">Més informació<span class="cursor-icon"></span></h2>
                    <div class="content-form">
                        <p>Informat sense compromís, un comercial de Fibo es posarà en contacte en 24h.</p>
                        <form action="add-to-companies.php" method="post" id="more-info-form" class="more-info-form">
                            <div id="container-result-form-more-info"></div>
                            <div class="list-inputs-form">
                                <input type="text" name="comercial-name" required placeholder="Nom Comercial">
                                <input type="text" name="person-to-contact" required placeholder="Persona de Contacte">
                                <input type="email" name="email" required placeholder="Email">
                                <input type="tel" name="phone" required placeholder="Telèfon">
                                <input type="number" name="postal-code" required placeholder="Codi postal">
                                <select name="sector" required>
                                    <option value="" selected disabled hidden>- Selecciona el sector -</option>
                                    <option value="alimentacio i begudes">Alimentació i begudes</option>
                                    <option value="nedons">Nedons</option>
                                    <option value="bellesa i salut">Bellesa i salud</option>
                                    <option value="vehicles">Vehícles</option>
                                    <option value="esports">Esports</option>
                                    <option value="electronica i informatica">Electrònica i informàtica</option>
                                    <option value="llar i decoracio">Llar i decoració</option>
                                    <option value="joguines">Joguines</option>
                                    <option value="llibres i papereria">Llibres i papereria</option>
                                    <option value="mascotes">Mascotes</option>
                                    <option value="moda i complements">Moda i complements</option>
                                    <option value="musica i pelicules">Música i pel·lícules</option>
                                    <option value="videojocs">Videojocs</option>
                                </select>
                            </div>
                            <p>Omplint el formulari i fent clic a "Enviar" vostè consenteix que Fibo utilitzi les vostres dades personals perquè l'equip comercial es pugui dirigir a vostè per correu electrònic o per telèfon amb la finalitat de donar informació sobre la plataforma.</p>
                            <label><input name="get-periodic-data" type="checkbox"> Desitjo rebre informació periòdica sobre la plataforma Fibo i els seus serveis per correu electrònic.</label>
                            <input class="button" type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </section>
            <section id="newsletter-section" class="newsletter-section">
                <div class="content-newsletter-section content-section">
                    <form action="add-to-newsletter.php" id="newsletter-form" method="POST" class="newsletter-form">
                        <div class="content-newsletter-form">
                            <div>
                                <h2>Newsletter de <img src="img/logo-blue.svg" alt="Logo Fibo"></h2>
                                <p>Vols estar al dia de com comprar i de les últimes notícies, ofertes i promocions?</p>
                            </div>
                            <div>
                                <div id="container-result-form-newsletter"></div>
                                <input type="email" required name="email" placeholder="Introdueix el teu correu electrònic">
                                <label><input type="checkbox" required> Autoritzo que Fibo utilitzi les meves dades per enviar-me notícies, promocions i ofertes personalitzades mitjançant correu electrònic.</label>
                            </div>
                        </div>
                        <input class="button" type="submit" value="Subscriurem">
                    </form>
                </div>
            </section>
        </main>
        <footer class="site-footer">
            <div class="content-footer">
                <div class="div-footer">
                    <h3>Atenció al client</h3>
                    <p>info@fibo.cat</p>
                    <p><a href="#more-info-section" class="link-with-scroll">Contacte</a></p>
                </div>
                <div class="div-footer">
                    <h3>Termes legals</h3>
                    <p>Política de cookies</p>
                    <p>Política de privacitat</p>
                    <p>Avís legal</p>
                </div>
                <div class="div-footer">
                    <h3>Segueix-nos</h3>
                    <ul class="list-social-media">
                        <li>
                            <a href="https://www.instagram.com/fibo.cat/" target="blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/Fibocat-102160391487929" target="blank"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="companies-footer">
                <img src="img/logo-mks.svg" alt="Logo MKS">
                <img src="img/logo-white.svg" alt="Logo Fibo">
            </div>
            <p>Drets d'autor &copy; 2020, Fibo l Web by MKS</p>
        </footer>
        <?php if(!isset($_COOKIE["cookies-accepted"])): ?>
            <div id="cookies-message" class="cookies-message">
                <p>Encara que puguis comprar les galetes del teu forn preferit a Fibo, també necessitem que acceptis les nostres (: <a>"A veure les galetes"</a></p>
                <input id="cookies-button" type="button" class="white-button" value="Accepto!">
            </div>
        <?php endif; ?>
        <script src="https://kit.fontawesome.com/9ed2ade2b5.js" crossorigin="anonymous"></script>
        <script src="js/sliding-scroll.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>