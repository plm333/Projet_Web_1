{{ include ('header.php', {title: 'Bienvenue'}) }}

<section class="py-large">
    <div class="wrapper">

        {% if session.username %}
        <div class="username">Bonjour {{ session.username }} !</div>
        {% endif %}

        <h1 class="title--primary">Mon profil Stampee</h1><br>

        <div class="line__red__header"></div>
        <div class="mt-small"></div>

        <div>
            <form action="{{ path }}utilisateur/update" method="post">
                <input type="hidden" name="id" value="{{ utilisateur.id }}">
                <label>Nom 
                    <input type="text" name="nom" value="{{ utilisateur.nom }}">
                </label>
                <label>Prénom 
                    <input type="text" name="prenom" value="{{ utilisateur.prenom }}">
                </label>
                <label>Adresse
                    <input type="text" name="adresse" value="{{ utilisateur.adresse }}">
                </label>
                <label>Code Postal
                    <input type="text" name="code_postal" value="{{ utilisateur.code_postal }}">
                </label>
                <label>Téléphone
                    <input type="text" name="telephone" value="{{ utilisateur.telephone }}">
                </label>
                <label>Courriel
                    <input type="email" name="courriel" value="{{ utilisateur.courriel }}">
                </label>
                <label>Date de naissance
                    <input type="text" name="date_naissance" value="{{ utilisateur.date_naissance }}">
                </label>
                <label>Date d'inscription
                    <input type="text" name="date_inscription" value="{{ utilisateur.date_inscription }}">
                </label>
                <label>Nom d'utilisateur
                    <input type="text" name="username" value="{{ utilisateur.username }}">
                </label>

                <input class="activerBtn"  type="submit" value="Modifier">

            </form>

            <form action="{{ path }}utilisateur/delete" method="post">
                <input type="hidden" name="id" value="{{ utilisateur.id }}">
                <input class="activerBtn"  type="submit" value="Supprimer">
            </form>


        </div>

        <div class="mt-small"></div>
        <p><a href="{{ path }}utilisateur/show/">Retour</a></p>

    </div>
</section>

{{ include ('footer.php') }}