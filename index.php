<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <meta name="description" content="Ceci est mon portfolio étudiant">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">
    <link rel="stylesheet" href="styles/banner/banner.css">
</head>

    <body>
        <?php include 'pages/utils/header.php'; ?>

        <div class="banner">
            <img src="img/dev.gif" alt="Bannière animée">
            <div class="banner-content">
                <h1 class="highlighted-title">Bienvenue sur mon portfolio</h1>
            </div>
        </div>
        </div>
        <h2>A propos</h2>
        <section class="carre-contenu">
            <div class="column">
                
                <p>
                    Je suis <strong> Marie NICOLAS</strong>, actuellement en 2ème année de BTS Services Informatiques aux Organisations, option Solutions Logicielles et Applications Métiers, en alternance. <br>
                    Mon parcours académique m'a permis d'acquérir des compétences variées dans le domaine de l'informatique et du développement, ainsi qu'une solide base en sciences grâce à ma Licence de Biologie.<br>
                </p>
            </div>

            <?php include 'pages/php/information.php'; ?>

            <div class="column informations">
                <!-- <span class="align-image"><img src="img/mon_profil.png" alt="Votre photo"></span> -->
                
                <p>Informations</p>
                <ul>
                    <li>Nom: <?php echo $nom; ?></li>
                    <li>Prénom: <?php echo $prenom; ?></li>
                    <li>Age: <?php echo $age; ?></li>
                    <li>Mail: <a target="_blank" href="mailto: $email" class="lien-icone"><?php echo $email; ?></a></li>
                    <li>Télécharger mon CV <a href="ressources/CVMarieNICOLAS24v1.pdf">
                        <img src="img\icon_télécharger_transparent.gif" alt="Télécharger mon CV">
                    </a></li>
                    <li><a href="ressources/Tableau-de-synthese-E4-BTSSIO2024_MarieNICOLAS.pdf">Télécharger le tableau de synthèse</a></li>
                    
                </ul>
            </div>
        </section>

        <h2 id="mes_projets"><a href="pages/projets/projets.php">Mes projets</a></h2>
        <section class="carre-contenu projets">
            
            <ul style="list-style-type: none;">
                <li><a href="pages/projets/projet_wp.php">Plugin WordPress</a></li>
                <li><a href="pages/projets/projets.php">Atelier professionnel - Gestion Visite</a></li>
                <li><a href="pages/projets/projets.php">Front WordPress Easy Reunion</a><br></li>
                <li><a href="pages/projets/projets.php">Jeu 2D - Java</a><br></li>
                <li><a href="pages/projets/projets.php">Projet perso</a><br></li>
            </ul> 

            
        </section>

        <h2  id="parcours">Parcours professionnel</h2>
        <section class="carre-contenu">
            <div class="accordion-container">
                <p class="accordion" id="bts_sio_title">BTS SIO - Services Informatiques aux Organisations</p>
                <div class="panel" id="bts_sio_content">
                <p><strong>Formation et Objectifs</strong><br><br></p>
                <p>Le BTS Services Informatiques aux Organisations (SIO), spécialité Solutions Logicielles et Applications Métiers (SLAM), est un cursus de deux ans post-bac. Cette formation vise à doter les étudiants de compétences techniques et professionnelles dans le domaine du développement logiciel et des applications informatiques. L'objectif principal est de former des techniciens capables de concevoir, développer, tester, et maintenir des solutions logicielles adaptées aux besoins des entreprises.<br><br></p>

                <p><strong>Compétences en Développement Logiciel :</strong><br><br> </p>
                <p>Pendant ces deux années, tu acquiers une solide maîtrise de différents langages de programmation tels que PHP, Java, C#, ainsi que des compétences dans l'utilisation de frameworks et de CMS comme WordPress. Tu apprends à développer des applications web et mobiles, à gérer des bases de données, et à programmer des interfaces utilisateur conviviales.<br><br></p>

                <p><strong>Analyse et Conception de Solutions : </strong><br><br></p>
                <p>Une partie importante de ta formation consiste à analyser les besoins des utilisateurs et à concevoir des solutions logicielles adaptées. Cela implique la compréhension des processus métiers des clients, la modélisation de données, et la mise en œuvre de méthodologies de conception comme UML (Unified Modeling Language).<br><br></p>

                <p><strong>Gestion de Projet et Travail en Équipe : </strong><br><br></p>
                <p>Tu apprends également les fondamentaux de la gestion de projet informatique, y compris la planification de projet, la gestion des risques, et le travail en équipe. Cette formation te prépare à collaborer efficacement avec divers intervenants, à communiquer clairement tes idées, et à gérer les délais et les contraintes budgétaires.<br><br></p>

                <p><strong>Maintenance et Sécurité Informatique : </strong><br><br></p>
                <p>La formation couvre aussi les aspects de la maintenance des applications, de la mise à jour des systèmes, et des normes de sécurité informatique. Ces compétences sont essentielles pour garantir la fiabilité et la sécurité des solutions logicielles dans un environnement professionnel.<br><br></p>

                <p><strong>Stages et Expérience Professionnelle : </strong><br><br></p>
                <p>Les stages en entreprise sont un élément crucial de ton parcours. Ils te permettent de mettre en pratique tes compétences acquises en classe dans un contexte réel, de te familiariser avec le monde professionnel, et de développer ton réseau professionnel.<br><br></p>
                </div>
            </div>
        </section>

        <h2  id="experience">Expérience professionnelle</h2>
        <section class="carre-contenu">
            
        <ul style="list-style-type: none;">
            <li><stong>Alternance Axiv IT - ActivBrowsers</stong></li>
            <p><br>Chez ActivBrowsers, une entreprise française dirigée par François Raffet, j'ai travaillé dans le pôle TMA, développant un plugin de formulaire et un plugin pour la migration des bases de données en utilisant WordPress.</p>
            <li><br>Stage Easy Réunion</li>
            <p><br>Easy Réunion, dirigée par Guillaume Huon de Kermadec à Versailles, m'a offert une expérience enrichissante dans le développement front-end du site web de l'entreprise, en utilisant WordPress, PHP, CSS, JS, et SCSS.</p>
            <li><br>Stage Informa'lys</li>
            <p><br>Informa'lys, sous la direction d'Antoine Renucci à Versailles, a été un stage d'immersion dans le dépannage informatique où j'ai travaillé sur la réparation et le fonctionnement des composants hardware.</p>
        </ul>
        </section>

        <h2 id="competences">Compétences</h2>
        <section>
            <p>WordPress</p>
        </section>


        <h2 id="veille_technologique"><a href="pages/php/veille_tech.php">Veille Technologique</h2>
        <section class="carre-contenu">
            
            <p><strong>Thème : L'Intersection de l'Informatique et de la Biologie : Révolutionner la Médecine, la Data Science et la Décisionnelle</strong></p>
            <p><br> L'impact de l'informatique et de l'IA dans les domaines de la biologie, de la science des données, et de la prise de décisions.</p>
            
        </section>

        <?php include 'pages/utils/footer.php';?>
    <script>
        document.getElementById("bts_sio_title").addEventListener("click", function() {
            this.classList.toggle("active");
            var content = document.getElementById("bts_sio_content");
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    </script>
    </body>

    
</html>