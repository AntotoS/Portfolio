<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portfolio - Anthony Skrzypczak</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <script type="text/javascript" src="js/script.js" defer></script>
</head>
<body id="top">
    <?php include('pages/blocs/nav.php'); ?>
    <header>
        <h1>Hello!</h1>
    </header>

    <main>
        <section id="a_propos">
            <h2>A PROPOS DE MOI</h2>

            <hr>

            <div class="description">
                <p>
                    Bonjour ! Je suis Anthony Skrzypczak, un passionné d'informatique en première année de 
                    Bachelor à l'ESGI. Actuellement à la recherche d'un stage de fin d'année et d'une 
                    alternance à partir de septembre prochain.
                </p>
                <p>
                    Après avoir exploré l'histoire de l'art et l'archéologie lors de ma licence, mon intérêt 
                    pour les défis techniques m'a naturellement conduit vers l'informatique. J'ai ainsi 
                    commencé une licence en informatique, où j'ai été initié à la programmation informatique. 
                    Déterminé à acquérir une expérience pratique plus approfondie, 
                    j'ai rejoint l'ESGI pour sa réputation en matière d'enseignement axé sur la pratique et ses 
                    opportunités d'alternance. J'y ai consolidé mes connaissances théoriques et développé des 
                    compétences pratiques en programmation et en conception de systèmes informatiques.
                </p>
                <p>
                    Je suis convaincu que l'apprentissage se fait aussi en pratiquant. Mon objectif est 
                    de contribuer à des projets innovants tout en continuant à apprendre et à grandir en 
                    tant que professionnel de l'informatique.
                </p>

                <hr>

                <p>
                    Si vous recherchez un stagiaire motivé et passionné, ou si vous avez des opportunités 
                    d'alternance à offrir, n'hésitez pas à me contacter.
                </p>
            </div>

            <a href="#contact">
                <img src="img/mail.png" alt="Contact" class="contact_icone">
            </a>
        </section>

        <section id="competences">
            <h2>Compétences</h2>
            <div class="container">
                <div class="graph">
                    <div>
                        <h3>Développement Web</h3>
                        <div>
                            <h4>Front-End</h4>
                            <div class="comp">
                                <p>HTML</p>
                                <div class="conteneur-barre"><span class="barre c95"></span></div>
                            </div>
                            <div class="comp">
                                <p>CSS</p>
                                <div class="conteneur-barre"><span class="barre c70"></span></div>
                            </div>
                            <div class="comp">
                                <p>JavaScript</p>
                                <div class="conteneur-barre"><span class="barre c50"></span></div>
                            </div>
                        </div>
                        <div>
                            <h4>Back-End</h4>
                            <div class="comp">
                                <p>PHP</p>
                                <div class="conteneur-barre"><span class="barre c65"></span></div>
                            </div>
                            <div class="comp">
                                <p>MySQL</p>
                                <div class="conteneur-barre"><span class="barre c85"></span></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3>Développement Logiciel</h3>
                        <div class="comp">
                            <p>Python</p>
                            <div class="conteneur-barre"><span class="barre c80"></span></div>
                        </div>
                        <div class="comp">
                            <p>C</p>
                            <div class="conteneur-barre"><span class="barre c65"></span></div>
                        </div>
                        <div class="comp">
                            <p>C++</p>
                            <div class="conteneur-barre"><span class="barre c60"></span></div>
                        </div>
                        <div class="comp">
                            <p>VBA/Excel</p>
                            <div class="conteneur-barre"><span class="barre c75"></span></div>
                        </div>
                    </div>
                    <div>
                        <h3>Systèmes d'Exploitation</h3>
                        <div class="comp">
                            <p>Windows</p>
                            <div class="conteneur-barre"><span class="barre c75"></span></div>
                        </div>
                        <div class="comp">
                            <p>Linux</p>
                            <div class="conteneur-barre"><span class="barre c70"></span></div>
                        </div>
                    </div>
                </div>

                <div class="cv">
                    <img src="img/CV_anthony" alt="Mon CV">
                    <a href="img/CV_Skrzypczak_Anthony.pdf" download="CV_Skrzypczak_Anthony.pdf"><span>Télécharger CV</span></a>
                </div>
            </div>
        </section>

        <section id="projets">
            <h2>Projets</h2>
            <div class="container">
                <a href="#top" class="projet">
                    <img src="img/portfolio.png" alt="Portfolio">
                    <h3>Portfolio</h3>
                    <p>
                        Site sur lequel vous vous trouvez actuellement.
                    </p>
                </a>
                <div class="projet">
                    <img src="img/museo.png" alt="Museo">
                    <h3>Museo</h3>
                    <p>
                        Projet de fin d'année réalisé en groupe, d'un site web type réseau social 
                        tournée autour de l'art.
                    </p>
                    <p>
                        (En cours de développement)
                    </p>
                </div>
                <div class="projet">
                    <img src="img/brute_force.png" alt="Brute Force">
                    <h3>Brute Force</h3>
                    <p>
                        Projet d'école qui consiste en un site web fournissant des informations sur 
                        la sécurité des mots de passe, ainsi qu'un générateur de mots de passe.
                    </p>
                </div>
            </div>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <ul>
                <li>skrant44@gmail.com</li>
                <li>06 35 13 86 44</li>
            </ul>
        </section>
    </main>

    <footer>
        <?php include('pages/blocs/footer.php'); ?>
    </footer>
</body>
</html>