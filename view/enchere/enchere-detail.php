{{ include ('header.php', {title: 'Détail de l\'enchère'}) }}

    <section>
        <div class="banner-enchere">
            <div class="content">
                <h2>Enchère # {{ idEnchere }}</h2>
                <p>{{ nom }}</p>
            </div>
        </div>
        <div class="line__red__header"></div>
    </section>

    <main>

        <div class="wrapper tile__enchere-retour-catalogue">
            <img src="{{path}}/assets/icones/chevron-petit.png" class="icone-chevron-petit" alt="retour au catalogue">
            <h4><a href="{{path}}utilisateur/profil">Retour à mon profil</a></h4>
        </div>

        <section class="wrapper__enchere">
            <div class="bg-xlight-gray tile__background-enchere">
                <div class="tile__enchere-heart">
                    <img class="icone-coeur" src="{{path}}/assets/icones/heart-regular.png" alt="icone-coeur">
                </div>
                <div class="tile__enchere">

                    <div class="img-magnifier-container">
                        <img id="myimage" src="{{path}}assets/uploads/{{ source }}" alt="stamp24" class="tile__img-enchere">
                    </div>   

                    <div>
                        <div class="tile__text-wrapper-enchere">
                            <h2 class="tile__line__red__tile">{{ nom }}</h2>

                            <div class="tile__mise-prix tile__enchere__red_line">
                                <h4 class="tile__temps">Temps restant :</h4>
                                <span>2d-1h-5m-4s </span>
                            </div>

                            <div class="tile__enchere-detail-mise tile__enchere__red_line">
                                <h3 class="">Mise courante : </h3>
                                <h2 class="">{{ mise_courante }} $</h2>
                            </div>

                            <div class="tile__enchere-detail-mise">
                                <h3 class="">Mise de départ : </h3>
                                <h2 class="">{{ prix_debut }} $</h2>
                            </div>

                            <div class="tile__enchere-detail-mise">
                                <h3 class="">Nombre de mises : </h3>
                                <h2 class="">{{ nbMise }}</h2>
                            </div>

                            <div class="tile__enchere-detail-mise tile__enchere__red_line">
                                <h3 class="">Pays d'origine : </h3>
                                <h2 class="">{{ pays_origine }}</h2>
                            </div>

                            <div class="tile__enchere-detail-mise tile__enchere__red_line">
                                <h3 class="">Paiements acceptés : </h3>
                                <img src="{{path}}/assets/icones/visa-curved-128px.png" alt="visa">
                                <img src="{{path}}/assets/icones/mastercard-straight-128px.png" alt="mastercard">
                                <img src="{{path}}/assets/icones/american-express-straight-128px.png" alt="american express">
                            </div>
                            
                            {% if session.username != utilisateur.username %}
                            <form class="tile__enchere_mise-minimum" action="{{ path }}mise/faireUneMise" method="post" >
                                <input type="hidden" name="idEnchere" value="{{ idEnchere }}">
                                <input type="hidden" name="timbre.utilisateur_id" value="{{ timbre.utilisateur_id }}">

                                <input type="number" id="EntrezMiseMinimum10" name="prix" value="{{ prix }} " placeholder="Minimum {{ miseMinimale }}">
                                <label for="EntrezMiseMinimum"></label>
                                <span>$&nbsp;</span>

                                <input class="btn-miser" type="submit" value="Miser"><br>
                            </form>
                            {% endif %}
                        </div>
                    </div> 
                </div>
                <!-- Je n'ai malheureusement pas eu le temps de terminer à positionner correctement mes thumbnails. J'ai recommencé cette section plusieurs fois et sans succès. -->    

                <div class="wrapper__tile__img-enchere-thumbnail">
                    <img src="./assets/icones/chevron-petit.png" alt="stamp27" class="icone-chevron-petit-thumbnail">   
                    <img src="./assets/img/stamp27.png" alt="stamp27" class="tile__img-enchere-thumbnail"> 
                    <img src="./assets/img/stamp28.png" alt="stamp27" class="tile__img-enchere-thumbnail"> 
                    <img src="./assets/icones/chevron-grand.png" alt="stamp27" class="icone-chevron-grand-thumbnail">                  
                </div>  
            </div>
        </section>
        
        <section class="wrapper__enchere">
            <div class="bg-xlight-gray tile__background-enchere-details">

                <div class="enchere__details">
                    <h1 class="tile__enchere__red_line">Description de l’enchère</h1>
                    <div class="wrapper__enchere-description">
                        <p>Titre :</p>
                        <p>{{ nom }}</p>
                    </div>
                    <div class="wrapper__enchere-description">
                        <p>Description :</p>
                        <p>{{ description }}</p>
                    </div>
                </div>

                <div class="enchere__details">
                    <h1 class="tile__enchere__red_line">Détails de l’enchère</h1>
                    <div class="wrapper__enchere-description">
                        <p>Pays d’origine :</p>
                        <p>{{ pays_origine }}</p>
                    </div>
                    <div class="wrapper__enchere-description">
                        <p>État : </p>
                        <p>{{ etat }}</p>
                    </div>
                    <div class="wrapper__enchere-description">
                        <p>Couleur :</p>
                        <p>{{ couleur }}</p>
                    </div>
                    <div class="wrapper__enchere-description">
                        <p>Certification :</p>
                        <p>{{ certifie }}</p>
                    </div>
                    <div class="wrapper__enchere-description">
                        <p>Dimensions :</p>
                        <p>{{ dimension }}</p>
                    </div>
                    <div class="wrapper__enchere-description">
                        <p>Année d'émission :</p>
                        <p>{{ date_creation }}</p>
                    </div>
                    <div class="wrapper__enchere-description">
                        <p>Nombre de tirage :</p>
                        <p>{{ tirage }}</p>
                    </div>
                    <div class="wrapper__enchere-description">
                        <p>Pays d'envoi :</p>
                        <p>Canada</p>
                    </div>
                    <div class="wrapper__enchere-description">
                        <p>Livraison :</p>
                        <p>Gratuite</p>
                    </div>
                </div>
            </div>           
        </section>

        <section class="py-large">
            <div class="wrapper">

                <h2 class="title--primary">Enchères similaires</h2>

                <!-- Grille -->
                <div class="grid grid--4">

                    <!-- Tuile -->
                    <article class="tile tile__background">
                        <div class="bg-xlight-gray tile__container">
                            <p class="tile__lot"># <strong>23</strong></p>
                            <img class="icone-coeur" src="{{path}}/assets/icones/heart-regular.png" alt="icone-coeur">
                        </div>
                        <div>
                            <div>
                                <div class="tile__img-wrapper">
                                    <img src="{{path}}/assets/img/WEBP/stamp2.webp" alt="Stamp2" class="tile__img">
                                </div>
                                <div class="tile__text-wrapper">
                                    <h2 class="tile__line__red__tile">GB QV 1884 2d lilac mint o.g.</h2>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__mise">2 Mises</h3>
                                        <h3 class="tile__prix">281 $</h3>
                                    </div>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__temps">Temps restant :</h3>
                                        <span>2d-1h-5m-4s </span>
                                    </div>
                                    <a href="#" class="btn-miser">Miser &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Tuile -->
                    <article class="tile tile__background">
                        <div class="bg-xlight-gray tile__container">
                            <p class="tile__lot"># <strong>142</strong></p>
                            <img class="icone-coeur" src="{{path}}/assets/icones/heart-regular.png" alt="icone-coeur">
                        </div>
                        <div>
                            <div>
                                <div class="tile__img-wrapper">
                                    <img src="{{path}}/assets/img/WEBP/stamp3.webp" alt="Stamp3" class="tile__img">
                                </div>
                                <div class="tile__text-wrapper">
                                    <h2 class="tile__line__red__tile">Scott #H74 – 1894 1c Hawaii, yellow,
                                        1c, Coat of Arms</h2>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__mise">7 Mises</h3>
                                        <h3 class="tile__prix">867 $</h3>
                                    </div>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__temps">Temps restant :</h3>
                                        <span>5d-4h-25m-41s </span>
                                    </div>
                                    <a href="#" class="btn-miser">Miser &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Tuile -->
                    <article class="tile tile__background">
                        <div class="bg-xlight-gray tile__container">
                            <p class="tile__lot"># <strong>76</strong></p>
                            <img class="icone-coeur" src="{{path}}/assets/icones/heart-regular.png" alt="icone-coeur">
                        </div>
                        <div>
                            <div>
                                <div class="tile__img-wrapper">
                                    <img src="{{path}}/assets/img/WEBP/stamp4.webp" alt="Stamp4" class="tile__img">
                                </div>
                                <div class="tile__text-wrapper">
                                    <h2 class="tile__line__red__tile">US Scott #215 Used F-VF "Pale Rose 
                                        Shade" 4c Jackson</h2>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__mise">5 Mises</h3>
                                        <h3 class="tile__prix">83 $</h3>
                                    </div>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__temps">Temps restant :</h3>
                                        <span>1d-8h-34m-22s </span>
                                    </div>
                                    <a href="#" class="btn-miser">Miser &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Tuile -->
                    <article class="tile tile__background">
                        <div class="bg-xlight-gray tile__container">
                            <p class="tile__lot"># <strong>11</strong></p>
                            <img class="icone-coeur" src="{{path}}/assets/icones/heart-regular.png" alt="icone-coeur">
                        </div>
                        <div>
                            <div>
                                <div class="tile__img-wrapper">
                                    <img src="{{path}}/assets/img/WEBP/stamp5.webp" alt="Stamp5" class="tile__img">
                                </div>
                                <div class="tile__text-wrapper">
                                    <h2 class="tile__line__red__tile">U.S. 73 USED HM PM single as shown (V5647)</h2>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__mise">1 Mises</h3>
                                        <h3 class="tile__prix">692 $</h3>
                                    </div>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__temps">Temps restant :</h3>
                                        <span>6d-4h-18m-35s </span>
                                    </div>
                                    <a href="#" class="btn-miser">Miser &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Tuile -->
                    <article class="tile tile__background">
                        <div class="bg-xlight-gray tile__container">
                            <p class="tile__lot"># <strong>7</strong></p>
                            <img class="icone-coeur" src="{{path}}/assets/icones/heart-regular.png" alt="icone-coeur">
                        </div>
                        <div>
                            <div>
                                <div class="tile__img-wrapper">
                                    <img src="{{path}}/assets/img/WEBP/stamp23.webp" alt="Stamp23" class="tile__img">
                                </div>
                                <div class="tile__text-wrapper">
                                    <h2 class="tile__line__red__tile">#5593 Go For Broke Japanese American Soldiers of WWII </h2>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__mise">4 Mises</h3>
                                        <h3 class="tile__prix">873 $</h3>
                                    </div>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__temps">Temps restant :</h3>
                                        <span>2d-6h-9m-46s </span>
                                    </div>
                                    <a href="#" class="btn-miser">Miser &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Tuile -->
                    <article class="tile tile__background">
                        <div class="bg-xlight-gray tile__container">
                            <p class="tile__lot"># <strong>557</strong></p>
                            <img class="icone-coeur" src="{{path}}/assets/icones/heart-regular.png" alt="icone-coeur">
                        </div>
                        <div>
                            <div>
                                <div class="tile__img-wrapper">
                                    <img src="{{path}}/assets/img/WEBP/stamp24.webp" alt="Stamp24" class="tile__img">
                                </div>
                                <div class="tile__text-wrapper">
                                    <h2 class="tile__line__red__tile">#1235 Kemal Ataturk - Used</h2>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__mise">7 Mises</h3>
                                        <h3 class="tile__prix">954 $</h3>
                                    </div>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__temps">Temps restant :</h3>
                                        <span>6d-7h-24m-9s </span>
                                    </div>
                                    <a href="#" class="btn-miser">Miser &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Tuile -->
                    <article class="tile tile__background">
                        <div class="bg-xlight-gray tile__container">
                            <p class="tile__lot"># <strong>35</strong></p>
                            <img class="icone-coeur" src="{{path}}/assets/icones/heart-regular.png" alt="icone-coeur">
                        </div>
                        <div>
                            <div>
                                <div class="tile__img-wrapper">
                                    <img src="{{path}}/assets/img/WEBP/stamp25.webp" alt="Stamp25" class="tile__img">
                                </div>
                                <div class="tile__text-wrapper">
                                    <h2 class="tile__line__red__tile">Scotland - #SMH24 Machin Queen Elizabeth II - Used</h2>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__mise">10 Mises</h3>
                                        <h3 class="tile__prix">983 $</h3>
                                    </div>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__temps">Temps restant :</h3>
                                        <span>7d-3h-6m-35s </span>
                                    </div>
                                    <a href="#" class="btn-miser">Miser &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Tuile -->
                    <article class="tile tile__background">
                        <div class="bg-xlight-gray tile__container">
                            <p class="tile__lot"># <strong>549</strong></p>
                            <img class="icone-coeur" src="{{path}}/assets/icones/heart-regular.png" alt="icone-coeur">
                        </div>
                        <div>
                            <div>
                                <div class="tile__img-wrapper">
                                    <img src="{{path}}/assets/img/PNG/stamp26.png" alt="Stamp26" class="tile__img">
                                </div>
                                <div class="tile__text-wrapper">
                                    <h2 class="tile__line__red__tile">Venezuela - #655 Post Office, Caracas</h2>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__mise">2 Mises</h3>
                                        <h3 class="tile__prix">765 $</h3>
                                    </div>
                                    <div class="tile__mise-prix">
                                        <h3 class="tile__temps">Temps restant :</h3>
                                        <span>4d-6h-54m-23s </span>
                                    </div>
                                    <a href="#" class="btn-miser">Miser &#8594;</a>
                                </div>
                            </div>
                        </div>
                    </article>  
                </div>

                <div class="numerotation">
                    <a href="#" class=""><img src="{{path}}/assets/icones/chevron-petit.png" alt="icone-chevron-petit" class="icone-chevron-petit"></a>
                    <a href="#" class=""><span>1</span></a>
                    <a href="#" class=""><span>2</span></a>
                    <a href="#" class=""><span>3</span></a>
                    <a href="#" class=""><span>...</span></a>
                    <a href="#" class=""><span>7</span></a>
                    <a href="#" class=""><img src="{{path}}/assets/icones/chevron-grand.png" alt="icone-chevron-grand" class="icone-chevron-grand"></a>
                </div>   
            </div>    
        </section>

    </main>

{{ include ('footer.php') }}