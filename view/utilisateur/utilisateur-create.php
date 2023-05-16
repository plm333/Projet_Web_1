{{ include('header.php', {title: 'Nouvel utilisateur'}) }}

    <main class="inscription">
        <div class="wrapper">
        <div class="mt-large"></div>
            <h1>Inscription - Remplir tous les champs</h1><br>

            <div class="line__red__header"></div>

            {% if errors is defined %}
            <span class="error">{{ errors|raw }}</span>
            {% endif %}

            <form class="mt-small" action="{{ path }}utilisateur/store" method="post">
                <label>Nom
                    <input type="text" name="nom" value="{{ data.nom }}">
                </label>
                <label>Prénom
                    <input type="text" name="prenom" value="{{ data.prenom }}">
                </label>
                <label>Adresse
                    <input type="text" name="adresse" value="{{ data.adresse }}">
                </label>
                <label>Code Postal
                    <input type="text" name="code_postal" value="{{ data.code_postal }}">
                </label>
                <label>Téléphone
                    <input type="text" name="telephone" placeholder="123-456-7890" value="{{ data.telephone }}">
                </label>
                <label>Courriel
                    <input type="email" name="courriel" placeholder="abc@gmail.com" value="{{ data.courriel }}">
                </label>
                <label>Date de naissance
                    <input type="text" name="date_naissance" placeholder="AAAA-MM-JJ" value="{{ data.date_naissance }}">
                </label>
                <label>Date d'inscription
                    <input type="text" name="date_inscription" placeholder="AAAA-MM-JJ" value="{{ data.date_inscription }}">
                </label>
                <label>Nom d'utilisateur
                    <input type="text" name="username" placeholder="abc@gmail.com" value="{{ data.username }}">
                </label>
                <label>Mot de passe
                    <input type="text" name="password" value="{{ data.password }}">
                </label>
                <input class="activerBtn" type="submit" value="S'inscrire"><br>
                <p><a href="{{ path }}/home/index">Retour</a></p>
            </form>
            <div class="mt-large"></div>
        </div>
    </main>

{{ include ('footer.php') }}
