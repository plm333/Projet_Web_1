<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
    <!-- Style -->
    <link rel="stylesheet" href="{{path}}/assets/main.css">
    <!-- Javascript -->  
    <script type="module" src="{{path}}/script/img-magnifier.js" defer></script>
</head>
<body>
    <header>
        <!-- Logo -->
        <a href="{{path}}home/index"><img class="header__logo" src="{{path}}/assets/img/WEBP/logo_final.webp" alt="Logo Stampee"></a>

        <!-- Barre de recherche -->
        <div class="recherche">
            <input type="text" placeholder="Rechercher une enchère...">
            <img src="{{path}}/assets/icones/magnifying-glass-solid.png" alt="Search logo">
        </div>
        
        <!-- Connexion/Inscription -->
        <ul class="nav__login">
            {% if session.username %}
            <li class="menu__item"><a href="{{path}}utilisateur/profil">Mon profil</a></li>
            <li class="menu__item"><span>|</span></li>
            <li class="menu__item"><a href="{{path}}login/logout">Se déconnecter</a></li>
            {% else %}
            <li class="menu__item"><a href="{{path}}login/index">Se connecter</a></li>
            <li class="menu__item"><span>|</span></li>
            <li class="menu__item"><a href="{{path}}utilisateur/create">S'inscrire</a></li>
            {% endif %}
        </ul>
    </header>

    <!-- Barre de navigation -->
    <nav class="menu">

        <!-- menu principal -->
        <ul class="menu__list">
            <li class=""><a class="menu__link" href="{{path}}enchere/catalogue">Enchères</a>
                <ul class="menu__dropdown">
                    <li class="menu__item"><a class="menu__link" href="{{path}}home/catalogue">Enchères actives</a></li>
                    <li class="menu__item"><a class="menu__link" href="{{path}}home/catalogue">Enchères archivées</a></li>
                </ul>
            </li>
            <li class="menu__item"><span>|</span></li>
            <li class=""><a class="menu__link" href="#">Fonctionnement</a>
                <ul class="menu__dropdown">
                    <li class="menu__item"><a class="menu__link" href="#">Termes et conditions</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Contactez le webmestre</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Aide</a></li>
                </ul>
            </li>
            <li class="menu__item"><span>|</span></li>
            <li class=""><a class="menu__link" href="#">Lord Stampee</a>
                <ul class="menu__dropdown">
                    <li class="menu__item"><a class="menu__link" href="#">La philatélie, c'est la vie</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Biographie du Lord</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Historique familial</a></li>
                </ul>
            </li>
            <li class="menu__item"><span>|</span></li>
            <li class=""><a class="menu__link" href="#">Contactez-nous</a></li>
            <li class="menu-burger"><img src="{{path}}/assets/icones/burger.png" alt="menuBurger"></li>
        </ul>
    </nav>
    <!-- <aside>
        {% if errors is defined %}
            <span class="error">{{ errors | raw }}</span>
        {% endif %}
    </aside> -->