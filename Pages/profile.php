<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Florian Guillou</title>
        <link rel="stylesheet" href="/general.css">
        <link rel="stylesheet" href="/Pages/profile.css">
        <link rel="icon" href="/Logo/icon.svg">
    </head>
    <header>
        <?php require($_SERVER['DOCUMENT_ROOT'] . "/NavBars/navBar.php");
              require($_SERVER['DOCUMENT_ROOT'] . "/NavBars/topBar.php");?>
    </header>
    <main>
        <article class="presentation">
            <img src="/Icons/Profile/face.png" alt="Face Image"/>
            <p>Je m'appelle Florian Guillou et je suis un jeune étudiant en deuxième année de BUT informatique à l'IUT de
                <a href="https://www.google.com/search?q=lannion" target="_blank"> Lannion*</a>. Je suis actuellement à la recherche d'un
                 stage en développement logiciel pour la fin de mon année ( 10 avril 2023 ) et d'une alternance pour
                 l'année suivante, 3ème année de BUT.
            </p>
        </article>
        <h2>Formations</h2>
        <div class="formations">
            <article class="iutLan">
                <a href="https://iut-lannion.univ-rennes1.fr/" target="_blank"><img src="/Icons/Profile/iutLannionW.png" alt="Logo Lannion"/></a>
                <article>
                    <h3>Bachelor Universitaire et Technologique Informatique</h3>
                    <ul>
                        <li>Conception, développement et gestion de logiciels</li>
                        <li>Développement et conception de sites web</li>
                        <li>Gestion de bases de données</li>
                    </ul>
                    <p>IUT Lannion, 22300</p>
                    <p>2021-2024</p>
                </article>
            </article>
            <article class="spsb">
                <a href="https://www.st-pierre-st-brieuc.bzh/Lycee_3.html" target="_blank"><img src="/Icons/Profile/stPierreW.png" alt="Logo spsb"/></a>
                <article>
                    <h3>Baccalauréat général</h3>
                    <ul>
                        <li>Mention Européenne</li>
                        <li>Spécialités Mathématiques et Numériques & Sciences Informatiques</li>
                    </ul>
                    <p>Lycée Saint Pierre Saint-Brieuc, 22000</p>
                    <p>2021</p>
                </article>
            </article>
        </div>
    </main>
</html>