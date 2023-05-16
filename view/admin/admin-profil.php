{{ include ('header.php', {title: 'Bienvenue'}) }}

<section class="py-large">
            <div class="wrapper">

            {% if session.username %}
            <div class="username">Bonjour {{ session.username }} !</div>
            {% endif %}

                <h1 class="title--primary">Mon profil Stampee | Admin</h1><br>

                <div class="line__red__header"></div>

                <!-- Grille -->
                <div class="grid grid--4">

                    <!-- Tuile Profil -->
                    <article class="tile bg-xlight-gray tile__background-categorie">
                        <div>
                            <div>
                                <div class="tile__img-wrapper-categorie">
                                    <img src="{{path}}/assets/img/WEBP/stamp4.webp" alt="Stamp4" class="tile__img-categorie">
                                    <h1 class="tile__text-categorie-centered">Utilisateurs</h1>
                                </div>
                                <div class="tile__text-wrapper-categorie">
                                    <a href="{{ path }}utilisateur/show/{{ utilisateur_id }}" class="btn-comment">Afficher &#8594;</a> 
                                </div>
                            </div>
                        </div>
                    </article>

                    
                    <!-- Tuile Profil -->
                    <article class="tile bg-xlight-gray tile__background-categorie">
                        <div>
                            <div>
                                <div class="tile__img-wrapper-categorie">
                                    <img src="{{path}}/assets/img/WEBP/stamp5.webp" alt="Stamp3" class="tile__img-categorie">
                                    <h1 class="tile__text-categorie-centered">Enchères</h1>
                                </div>
                                <div class="tile__text-wrapper-categorie">
                                    <a href="{{path}}enchere/mesEncheres/{{ utilisateur_id }}" class="btn-comment">Afficher &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Tuile Profil -->
                    <article class="tile bg-xlight-gray tile__background-categorie">
                        <div>
                            <div>
                                <div class="tile__img-wrapper-categorie">
                                    <img src="{{path}}/assets/img/WEBP/stamp3.webp" alt="Stamp4" class="tile__img-categorie">
                                    <h1 class="tile__text-categorie-centered">Mises</h1>
                                </div>
                                <div class="tile__text-wrapper-categorie">
                                    <a href="{{path}}enchere/mesEncheres/{{ utilisateur_id }}" class="btn-comment">Afficher &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Tuile Profil -->
                    <article class="tile bg-xlight-gray tile__background-categorie">
                        <div>
                            <div>
                                <div class="tile__img-wrapper-categorie">
                                    <img src="{{path}}/assets/img/WEBP/stamp15.webp" alt="Stamp15" class="tile__img-categorie">
                                    <h1 class="tile__text-categorie-centered">Créer une enchère</h1>
                                </div>
                                <div class="tile__text-wrapper-categorie">
                                    <a href="{{path}}enchere/create" class="btn-comment">Créer &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                </div> 
                <div class="mt-small"></div>
                <p><a href="{{ path }}login">Retour</a></p>
            </div>
        </section>
        
        {{ include ('footer.php') }}