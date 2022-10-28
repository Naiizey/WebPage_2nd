<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Florian Guillou</title>
        <link rel="stylesheet" href="/general.css">
        <link rel="stylesheet" href="/Pages/cards.css">
        <link rel="icon" href="/Logo/icon.svg">
    </head>
    <header>
        <?php require($_SERVER['DOCUMENT_ROOT'] . "/NavBars/navBar.php");
              require($_SERVER['DOCUMENT_ROOT'] . "/NavBars/topBar.php");?>
    </header>
    <main>
        <h2>Projets</h2>
        <div>
            <div class="close"></div>
            <div class="card">
                <h3>Gestion de couple de parenthèses</h3>
                <article>
                    <div>
                        <p>Programme permettant la gestion de couple de parenthèses</p>
                        <p>Réalisé de base en équipe, année Terminale</p>
                    </div>
                    <img src="/Icons/Projects/pythonParenthesis.gif" alt="Python Parenthesis"/>
                </article>
                <article>
                    <p>Programme développé en Python, en groupe permettant la gestion de couple de parenthèses</p>
                    <p>Ce programme utilise le principe de pile en LIFO ( last in first out ) pour récupérer les indices des couples de parenthèses.</p>
                    <p>J'ai de mon côté complètement repris l'idée du programme afin d'en réaliser un complètement fonctionnel que vous pouvez voir ci-dessous.</p>
                    <iframe title="Python Prog" src="https://replit.com/@Naiizey/ParenthesisCouples?embed=true&v=1  "></iframe>
                </article>
            </div>
            <div class="card">
                <h3>Ancien site web</h3>
                <article>
                    <div>
                        <p>Sites de présentation type CV</p>
                        <p>Réalisés en autonomie totale. Premier en HTML CSS, second ajout de JavaScript</p>
                        <p>Ancien site dispo ici : <a href="/old">floriangll.fr/old</a></p>
                    </div>
                    <img src="/Icons/Projects/oldWebsite.png" alt="Old Website"/>
                </article>
                <article>
                    <p>Deux sites web de présentation personnelles, développés en première puis deuxième année de BUT</p>
                    <p>Le premier site a été développé entièrement en HTML & CSS. Réalisé dans le but de répondre à un travail lié aux études. Premier projet web réalisé.</p>
                    <p>Le second, maquetté puis développé, le tout en environ un mois. Ajout du javascript permettant de créer plus de possibilités et donc plus de créativité.</p>
                    <iframe title="WebSites" src="https://floriangll.fr"></iframe>
                </article>
            </div>
            <div class="card">
                <h3>Bot gestion de serveur discord</h3>
                <article>
                    <div>
                        <p>Projet Bot discord à venir</p>
                        <p>Encore en réflexion, réalisation en javascript</p>
                    </div>
                    <img src="/Icons/Projects/discord.png" alt="discord"/>
                </article>
                <article>
                    <p>En lien avec une de mes futures activités, bot de gestion de serveur discord lié au streaming</p>
                    <p>Le bot permettra la modération du serveur, tel de les restrictions des utilisateurs, la création de salons vocaux temporaires et autre...</p>
                    <p>Dans le futur, éventuellement ajouter un siteWeb/logiciel lié au bot afin d'avoir une interface graphique pour gérer le bot et les commandes.</p>
                    <iframe title="Discord" src="https://discord.com/widget?id=800832756971864114&theme=dark" width="350" height="500" allowtransparency="true" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                </article>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="/Pages/cards.js"></script>
</html>