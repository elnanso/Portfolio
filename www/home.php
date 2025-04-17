<?php
session_start();

if(!(isset($_SESSION["username"]) && $_SESSION["username"] == "Root")){
        header("Location: login.php");
        exit;
}
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PF</title>
    <link rel="stylesheet" href="/style/home.css">
    <script src="/javascript/home.js"></script> <!-- script -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>

<div id='nav-box'>
    <nav>
        <a href="#" onclick="getCard('home-card')"><img src='img/home.png' id='homeimg'></a>
        <a href="#" onclick="getCard('skills-card')"><img src='img/engrenage-blanc.png' id='skillsimg'></a>
        <a href="#" onclick="getCard('contact-card')"><img src='img/contact.jpg' id='contactimg'></a>
    </nav>
</div>

<div id="card-box">

    <div id='home-card' class='card card-visible'>
   
            <div id='presentation-home' class='presentation'> 
                <p id="text-presentation-home"><strong>nans lafitte. </strong></p>
            </div>

        
    
        <h3>Bienvenue sur mon portfolio</h3>
        <p class="paragraphe">
            Je suis un developpeur en alternance pour un BTS SIO SLAM (Solution Informatique aux Organisations option Solution Logiciel et Applications Métiers).
            <br>
            J'ai exploré diverses facettes de l'informatique, le développement et la cybersécurité sont mes passions.
         
            À travers mes formations, mes experiences professionnelles et personnelles, j'ai pu m'initier à une riche variété de principes et technologies.

            Sur l'aspect des systèmes informatiques en général, mais plus particulièrement sur le
            développement et la réalisation de projets logiciels.
            <br>
            Je porte également un grand intérêt aux notions de cybersécurité, les failles et leurs causes, ou encore 
            la défense qui peut être mise en place et les attaques qui peuvent être menées.

        </p>

        <hr>
 
        <div class="parcour_container">
            <h3 id="parcours_h3">Parcours</h3>
            
            <img src="img/parcours-modif.png" id="parcours">
        </div>

        
        <hr>

        <h3 id="entrep_h3"> Mon Entreprise </h3>
        <div class="entrep_container">
            <a href="https://www.pack-solutions.com/" id="entrep_a"><img src="img/entrep_logo.png" id="entrep_logo"> <img id="ps-background" src="/img/pack-solutions-background.png"> </a>
            
        </div>

    </div>
    
    
    <div id='skills-card' class='card card-cache'>
       
            <div id='presentation-skills' class='presentation' >
                <p id="text-presentation-skills">
                    <strong>skills. </strong>
                </p> 
            </div>
        
            <p>Experiences</p>

            <div id="big_container_Experiences">
    
                <div class="small_container_Experiences"  id="backend">
                    <img src="img/backend-modif.png" id="backend_logo" class="exp_logo logo">
                    <p class="titre_Experiences"><strong>BackEnd</strong></p>
                    <p class="description_Experiences">Deboggages Anomalies ou Regression</p>

                </div>

    
                <div class="small_container_Experiences" id="database">
                    <img src="img/database-modif.png" id="database_logo" class="exp_logo logo">
                    <p class="titre_Experiences"><strong> Data </strong></p>
                    <p class="description_Experiences">Developpement, Fiabilisation, Deboggages</p>


                    <br>
                </div>
                
                <div class="small_container_Experiences"  id="frontend">
                    <img src="img/frontend-modif.png" id="frontend_logo" class="exp_logo logo">
                    <p class="titre_Experiences" id="titre_FrontEnd"><strong> FrontEnd </strong></p>
                    <p class="description_Experiences">Deboggage Anomalies ou Regression</p>
                </div>
                
            </div>

            <hr>

        <p id="Titre_Language">Languages</p>
        <div id="big_container_Language">

            <img src="img/PLSQL_logo_modif.png" id="PLSQL_logo" class="language_logo logo">
            <img src="img/cplusplus_logo.png" id="cplusplus_logo" class="language_logo logo">
            <img src="img/java_logo.png" id="java_logo" class="language_logo logo">
            <img src="img/csharp_logo_modif.png" id="csharp_logo" class="language_logo logo">
            <img src="img/python_logo_modif.png" id="python_logo" class="language_logo logo">
            <img src="img/php_logo.png" id="php_logo" class="language_logo logo">
            <img src="img/html_logo_modif.png" id="html_logo" class="language_logo logo">
            <img src="img/css_logo_modif.png" id="css_logo" class="language_logo logo">
        </div>


        <hr>

        <p>Work Projects</p>

        <div id="big_container_workProject">
            <div class="small_container_workProject" id="DivArbitrage" >
                <img src="img/arbitrage-logo.png" id="ArbitrageLogo">
                <p><strong>Anomalie & Résolution d'un Arbitrage</strong></p>

                <br>
            </div>
            
            <div class="small_container_workProject"  id="DivOutilAdmin">
                <img src="img/outilsadmin.png" id="OutilAdminLogo" >
                <p> <strong> Developpement d'Outils Admin</strong> </p>

            </div>
            
            <div class="small_container_workProject"  id="DivEspaceClient">
                <img src="img/espaceclient.png">
                <p><strong> Anomalie & Résolution sur Espace Client</strong></p>
            </div>

            <div class="small_container_workProject"  id="DivContreOrdre">
                <img src="img/contre-ordre-logo.png">
                <p><strong> Developpement Outil Contre Ordre Financier</strong></p>
            </div>
            
        </div>  


        <hr>

        <p>School Projects</p>

        <div id="big_container_schoolProject">

            <div class="small_container_schoolProject"  id="DivPuissance4">
                <img src="img/puissance4_logo.png" id="puissance4_logo" class="schoolProject_logo logo">
                <p><strong>Puissance 4 </strong></p>
                <p>Jeu du puissance 4 en Javascript</p>
     
            </div>
            
            <div class="small_container_schoolProject"  id="DivDualBoot">
                <img src="img/DualBootLogo.png" id="DualBoot_logo" class="schoolProject_logo logo">
                <p><strong>Dual Boot Sécurisé </strong></p>
                <p>Documentation sur mon DualBoot Clear Linux / Windows 11</p>
     
            </div>

            <div class="small_container_schoolProject"  id="DivAvalanche">
                <img src="img/avalanche_logo.png" id="avalanche_logo" class="schoolProject_logo logo">
                <p><strong>Avalanche </strong></p>
                <p>"Simulation" en Javascript d'avalanche</p>
            </div>
            
            <div class="small_container_schoolProject" id="DivSpaceInvader">
                <img src="schoolproject/dungeoncrawler/vaisseau.png" id="vaisseau_logo" class="schoolProject_logo logo">
                <p><strong> Space Invader</strong></p>
                <p>Petit Jeu en JavaScript</p>
                <br>
            </div>
            
            
            

            
            
        </div>     
    
    </div>    
    
    
    <div id='contact-card' class='card card-cache'>

            <div id='presentation-contact' class='presentation' >
                <p id="text-presentation-contact"><strong>contact.</strong></p> 
            </div>

            <br>

            <div id="contact_container">

                <a href="https://github.com/elnanso" id="id_github_logo" class="link_contact">
                    <img src="img/github_logo_modif.png" class="contact_logo logo"> 
                    <p>elnanso</p>
                </a>

                <a href="mailto:tonemail@example.com" class="link_contact">
                    <img src="img/mail.png" alt="Email Logo" class="contact_logo logo">
                    <p>hutch.lafitte@gmail.com</p>
                </a>
            

            </div>

            <hr>

            <section id="veille-informatique" style="border-radius: 10px;">
                <h2 style="font-size: 1.5em; color:white; margin-bottom: 1rem;">Veille Informatique</h2>
                <ul style="list-style: disc; color:#ffffff97; padding-left: 10%; ">
                  <li >
                    <a href="https://daily.dev/" target="_blank" style="text-decoration: none; color: #909090c5;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#ffffff97'">
                      📰 Daily.dev — Actus dev & outils
                    </a>
                  </li>
                  <li>
                    <a href="https://www.oracle.com/fr/database/newsletters/#application-developer" target="_blank" style="text-decoration: none; color:  #909090c5;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#ffffff97'">
                      🧠 Oracle  — Newsletter sur les bases de données
                    </a>
                  </li>
                  <li>
                    <a href="https://security.snyk.io/" target="_blank" style="text-decoration: none; color:  #909090c5;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#ffffff97'">
                      🔐 Snyk — Veille sécurité & vulnérabilités
                    </a>
                  </li>
                  <li>
                    <a href="https://dev.java/news/" target="_blank" style="text-decoration: none; color:  #909090c5;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#ffffff97'">
                      ☕ Dev.java Newsletter — Java & PL/SQL
                    </a>
                  </li>
                  <li>
                    <a href="https://news.ycombinator.com/" target="_blank" style="text-decoration: none; color:  #909090c5;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#ffffff97'">
                      💬 Hacker News — Discussions & innovations tech
                    </a>
                  </li>
                </ul>
              </section>

            <hr>
            <div id="DivAnnexes" style="animation: slideInFromLeftProject 5s ease-out ;">
                <h2 style="font-size: 1.5em; color:white; margin-bottom: 1rem; ">Annexes</h2>
                
                <ul style="list-style: disc; color:#ffffff97; padding-left: 10%; ">
                    
                    <li>
                        <a href="ressources/tableau-portfolio.pdf"   target="_blank" style="text-decoration: none; color:  #909090c5;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#ffffff97'">Tableau de Compétences - BTS SIO SLAM</a>
                    </li>
                  </ul>
            </div>
           
                   

    </div>
    <footer>
        <p id="copyright">&copy; 2024 Nans Lafitte. Tous droits réservés.</p>
    </footer>

</div>
    
</body>
</html>
