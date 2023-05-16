{{ include ('header.php', {title: 'Détail de l\'enchère'}) }}

<section class="py-large">
    <div class="wrapper">

        {% if session.username %}
        <div class="username">Bonjour {{ session.username }} !</div>
        {% endif %}

        <h1 class="title--primary">Mes favoris</h1><br>

        <div class="line__red__header"></div>

        <!-- Grille -->
        <div class="grid grid--4">
            {% for favori in favoris %}
            <!-- Tuile -->
            <article class="tile tile__background-mes-encheres">
                <div class="bg-xlight-gray tile__container">
                    <p class="tile__lot"># <strong>{{ favori.idEnchere }}</strong></p>
                    <img class="icone-coeur" src="{{path}}/assets/icones/heart-regular.png" alt="icone-coeur">
                </div>
                <div>
                    <div>
                        <div class="tile__img-wrapper">
                            <img src="{{path}}assets/uploads/{{ favori.source }}" alt="stamp" class="tile__img">
                        </div>
                        <div class="tile__text-wrapper">
                            <h2 class="tile__line__red__tile">{{ favori.nom }}</h2>
                            <div class="tile__mise-prix">
                                <h4 class="tile__mise">2 Mises</h4>
                                <h4 class="tile__prix">{{ favori.mise_courante }} $</h4>
                            </div>
                            <div class="tile__mise-prix">
                                <h4 class="tile__temps">Temps restant :</h4>
                                <span>2d-1h-5m-4s </span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            {% endfor %}

            <!-- <div class="numerotation">
                <a href="#" class=""><img src="{{path}}/assets/icones/chevron-petit.png" alt="icone-chevron-petit" class="icone-chevron-petit"></a>
                <a href="#" class=""><span>1</span></a>
                <a href="#" class=""><span>2</span></a>
                <a href="#" class=""><span>3</span></a>
                <a href="#" class=""><span>...</span></a>
                <a href="#" class=""><span>7</span></a>
                <a href="#" class=""><img src="{{path}}/assets/icones/chevron-grand.png" alt="icone-chevron-grand" class="icone-chevron-grand"></a>
            </div>  -->

            <!-- <p><a href="{{ path }}utilisateur/profil">Retour</a></p> -->
            
        </div>
        <div class="mt-large"></div>
        <p><a href="{{ path }}utilisateur/profil">Retour</a></p><br>
    </div>
</section>

{{ include ('footer.php') }}