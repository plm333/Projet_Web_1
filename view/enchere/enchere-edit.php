{{ include ('header.php', {title: 'Créer une enchère'}) }}

<section class="py-large">
    <div class="wrapper">
        <div class="wrapper__profil-enchere">

            {% if session.username %}
            <div class="username">Bonjour {{ session.username }} !</div>
            {% endif %}

            <h1 class="title--primary">Créer une enchère</h1><br>

            <div class="line__red__header"></div>

            {% if errors is defined %}
            <span class="error">{{ errors|raw }}</span>
            {% endif %}

            <div class="wrapper__profile-enchere-gauche">

                <form class="mt-small" action="{{ path }}enchere/update" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idTimbre" value="{{idTimbre}}">
                    <input type="hidden" name="idEnchere" value="{{idEnchere}}">

                    <label>Nom
                        <input type="text" name="nom" value="{{ nom }}">
                    </label>
                    <label>Description
                        <textarea type="text" id="description " name="description" rows="4" cols="50">{{ description }}</textarea>
                    </label>
                    <label>Date de création
                        <input type="text" name="date_creation" placeholder="AAAA-MM-JJ" value="{{ date_creation }}">
                    </label>
                    <label>Couleur
                        <select name="couleur" id="couleur">
                            <option selected value="">Choisir une couleur</option>
                            <option value="Rouge">Rouge</option>
                            <option value="Bleu">Bleu</option>
                            <option value="Vert">Vert</option>
                            <option value="Jaune">Jaune</option>
                            <option value="Orange">Orange</option>
                            <option value="Brun">Brun</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </label>
                    <label>Pays d'origine
                        <select name="pays_origine" id="pays_origine">
                            <option selected value="">Choisir un pays</option>
                            <option value="Canada">Canada</option>
                            <option value="États-Unis">États-Unis</option>
                            <option value="Royaume-Uni">Royaume-Uni</option>
                            <option value="Chine">Chine</option>
                            <option value="Espagne">Espagne</option>
                            <option value="France">France</option>
                            <option value="Australie">Australie</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </label>
                    <label>État
                        <select name="etat" id="etat">
                            <option selected value="">Choisir l'état</option>
                            <option value="Parfaite">Parfaite</option>
                            <option value="Excellente">Excellente</option>
                            <option value="Très bonne">Très bonne</option>
                            <option value="Bonne">Bonne</option>
                            <option value="Moyenne">Moyenne</option>
                            <option value="Endommagé">Endommagé</option>
                        </select>
                    </label>
                    <label>Nombre de Tirage
                        <input type="number" name="tirage" value="{{ tirage }}">
                    </label>
                    <label>Dimensions
                        <input type="text" name="dimension" placeholder="Largeur x Hauteur mm" value="{{ dimension }}">
                    </label>
                    <label>Certifié
                        <input type="checkbox" name="certifie" value="{{ certifie }}">
                    </label>
                    <label>Mise de départ
                        <input type="text" name="prix_debut" placeholder="0.00 $" value="{{ prix_debut }}">
                    </label>
                    <label>Fin de l'enchère
                        <input type="text" name="date_fin" placeholder="AAAA-MM-JJ" value="{{ date_fin }}">
                    </label>
                    <!-- <input class="activerBtn" type="submit" value="Créer"><br>
                </form> -->
            </div>

            <div class="wrapper__profile-enchere-droite">

                <h2 class="mt-small">Ajouter une photo</h2>

                <div class="wrapper__profil-enchere-image">

                    <!-- <form action="{{path}}/enchere/telechargerImage/{{idEnchere}}" method="post" enctype="multipart/form-data"> -->
                        <input type="hidden" name="idTimbre" value="{{idTimbre}}">
                        <input type="hidden" name="file_size_max" value="10000000">

                        <input type="file" name="fileToUpload" id="fileToUpload">

                        <div class="wrapper__choix-image">
                            <input type="radio" id="imagePrincipale" name="typeImage" value="1">
                            <label for="imagePrincipale">Image principale</label><br>
                            <input type="radio" id="imageSecondaires" name="typeImage" value="0">
                            <label for="imageSecondaires">Image secondaire</label><br>
                        </div>
                        <div class="mt-medium"></div>
                        <input class="activerBtn"  type="submit" value="Modifier"><br>
                </form>

                <form action="{{ path }}enchere/supprimerEnchere" method="post">
                    <input type="hidden" name="id" value="{{ utilisateur.id }}">
                    <input class="activerBtn"  type="submit" value="Supprimer">
                </form>

                </div>
            </div>

            <p><a href="{{ path }}utilisateur/profil">Retour</a></p>
            <div class="mt-large"></div>
        </div>
    </div>
</section>

{{ include ('footer.php') }}